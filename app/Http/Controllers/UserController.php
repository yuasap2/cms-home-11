<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'name_kana' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'phone' => ['nullable', 'string', 'max:50'],
            'zipcode' => ['required', 'string', 'max:20'],
            'prefecture' => ['nullable', 'string', 'max:50'],
            'city' => ['nullable', 'string', 'max:50'],
            'address' => ['nullable', 'string', 'max:255'],
        ]);

        // password必須対策：仮パスワード自動生成
        $validated['password'] = Hash::make(Str::random(16));

        User::create($validated);

        return redirect()->route('account')->with('success', 'ユーザーを登録しました');
    }
    public function edit(User $user)
    {
        return view('user.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:50',
            'zipcode' => 'required|string|max:20',
            'prefecture' => 'nullable|string|max:50',
            'city' => 'nullable|string|max:50',
            'address' => 'nullable|string|max:255',
            'remarks' => 'nullable|string|max:1000',
        ]);

        $user->update($validated);

        return redirect()->route('account')->with('success','ユーザーを更新しました');
    }
}

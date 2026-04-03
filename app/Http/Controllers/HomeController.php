<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use App\Models\Contacts;
use App\Models\Inquiry;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        return view('home');
    }

        public function member()
    {
        $users = User::all();

         return view('member', compact('users'));
    }

        public function inquiryList()
    {
        $contacts = Contacts::orderBy('created_at', 'desc')->get();
        return view('inquiry_list', compact('contacts'));
    }

    public function inquiry($id)
    {
        $inquiry = Contacts::findOrFail($id);
        return view('inquiry', compact('inquiry'));
    }


    public function account()
    {
         $users = User::all();
    
         return view('account', compact('users'));
    }

    public function updateInquiry(Request $request, $id)
    {
        $validated = $request->validate([
            'status' => ['required', 'string', 'max:50'],
            'remarks' => ['nullable', 'string', 'max:1000'],
        ]);

        $inquiry = Contacts::findOrFail($id);
        $inquiry->update($validated);

        return redirect()->route('inquiry.index')->with('success', '更新しました');
    }

    
    /**
     * ユーザーをアプリケーションからログアウトさせる
     */
    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

}

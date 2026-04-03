@extends('layouts.user_base')

@section('content')
    <div class="container">
        <h1>ユーザー編集</h1>
        <form action="{{ route('user.update', ['user' => $user->id]) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="name">名前</label>
                <input type="text"
                       name="name"
                       id="name"
                       class="form-control" 
                       value="{{ old('name', $user->name) }}">
                       @error('name')
                            <div class="text-danger">{{ $message }}</div>
                       @enderror
            </div>

            <div class="form-group">
                <label for="email">メールアドレス</label>
                <input type="email"
                       name="email"
                       id="email"
                       class="form-control" 
                       value="{{ old('email', $user->email) }}">
                       @error('email')
                            <div class="text-danger">{{ $message }}</div>
                       @enderror
            </div>

            <div class="form-group">
                <label for="phone">電話番号</label>
                <input type="text"
                       name="phone"
                       id="phone" 
                       class="form-control" 
                       value="{{ old('phone', $user->phone) }}">
                       @error('phone')
                            <div class="text-danger">{{ $message }}</div>
                       @enderror
            </div>

            <div class="form-group">
                <label for="zipcode">郵便番号</label>
                <input type="text"
                       name="zipcode"
                       id="zipcode"
                       class="form-control"
                       value="{{ old('zipcode', $user->zipcode) }}">
                       @error('zipcode')
                            <div class="text-danger">{{ $message }}</div>
                       @enderror
            </div>

            <div class="form-group">
                <label for="prefecture">都道府県</label>
                <input type="text"
                       name="prefecture"
                       id="prefecture"
                       class="form-control" 
                       value="{{ old('prefecture', $user->prefecture) }}">
                       @error('prefecture')
                            <div class="text-danger">{{ $message }}</div>
                       @enderror
            </div>

            <div class="form-group">
                <label for="city">市町村</label>
                <input type="text"
                       name="city"
                       id="city"
                       class="form-control" 
                       value="{{ old('city', $user->city) }}">
                       @error('city')
                            <div class="text-danger">{{ $message }}</div>
                       @enderror
            </div>

            <div class="form-group">
                <label for="address">番地・アパート名</label>
                <input type="text"
                       name="address"
                       id="address"
                       class="form-control" 
                       value="{{ old('address', $user->address) }}">
                       @error('address')
                            <div class="text-danger">{{ $message }}</div>
                       @enderror
            </div>

            <div class="form-group">
                <label for="remarks">備考欄</label>
                <input type="text"
                       name="remarks"
                       id="remarks"
                       class="form-control"
                       value="{{ old('remarks', $user->remarks) }}">
                       @error('remarks')
                            <div class="text-danger">{{ $message }}</div>
                       @enderror
            </div>




            <button type="submit" class="btn btn-primary">更新</button>
        </form>
    </div>
@endsection

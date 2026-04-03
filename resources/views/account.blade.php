@extends('layouts.user_base')

@section('content')

<h1>
    <div class="header">
        <a href="{{ url('/home') }}" class="top">TOP</a> > アカウント一覧
    </div>
</h1>


<div class="title">アカウント一覧</div>


<div class="adminTableArea">
    <table class="table">
        <thead class="tableThead">
            <tr>
                <th scope="col">編集</th>
                <th scope="col">名前</th>
                <th scope="col">メールアドレス</th>
                <th scope="col">電話番号</th>
                <th scope="col">都道府県</th>
                <th scope="col">市町村</th>
                <th scope="col">番地・アパート名</th>
            </tr>
        </thead>
   
        <tbody class="tableTbody">
            @foreach ($users as $user)
                <tr>
                    <td><a href="{{ route('user.edit',$user->id)}}" class="tableCreateLink">編集</a></td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->phone }}</td>
                    <td>{{ $user->prefecture }}</td>
                    <td>{{ $user->city }}</td>
                    <td>{{ $user->address }}</td>
                </tr>   
            @endforeach
        </tbody>
    </table>
</div>

<br>
<div class="title">アカウント登録</div>

<form action="{{ route('user.store') }}" method="POST">
    @csrf

    @if ($errors->any())
    <div style="color:red;">
        <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
        </ul>
    </div>
    @endif
    <div>
        <div>お名前</div>
        <div><input type="text" name="name" class="accountInquiry" placeholder="例）山田  太郎"></div>
    </div>
    
    <div>
        <div>お名前（カナ）</div>
        <div><input type="text" name="name_kana" class="accountInquiry" placeholder="例）ヤマダ タロウ"></div>
    </div>

    <div>
        <div>メールアドレス</div>
        <div><input type="text" name="email" class="accountInquiry" placeholder="例）taro@example.com"></div>
    </div>

    <div>
        <div>電話番号</div>
        <div><input type="text" name="phone" class="accountInquiry" placeholder="例）123-4567-8910"></div>
    </div>

    <div>
        <div>郵便番号</div>
        <div><input type="text" name="zipcode" class="accountInquiry" placeholder="例）123-4567"></div>
    </div>

    <div>
        <div>都道府県</div>
        <div><input type="text" name="prefecture" class="accountInquiry" placeholder="例）福岡県"></div>
    </div>

    <div>
        <div>市町村</div>
        <div><input type="text" name="city" class="accountInquiry" placeholder="例）福岡市"></div>
    </div>

    <div>
        <div>番地・アパート名</div>
        <div><input type="text" name="address" class="accountInquiry" placeholder="例）1号室"></div>
    </div>

    <button type="submit" class="submitButton">登録する</button>
</form>

@endsection

@extends('layouts.admin_base')

@section('content')
<div class="header">
    <h1>
        <div class="header">
            <a class="top">TOP</a> > HOME
        </div>
        <div class="title">HOME</div>
    </h1>
</div>
<div class="adminTableArea">
    <body class="home_container">
        <table class="homeTable">
            <thead class="homeTableThead">
                <tr>
                    <th>アカウント登録</th>
                    <th>お問い合わせ情報</th>
                </tr>
            </thead>

            <tbody class="homeTableTbody">
                    <tr>
                        <td><a href="{{ route('account')}}" class="tableCreateLink">アカウント一覧</a></td>
                        <td><a href="{{ route('inquiry.index')}}" class="tableCreateLink">お問い合わせ一覧</a></td>
                    </tr>
            </tbody>
        </table>
    </body>
</div>



@endsection
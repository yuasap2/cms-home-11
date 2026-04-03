@extends('layouts.user_base')

@section('content')

<h1>
    <div class="header">
        <a href="{{ url('/home') }}" class="top">TOP</a> > お問い合わせ一覧
    </div>
</h1>

<div class="adminTableArea">
    <h1>お問い合わせ一覧</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>会社名</th>
            <th>名前</th>
            <th>メール</th>
            <th>電話番号</th>
            <th>お問い合わせ内容</th>
            <th>ステータス</th>
            <th>備考</th>
            <th>操作</th>
        </tr>

        @foreach($contacts as $contact)
            <tr>
                <td>{{ $contact->id }}</td>
                <td>{{ $contact->company }}</td>
                <td>{{ $contact->name }}</td>
                <td>{{ $contact->mail }}</td>
                <td>{{ $contact->phone }}</td>
                <td>{{ $contact->contact }}</td>
                <td>{{ $contact->status }}</td>
                <td>{{ $contact->remarks }}</td>
                <td>
                    <a href="{{ route('inquiry.edit', $contact->id) }}" class=inquiryEdit>編集</a>
                </td>
            </tr>
        @endforeach
    </table>
</div>
@endsection
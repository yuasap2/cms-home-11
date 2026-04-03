@extends('layouts.user_base')

@section('content')
<div class="header">
    <h1>
        <a href="{{ url('/home') }}" class="top">TOP</a>
         > <a href="{{ url('/inquiry') }}" class="top">お問い合わせ一覧</a>
        > <a>お問い合わせ編集（{{ $inquiry->id }}番）</a>
    </h1>
</div>
<div class="adminTableArea">
   <body class="inquiry_container">
        <h1 class="title">お問い合わせ編集</h1>
            <div class = "inquiryEnclosure">
                <div class ="status_name" >ステータス</div>
                <form action="{{ route('inquiry.update', $inquiry->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    {{-- 成功メッセージ --}}
                    @if(session('success'))
                    <div class="alert alert-success">
                            {{ session('success') }}
                    </div>
                    @endif

                    {{-- 失敗メッセージ --}}
                    @if(session('error'))
                    <div class="alert alert-danger">
                            {{ session('error') }}
                    </div>
                    @endif

                    {{-- バリデーションエラー --}}
                    @if ($errors->any())
                    <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                    </div>
                    @endif

                @php
                    $statuses = ['未対応', '対応中', '対応済'];
                @endphp      
            
                <div class="form-group">
                    
                
                    <select name="status" id="status" class="form-control">
                        @foreach($statuses as $s)
                                <option value="{{ $s }}" {{ old('status',$inquiry->status) === $s ?'selected' : '' }}>
                                {{ $s }}
                                </option>
                        @endforeach
                </select> 

                @error('status')
                        <div class="text-danger">{{ $message }}</div>
                @enderror
                </div>

                

                <div class="form-group">
                    <div class="inquiryDetails">お問い合わせ内容</div>
                <p class="form-control-plaintext">{{ $inquiry->inquiry_details }}</p>
                </div>

                
                <div class="inquiryRemarks">備考</div>
                    <div class="form-group">
                        
                        <textarea name="remarks" name="remarks" id="remarks" class="remarks_form_control" rows="3">{{ old('remarks', $inquiry->remarks) }}</textarea>
                    </div>

                <div class="inquiryInformation">お問い合わせ情報</div>

                <div class="form-group">
                    <div class="inquiryName">お問い合わせ内容:</div>
                    <p class="form-control-plaintext">{{ $inquiry->contact }}</p>
                </div> 

                <div class="form-group">
                    <div class="inquiryName">会社名:</div>
                    <p class="form-control-plaintext">{{ $inquiry->company }}</p>
                </div>         
            
                <div class="form-group">
                    <div class="inquiryName">名前:</div>
                    <p class="form-control-plaintext">{{ $inquiry->name }}</p>
                </div>

                <div class="form-group">
                    <div class="inquiryName">電話番号:</div>
                    <p class="form-control-plaintext">{{ $inquiry->phone_number }}</p>
                </div>

                <div class="form-group">
                    <div class="inquiryName">メールアドレス:</div>
                    <p class="form-control-plaintext">
                        {{ $inquiry->email }}
                    </p>
                </div>

                <div class="form-group">
                    <div class="inquiryName">生年月日:</div>
                    <p class="form-control-plaintext">
                      {{ \Carbon\Carbon::parse($inquiry->date_of_birth)->format('Y年m月d日') }}
                    </p>
                </div>

                <div class="form-group">
                    <div class="inquiryName">性別:</div>
                    <p class="form-control-plaintext">
                        {{ $inquiry->gender === 'man' ? '男' : '女' }}
                    </p>
                </div>

                <div class="form-group">
                    <div class="inquiryName">職業:</div>
                    <p class="form-control-plaintext">{{ $inquiry->job }}</p>
                </div>
                <br>
        

                <button type="submit" class="submitButton">登録する</button>
            </form>
        </div>
    </body>
</div>
@endsection
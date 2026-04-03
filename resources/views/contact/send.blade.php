<div>
    <p class="confirmItemP">会社名:{{ $contact->company}}</p>
    <p class="confirmItemP">氏名:{{ $contact->name}}</p>
    <p class="confirmItemP">電話番号:{{ $contact->phone}}</p>
    <p class="confirmItemP">メールアドレス:{{ $contact->mail}}</p>
    <p class="confirmItemP">生年月日:{{ $contact->birthday}}</p>
    <p class="confirmItemP">性別:{{ $contact->sex}}</p>
    <p class="confirmItemP">職業:{{ $contact->job}}</p>
    <p class="confirmItemP">お問い合わせ内容:{{ $contact->contact}}</p>
    <p>上記の内容で送信いたしました。</p>
    <button type="button"  onclick="location.href='http://127.0.0.1:8000/home'">戻る</button>
</div>


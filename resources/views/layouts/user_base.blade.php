<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
         <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
        <title>@yield('title')</title>
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.min.js"></script>

        @vite(['resources/css/app.css','resources/css/style.css','resources/js/app.js'])
    </head>
    <body>
        <main class="main">
            <div class="contentsArea">
                <div class="sidebar">
                  <ul class="sidebarList"> 
                    @include('parts.aside')
                        <!-- ハンバーガー  -->
                         {{-- <li class="sidebarHamburger">
                            <button type="button" class="hamburger-menu" id="js-hamburger-menu">
                                <span class="hamburger-menu__bar"></span>
                                <span class="hamburger-menu__bar"></span>
                                <span class="hamburger-menu__bar"></span>
                            </button>
                         </li>

                         <!-- アイコン ホーム -->
                         <li class="side-button">
                            <a href="{{ route('home') }}" class="sidebar-icon">
                                <i class="fa-solid fa-house"></i>
                                <div class="sidebar_menu">HOME</div>
                            </a>
                        </li>
                       
                        <!-- アイコン 会員登録 -->
                        <li class="side-button">
                            <a href="{{ route('member') }}" class="sidebar-icon">
                                <i class="fa-regular fa-address-card"></i>
                                <div class="sidebar_menu">会員登録</div>
                            </a>
                        </li>

                        <!-- アイコン  会員一覧-->
                        <li class="side-button">
                            <a href="{{ route('account') }}" class="sidebar-icon">
                                <i class="fa-solid fa-pen"></i>
                                <div class="sidebar_menu">アカウント一覧</div>
                            </a>
                        </li>
                                
                        <!-- アイコン お問い合わせ一覧 -->
                        <li class="side-button">
                            <a href="{{ route('inquiry') }}" class="sidebar-icon">
                                <i class="fa-regular fa-address-card"></i>
                                <div class="sidebar_menu_inquiry">お問い合わせ一覧</div>
                            </a>
                        </li>

                        <!-- アイコン お問い合わせ -->
                        <li class="side-button">
                            <a href="{{ route('contact.index') }}" class="sidebar-icon">
                                <i class="fa-regular fa-address-card"></i>
                                <div class="sidebar_menu_inquiry">お問い合わせ</div>
                            </a>
                        </li>     --}}
                    </ul>
                 </div>
         
           
                <div class="main-part">
                    @yield('content')
                </div>
            </div> 
        </main>
            <script>
                $(function () {
                    $('#js-hamburger-menu').on('click', function () {
                        $('.sidebar').toggleClass('shrunk')
                        $('.main-part').toggleClass('main-part-shrunk')
                        $('.side-button').toggle();      
                    });
                });
            </script> 
    </body>
</html>    
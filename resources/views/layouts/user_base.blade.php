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
        @include('parts.header')
        <main class="main">
            <div class="contentsArea">
                <div class="sidebar">
                  <ul class="sidebarList"> 
                    @include('parts.aside')
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
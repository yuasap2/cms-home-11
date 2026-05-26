<!doctype html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>

        
        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
        
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.min.js"></script>
        @vite(['resources/css/app.css', 'resources/css/style.css','resources/css/admin.css', 'resources/css/reset.css'])

       

       
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
         
           <div class="rightContents">
                <div class="contentsArea">
                    @yield('content')
                </div>
            </div>
        </main>

        {{-- <div class="adminContentsArea">
                <div class="leftContents">
                    @include('parts.aside')
                </div>
                <div class="rightContents">
                    @include('parts.header')
                    <main class="adminMain">
                        <div class="contentsArea">
                            @yield('content') 
                        </div>
                    </main>
                </div>
        </div> --}}
            <script>
                $(function () {
                    $('#js-hamburger-menu').on('click', function () {
                        $('.sidebar').toggleClass('shrunk')
                        $('.main-part').toggleClass('main-part-shrunk')
                        $('.side-button').toggle();                    });
                });
            </script> 
    </body>
</html>
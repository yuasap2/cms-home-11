
                        <!-- ハンバーガー  -->
                         <li class="sidebarHamburger">
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
                        {{-- <li class="side-button">
                            <a href="{{ route('member') }}" class="sidebar-icon">
                                <i class="fa-regular fa-address-card"></i>
                                <div class="sidebar_menu">会員登録</div>
                            </a>
                        </li> --}}

                        <!-- アイコン  会員一覧-->
                        <li class="side-button">
                            <a href="{{ route('account') }}" class="sidebar-icon">
                                <i class="fa-solid fa-pen"></i>
                                <div class="sidebar_menu">アカウント一覧</div>
                            </a>
                        </li>
                                
                        <!-- アイコン お問い合わせ一覧 -->
                        <li class="side-button">
                            <a href="{{ route('inquiry.index') }}" class="sidebar-icon">
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
                        </li>    
                   
              
            {{-- <script>
                $(function () {
                    $('#js-hamburger-menu').on('click', function () {
                        $('.sidebar').toggleClass('shrunk')
                        $('.main-part').toggleClass('main-part-shrunk')
                        $('.side-button').toggle();      
                    });
                });
            </script>  --}}
    
    <!-- ハンバーガーメニュー -->
    {{-- <div>
        <span></span>
        <span></span>
        <span></span>
    </div>
    <!-- ナビ -->
    <nav>
        <ul>
            <li>
                <a href="#">HOME</a>
            </li>
            <li>
                <a href="#">会員登録</a>
            </li>
        </ul>
    </nav> --}}
</aside>
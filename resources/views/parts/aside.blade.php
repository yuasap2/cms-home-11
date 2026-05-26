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
                            <a href="{{ route('home') }}" class="sidebar-icon {{ request()->routeIs('home') ? 'active':'' }}">
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
                            <a href="{{ route('account') }}" class="sidebar-icon {{ request()->routeIs('account') ? 'active':'' }}">
                                <i class="fa-solid fa-pen"></i>
                                <div class="sidebar_menu">アカウント一覧</div>
                            </a>
                        </li>
                                
                        <!-- アイコン お問い合わせ一覧 -->
                        <li class="side-button">
                            <a href="{{ route('inquiry.index') }}" class="sidebar-icon {{ request()->routeIs('inquiry.index') ? 'active':'' }}">
                                <i class="fa-regular fa-address-card"></i>
                                <div class="sidebar_menu_inquiry">お問い合わせ一覧</div>
                            </a>
                        </li>

                        <!-- アイコン お問い合わせ -->
                        <li class="inquiry-button">
                            <a href="{{ route('contact.index') }}">
                                <div class="inquiry-name">お問い合わせ(ユーザー)</div>
                            </a>
                        </li>    
                   
</aside>
<div class="container-fluid second-nav">
    <div class="container">
        <div class="headers">
            <nav class="navbar-questionare">

                <div class="">
                    {{-- <img src="{{ asset('user') }}/assets/images/landing-page-img/vectorsearch.png"
                        class="search-icon-index" alt="" srcset=""> --}}
                </div>
                <ul class="navbar-lists" id="myDIV">

                    <li><a class="navbar-link {{ request()->routeIs('businesses.list') ? 'mylist active' : '' }} "
                            href="{{ route('businesses.list') }}">Businesses</a></li>
                    <li><a class="navbar-link {{ request()->routeIs('freelancer.listing.frontend') ? 'mylist active' : '' }}"
                            href="{{ route('freelancer.listing.frontend') }}">Freelancers</a></li>
                    <li><a class="navbar-link {{ request()->routeIs('freelancer.setting') ? 'mylist active' : '' }}"
                            href="{{ route('freelancer.setting') }}">Settings</a></li>

                </ul>
                <div class="testers">
                    <a class="navbar-link {{ request()->routeIs('see.notifications') ? 'mylist active' : '' }}"
                        href="{{ route('see.notifications') }}">
                        <?php
                        if($blink == 1){?>
                        <ion-icon class="filled-icon-2nd-nav" name="notifications"></ion-icon>
                        <?php }else{ ?>
                        <ion-icon name="notifications-outline"></ion-icon>
                        <?php }
                        ?>
                    </a>

                    <?php

                        if($blink == 2){?>

                    <ion-icon class="filled-icon-2nd-nav-2 " name="person" id="dropdownMenuLink" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="cursor: pointer;"
                        onclick="userprofile()"></ion-icon>

                    <?php }else{ ?>
                    <ion-icon name="person-outline" id="dropdownMenuLink" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false" style="cursor: pointer;" onclick="userprofile()">
                    </ion-icon>

                    <?php }
                        ?>

                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="{{ route('freelancer.profile') }}"><i
                                class="fa-regular fa-user"></i>
                            Profile
                            Page</a>

                        <a class="dropdown-item" href="{{ route('freelancer.inbox') }}"><i
                                class="fa-regular fa-message"></i> Inbox</a>
                        <a class="dropdown-item" href=""
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();"><i
                                class="fa-solid fa-arrow-right-from-bracket"></i>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                            LogOut
                        </a>
                    </div>
                </div>
            </nav>

            <div class="mobile-navbar-btns">
                <ion-icon name="menu-outline" class="mobile-nav-icon"></ion-icon>
                <ion-icon name="close-outline" class="mobile-nav-icon"></ion-icon>
            </div>
        </div>
    </div>
</div>

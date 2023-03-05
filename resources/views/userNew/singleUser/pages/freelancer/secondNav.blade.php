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
                <div>
                    <a class="navbar-link {{ request()->routeIs('see.notifications') ? 'mylist active' : '' }}"
                        href="{{ route('see.notifications') }}">
                        <img src="{{ asset('user') }}/assets/images/landing-page-img/vectorbell.png" class="bells mx-2"
                            alt="" srcset="" />
                    </a>

              

                    <img id="dropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false" style="cursor: pointer;"
                        src="{{ asset('user') }}/assets/images/landing-page-img/vector.png" onclick="userprofile()"
                        class="bell" alt="" srcset="">

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

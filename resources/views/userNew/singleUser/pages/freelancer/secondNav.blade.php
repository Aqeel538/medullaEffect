<div class="container-fluid second-nav">
    <div class="container">
        <div class="headers">
            <nav class="navbar-questionare">

                <div class="">
                    <img src="{{ asset('user') }}/assets/images/landing-page-img/Vectorsearch.png"
                        class="search-icon-index" alt="" srcset="">
                </div>
                <ul class="navbar-lists" id="myDIV">

                    <li><a class="navbar-link {{ request()->routeIs('businesses.list') ? 'mylist active':'' }} "
                            href="{{ route('businesses.list') }}">Businesses</a></li>
                    <li><a class="navbar-link {{ request()->routeIs('freelancer.listing.frontend') ? 'mylist active':'' }}"
                            href="{{ route('freelancer.listing.frontend') }}">Freelancers</a></li>
                    <li><a class="navbar-link {{ request()->routeIs('freelancer.setting') ? 'mylist active':'' }}"
                            href="{{ route('freelancer.setting') }}">Settings</a></li>

                </ul>
                <div>
                    <a class="navbar-link " href="{{ route('see.notifications') }}">
                        <img src="{{ asset('user') }}/assets/images/landing-page-img/Vectorbell.png" class="bells"
                            alt="" srcset="">
                    </a>
                    &nbsp;
                    <a class="navbar-link" href="">
                        <img src="{{ asset('user') }}/assets/images/landing-page-img/Vector.png" class="bell"
                            alt="" srcset="">
                    </a>
                    <span><i style="cursor:pointer;" class="ri-logout-circle-line"
                            onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                        </i></span>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>




            </nav>

            <div class="mobile-navbar-btns">
                <ion-icon name="menu-outline" class="mobile-nav-icon"></ion-icon>
                <ion-icon name="close-outline" class="mobile-nav-icon"></ion-icon>
            </div>
        </div>
    </div>
</div>

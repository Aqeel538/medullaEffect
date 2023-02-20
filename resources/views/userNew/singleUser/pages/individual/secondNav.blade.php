<div class="container-fluid second-nav">
    <div class="container">
        <div class="headers">
            <nav class="navbar-questionare">

                <div class="">
                    <img src="{{ asset('user') }}/assets/images/landing-page-img/Vectorsearch.png"
                        class="search-icon-index" alt="" srcset="">
                </div>
                <ul class="navbar-lists" id="myDIV">

                    <li><a class="navbar-link {{ request()->routeIs('individual.jobs') ? 'mylist active' : '' }}"
                            href="{{ route('individual.jobs') }}">View Jobs</a></li>
                    <li><a class="navbar-link {{ request()->routeIs('individual.appliedJobs') ? 'mylist active' : '' }}"
                            href="{{ route('individual.appliedJobs') }}">View Applications</a>
                    </li>
                    <li><a class="navbar-link {{ request()->routeIs('businesses.list') ? 'mylist active' : '' }}"
                            href="#">Resume</a></li>

                </ul>
                <div>
                    <a class="{{ request()->routeIs('individual.notifications') ? 'mylist active' : '' }}"
                        href="{{ route('individual.notifications') }}">
                        <img src="{{ asset('user') }}/assets/images/landing-page-img/Vectorbell.png" class="bells"
                            alt="" srcset="">
                    </a>
                    &nbsp;
                    <a class="{{ request()->routeIs('profile') ? 'mylist active' : '' }}"
                        href="{{ route('profile') }}">
                        <img src="{{ asset('user') }}/assets/images/landing-page-img/Vector.png" class="bell"
                            alt="" srcset="">
                    </a>
                    <i style="cursor:pointer;" class="ri-logout-circle-line"
                        onclick="event.preventDefault();
    document.getElementById('logout-form').submit();">
                    </i>
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

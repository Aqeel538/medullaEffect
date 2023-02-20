<div class="container-fluid second-nav">
    <div class="container">
        <div class="headers">
            <nav class="navbar-questionare">

                <div class="">
                    <img src="{{ asset('user') }}/assets/images/landing-page-img/Vectorsearch.png"
                        class="search-icon-index" alt="" srcset="">
                </div>
                <ul class="navbar-lists" id="myDIV">

                    <li><a class="navbar-link {{ request()->routeIs('company.dashboard') ? 'mylist active' : '' }}"
                            href="{{ route('company.dashboard') }}">Dashboard</a>
                    </li>
                    <li><a class="navbar-link {{ request()->routeIs('company.jobs') ? 'mylist active' : '' }}"
                            href="{{ route('company.jobs') }}">Jobs</a></li>
                    <li><a class="navbar-link {{ request()->routeIs('company.allApplicants') ? 'mylist active' : '' }}"
                            href="{{ route('company.allApplicants') }}">Applicants</a></li>
                    <li><a class="navbar-link {{ request()->routeIs('company.individual') ? 'mylist active' : '' }}"
                            href="{{ route('company.individual') }}">Individuals</a></li>
                    <li><a class="navbar-link  {{ request()->routeIs('company.freelancer') ? 'mylist active' : '' }} "
                            href="{{ route('company.freelancer') }}">Freelancers</a>
                    </li>
                    <li><a class="navbar-link {{ request()->routeIs('comapny.setting') ? 'mylist active' : '' }}"
                            href="{{ route('comapny.setting') }}">Settings</a></li>

                </ul>
                <div>
                    <a class="navbar-link {{ request()->routeIs('company.notifications') ? 'mylist active' : '' }}"
                        href="{{ route('company.notifications') }}">
                        <img src="{{ asset('user') }}/assets/images/landing-page-img/Vectorbell.png" class="bells"
                            alt="" srcset="">
                    </a>
                    &nbsp;
                    <a class="navbar-link {{ request()->routeIs('company.dashboard') ? ' ' : '' }}"
                        href="{{ route('company.dashboard') }}">
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

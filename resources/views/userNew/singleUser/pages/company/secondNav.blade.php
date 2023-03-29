<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/brands.min.css"
    integrity="sha512-bSncow0ApIhONbz+pNI52n0trz5fMWbgteHsonaPk42JbunIeM9ee+zTYAUP1eLPky5wP0XZ7MSLAPxKkwnlzw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/js/all.min.js"
    integrity="sha512-yFjZbTYRCJodnuyGlsKamNE/LlEaEAxSUDe5+u61mV8zzqJVFOH7TnULE2/PP/l5vKWpUNnF4VGVkXh3MjgLsg=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/js/brands.min.js"
    integrity="sha512-oPuIMrT4JN6Cw359VQkuI0OPn1reFOKJm1YUOjXxgIzMmNMY7g4jenNcJdYcF3dt90WyNajzivr3vZFSzgqLow=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<div class="container-fluid second-nav">
    <div class="container">
        <div class="headers">
            <nav class="navbar-questionare3">

                <div class="search-container">

                    <div class="search-icon-container">
                        <i class="fa fa-search" id="modules-search-icon"></i>
                    </div>
                    <div class="search-form" id="modules-search-form">

                        <!-- -------------3rd---Navbar---------- -->
                        <div class="container-fluid">
                            <!-- <div class="container"> -->
                            <div class="row text-center justify-content-center">
                                <div class="col-lg-12 col-md-10 col-12 ">
                                    <h1>
                                        Search
                                    </h1>
                                    <p class="text-phara-respns  hero-sec-paragrph pt-4">
                                        Where Business Professionals Meet Other Business Professionals.Company
                                    </p>
                                </div>

                            </div>
                            <div class="row justify-content-center filter-trd-nav-row mt-3">
                                <div class="col-lg-9 col-md-12 row-bg-color">


                                    {{-- <form action="{{ route('individual.jobs.search') }}" method="GET">
                                        @csrf --}}
                                    <div class="row industry-dropdown-input">
                                        <div class="col-lg-5 col-md-4 col-12">
                                            <div class="inpus-industry">&nbsp;
                                                <i class="fa-solid fa-industry"></i>
                                                <div class="">
                                                    <input list="browsers" name="industry" class="widths"
                                                        placeholder="Job Title" />
                                                </div>


                                            </div>
                                        </div>
                                        <div class="col-lg-5 col-md-4 col-12">
                                            <div class="inpus-industry-2">
                                                <i class="fa-solid fa-location-dot"></i>

                                                <div class="pos">
                                                    <input type="search" name="searchLocation" class="width"
                                                        placeholder="Location" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-4 btns_main  text-end respn-btn">
                                            <button type="submit" class=" buttonfill text-center">
                                                Search
                                            </button>

                                            <button type="button" class="non">Cancel</button>


                                        </div>
                                    </div>
                                    {{-- </form> --}}
                                </div>
                                <div class="col-lg-1 col-md-12 filter-buton-thrd-nav justify-content-center">

                                    <button type="button" class="display-btn" onclick="closeform()">Cancel</button>

                                </div>
                            </div>
                            <!-- </div> -->
                        </div>
                        {{-- <input name="search" type="search" placeholder="Search..." style="width: 30%" />
                        <div class="select-searhbar">
                            <select name="category" class="openselect" aria-label=".form-select-sm example">
                                <option value="">Categories</option>
                                <option value="service">Service</option>
                                <option value="job">Jobs</option>
                            </select>
                        </div> --}}
                        {{-- <div class="cross-srch">
                            <i class="fa fa-times" id="close-icon"></i>
                        </div> --}}
                    </div>

                </div>
                <ul class="navbar-lists" id="myDIV">

                    <li><a class="navbar-link {{ request()->routeIs('company.dashboard') ? 'mylist active' : '' }}"
                            href="{{ route('company.dashboard') }}">Dashboard</a>
                    </li>
                    <li><a class="navbar-link {{ request()->routeIs('company.jobPost') ? 'mylist active' : '' }}"
                            href="{{ route('company.jobPost') }}">Jobs</a></li>
                    <li><a class="navbar-link {{ request()->routeIs('company.allApplicants') ? 'mylist active' : '' }}"
                            href="{{ route('company.allApplicants') }}">Applicants</a></li>
                    <li><a class="navbar-link {{ request()->routeIs('company.individual') ? 'mylist active' : '' }}"
                            href="{{ route('company.individual') }}">Individuals</a></li>
                    <li><a class="navbar-link  {{ request()->routeIs('company.freelancer') ? 'mylist active' : '' }} "
                            href="{{ route('company.freelancer') }}">Freelancers</a>
                    </li>
                    <li><a class="navbar-link  {{ request()->routeIs('company.saved.list') ? 'mylist active' : '' }} "
                            href="{{ route('company.saved.list') }}">Saved List</a>
                    </li>
                    <li><a class="navbar-link {{ request()->routeIs('comapny.setting') ? 'mylist active' : '' }}"
                            href="{{ route('comapny.setting') }}">Settings</a></li>

                </ul>
                {{-- <div>
                    <a class="navbar-link {{ request()->routeIs('company.notifications') ? 'mylist active' : '' }}"
                        href="{{ route('company.notifications') }}">
                        <img src="{{ asset('user') }}/assets/images/landing-page-img/vectorbell.png" class="bells"
                            alt="" srcset="">
                    </a>
                    &nbsp;
                    <a class="navbar-link {{ request()->routeIs('company.dashboard') ? ' ' : '' }}"
                        href="{{ route('company.dashboard') }}">
                        <img src="{{ asset('user') }}/assets/images/landing-page-img/vector.png" class="bell"
                            alt="" srcset="">
                    </a>
                    <i style="cursor:pointer;" class="ri-logout-circle-line"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                    </i>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>

                </div> --}}

                <div class="testers">
                    <a class="navbar-link {{ request()->routeIs('company.notifications') ? 'mylist active' : '' }}"
                        href="{{ route('company.notifications') }}">
                        <?php
                        if($blink == 1){?>


                        <span class="notsfction-badge-1">


                            <ion-icon class="filled-icon-2nd-nav" name="notifications"></ion-icon>
                            <span class="notification-badge">{{ request()->countNotifications }}</span>


                        </span>

                        <?php }else{ ?>
                        <a
                            href="{{ request()->getLastNotification ? route('company.notifications', request()->getLastNotification->id) : '#' }}">
                            <span class="notsfction-badge-1">


                                <ion-icon name="notifications-outline"></ion-icon>
                                <span class="notification-badge"> {{ request()->countNotifications }}</span>


                            </span>
                        </a>
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
                        <a class="dropdown-item" href="{{ route('company.jobs') }}"><i
                                class="fa-regular fa-user"></i>
                            Profile
                            Page</a>

                        <a class="dropdown-item" href="{{ route('company.inbox') }}"><i
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

<script>
    // User profile icon
    function userprofile() {
        let user = $('.userdata').css('visibility')


        if (user === "hidden") {
            $('.userdata').css('visibility', 'visible')
        } else {
            $('.userdata').css('visibility', 'hidden')
        }
    }
</script>

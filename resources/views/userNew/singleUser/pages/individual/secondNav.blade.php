<div class="container-fluid second-nav">
    <div class="container">
        <div class="headers">
            <nav class="navbar-questionare">

                {{-- <div class="">

                </div> --}}
                <form method="GET" action="{{ route('individual.jobs.search') }}" class="form-inline">
                    @csrf
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

                                    </div>
                                    <div class="col-lg-1 col-md-12 filter-buton-thrd-nav justify-content-center">

                                        <button type="button" class="display-btn" onclick="closeform()">Cancel</button>

                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>
                </form>
                <ul class="navbar-lists" id="myDIV">

                    <li><a class="navbar-link {{ request()->routeIs('individual.jobs') ? 'mylist active' : '' }}"
                            href="{{ route('individual.jobs') }}">View Jobs</a></li>
                    <li><a class="navbar-link {{ request()->routeIs('individual.appliedJobs') ? 'mylist active' : '' }}"
                            href="{{ route('individual.appliedJobs') }}">View Applications</a>
                    </li>
                    <li><a class="navbar-link {{ request()->routeIs('individual.resume') ? 'mylist active' : '' }}"
                            href="{{ route('individual.resume') }}">Resume</a></li>

                </ul>


                <div class="testers">
                    {{-- @php
                        $userId = auth()->user()->id;
                        $countNotification = DB::table('notifications')
                            ->where(
                                'dismissNotification',
                                function ($query) use ($userId) {
                                    $query->where('user_id', $userId);
                                },
                                '<',
                                1,
                            )
                            ->count();
                    @endphp --}}
                    <a class="navbar-link  {{ request()->routeIs('individual.notifications') ? 'mylist active' : '' }}"
                        href="{{ route('individual.notifications') }}">
                        <?php
                            if($blink == 1){?>
                        <span class="notsfction-badge-1">


                            <ion-icon class="filled-icon-2nd-nav" name="notifications"></ion-icon>
                            <span class="notification-badge" style="border: solid 1px !important;">
                                {{ request()->countNotifications }}</span>


                        </span>

                        <?php }else{ ?>
                        <span class="notsfction-badge-1">

                            <ion-icon name="notifications-outline"></ion-icon>
                            <span class="notification-badge" style="border: solid 1px !important;">
                                {{ request()->countNotifications }}</span>
                        </span>

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
                        <a class="dropdown-item" href="{{ route('profile') }}"><i class="fa-regular fa-user"></i>
                            Profile
                            Page</a>

                        <a class="dropdown-item" href="{{ route('individual.inbox') }}"><i
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



{{-- <script>
    // Update the notification badge when a new notification is received
    let notificationCount = {{ request()->countNotifications }};

    function updateNotificationBadge(count) {
        notificationCount = count;
        document.querySelector('.notification-badge').innerHTML = notificationCount;
    }

    // Example usage
    updateNotificationBadge(notificationCount); // Increment the notification count by 1
</script> --}}

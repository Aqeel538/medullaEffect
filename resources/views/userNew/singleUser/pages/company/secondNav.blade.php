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
            <nav class="navbar-questionare">

                <div class="">
                    {{-- <img src="{{ asset('user') }}/assets/images/landing-page-img/vectorsearch.png"
                        class="search-icon-index" alt="" srcset=""> --}}
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

                <div>
                    <a class="navbar-link {{ request()->routeIs('company.notifications') ? 'mylist active' : '' }}"
                        href="{{ route('company.notifications') }}">
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
                        <a class="dropdown-item" href="{{ route('company.jobs') }}"><i class="fa-regular fa-user"></i>
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

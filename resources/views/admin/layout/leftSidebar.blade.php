<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="/admin/dashboard">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>

        <li class="nav-item {{ Request::is('admin/user/index') ? 'active' : '' }}">
            <a class="nav-link" data-toggle="collapse" href="#individuals" aria-expanded="false" aria-controls="ui-basic">
                <i class="icon-head menu-icon"></i>
                <span class="menu-title">Individuals</span>

                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="individuals">
                <ul class="nav flex-column sub-menu">

                    <li class="nav-item "> <a class="nav-link" href="{{ route('users_index') }}">All Individuals</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item {{ Request::is('admin/freelancer/index') ? 'active' : '' }}">
            <a class="nav-link" data-toggle="collapse" href="#freelancers" aria-expanded="false" aria-controls="ui-basic">
                <i class="icon-head menu-icon"></i>
                <span class="menu-title">Freelancers</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="freelancers">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item "> <a class="nav-link {{ Route::currentRouteNamed('/users_index') ? 'active' : '' }}" href="{{ route('admin.freelancer.index') }}">All Freelancers</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item {{ Request::is('admin/companies/index') ? 'active' : '' }}">
            <a class="nav-link" data-toggle="collapse" href="#companies" aria-expanded="false" aria-controls="ui-basic">
                <i class="icon-layout menu-icon"></i>
                <span class="menu-title">Companies</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="companies">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item "> <a class="nav-link {{ Route::currentRouteNamed('/users_index') ? 'active' : '' }}" href="{{ route('admin.companies.index') }}">All Companies</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item {{ Request::is('user/tag') ? 'active' : '' }}">
            <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
                <i class="icon-columns menu-icon"></i>
                <span class="menu-title">Tags</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="form-elements">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="{{ route('users_tag') }}">View All</a>

                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
                <i class="icon-bar-graph menu-icon"></i>
                <span class="menu-title">Services</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="charts">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{ route('services') }}"> View All</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
                <i class="icon-grid-2 menu-icon"></i>
                <span class="menu-title">Category</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="tables">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{ route('users_category') }}">View All </a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#icons" aria-expanded="false" aria-controls="icons">
                <i class="icon-contract menu-icon"></i>
                <span class="menu-title">Jobs</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="icons">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{ route('jobs') }}"> View All</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#industry" aria-expanded="false" aria-controls="industry">
                <i class="icon-contract menu-icon"></i>
                <span class="menu-title">Industry</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="industry">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{ route('users_industry') }}"> View All</a>
                    </li>
                </ul>
            </div>
        </li>
        {{--<li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                <i class="icon-head menu-icon"></i>
                <span class="menu-title">User Pages</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{ asset('admin') }}/pages/samples/login.html">
        Login </a></li>
        <li class="nav-item"> <a class="nav-link" href="{{ asset('admin') }}/pages/samples/register.html">
                Register </a></li>

        </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#error" aria-expanded="false" aria-controls="error">
                <i class="icon-ban menu-icon"></i>
                <span class="menu-title">Error pages</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="error">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{ asset('admin') }}/pages/samples/error-404.html"> 404 </a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{ asset('admin') }}/pages/samples/error-500.html"> 500 </a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="pages/documentation/documentation.html">
                <i class="icon-paper menu-icon"></i>
                <span class="menu-title">Documentation</span>
            </a>
        </li>--}}
    </ul>
</nav>
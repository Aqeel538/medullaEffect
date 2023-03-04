<!DOCTYPE html>
<html lang="en">
@include('admin.layout.head')

<body>
    <div class="container-scroller">

        @include('admin.layout.navbar')
        <div class="container-fluid page-body-wrapper">

            @include('admin.layout.themeSetting')
            @include('admin.layout.rightSidebar')
            @include('admin.layout.leftSidebar')

            <div class="main-panel">

                @yield('content')
                @include('admin.layout.footer')

            </div>
        </div>
    </div>
    @include('admin.assets.script')
</body>

</html>

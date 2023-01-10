<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Individual</title>
    @include('user.singleUser.links.head')
</head>

<body style="background-color: #FFFDFD;">
    @include('user.singleUser.layouts.navbar')

    @yield('content')

    @include('user.singleUser.links.script')
</body>

</html>
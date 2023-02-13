<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> {{ $title }} </title>
    @include('userNew.singleUser.links.head')
</head>

<body style="background-color: #FFFDFD;">
    @yield('content')
    @include('userNew.singleUser.links.script')
</body>

</html>

<!DOCTYPE html>
<html>
<head>
    <link href="css/app.css" rel="stylesheet">
    <title>@yield('title')</title>
</head>
<body>

    @include('layouts.nav')

    @yield('content')

    @include('layouts.footer')

</body>
</html>
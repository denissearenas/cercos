<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <link href="css/app.css" rel="stylesheet">
    <script src="js/app.js"></script>
    <title>@yield('title')</title>
</head>
<body>

    @include('layouts.nav')

    @yield('content')

    @include('layouts.footer')

</body>
</html>
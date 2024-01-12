<!DOCTYPE html>
<html class="on-js" lang="zxx">
<head>
    @include('include.head')
</head>
<body>
    @include('include.header')
    @yield('content')
    @stack('row')
    @include('include.info')
</body>
</html>
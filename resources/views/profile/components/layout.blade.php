<!DOCTYPE html>
<html lang="en">

<head>
    @include('profile.components.head')
</head>

<body class="scrolled">
    @include('profile.components.navbar')
    @yield('content')
    @include('profile.components.footer')
    @include('profile.components.script')
</body>

</html>

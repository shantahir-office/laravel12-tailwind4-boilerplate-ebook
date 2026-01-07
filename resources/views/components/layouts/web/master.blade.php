<!DOCTYPE html>
<html lang="en">

<head>
    @include('components.layouts.web.head')

    @stack('styles')

</head>

<body class="loading">
    @include('components.layouts.web.header')
    @yield('main-content')
    @include('components.layouts.web.footer')
    @include('components.layouts.web.scripts')
    @stack('scripts')
</body>

</html>

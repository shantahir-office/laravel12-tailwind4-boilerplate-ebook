<!DOCTYPE html>
<html lang="en">

<head>
    @include('components.layouts.lp.head')
    @stack('styles')

</head>

<body>
    @include('components.layouts.lp.header')
    @yield('main-content')
    @hasSection('custom-footer')
        @yield('custom-footer')
    @else
        @include('components.layouts.lp.footer')
    @endif
    @include('components.layouts.lp.scripts')
    @stack('scripts')
</body>

</html>

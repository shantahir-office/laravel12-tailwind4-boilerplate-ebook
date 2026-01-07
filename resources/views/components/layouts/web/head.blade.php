<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>{{ $title ?? 'Book' }}</title>
<meta name="description" content="{{ $description ?? '' }}">
<meta name="keywords" content="{{ $keywords ?? '' }}">
{{-- <link rel="icon" type="images/jpg" href="{{ asset('assets/img/fav.svg') }}"> --}}

{{-- Preload Hero Banner Image --}}
{{-- <link rel="preload" as="image" href="{{ asset('images/hero-banner.webp') }}" type="image/webp" fetchpriority="high"> --}}
{{-- Swiper Slider CDN --}}

<link rel="preload" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" as="style"
    onload="this.onload=null;this.rel='stylesheet'">
<noscript>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
</noscript>

{{-- intelinput CDN --}}
<link rel="preload" href="https://cdn.jsdelivr.net/npm/intl-tel-input@25.3.1/build/css/intlTelInput.min.css"
    as="style" onload="this.onload=null;this.rel='stylesheet'">
<noscript>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@25.3.1/build/css/intlTelInput.min.css">
</noscript>

<!-- virtual select -->
{{-- <link rel="preload" href="{{ asset('vendor/css/virtual-select.min.css') }}" as="style"
    onload="this.onload=null;this.rel='stylesheet'">
<noscript>
    <link rel="stylesheet" href="{{ asset('vendor/css/virtual-select.min.css') }}">
</noscript> --}}


{{-- Fancybox CDN --}}

{{-- <link rel="preload" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css" as="style"
    onload="this.onload=null;this.rel='stylesheet'">
<noscript>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css">
</noscript> --}}

@vite('resources/css/app.css')

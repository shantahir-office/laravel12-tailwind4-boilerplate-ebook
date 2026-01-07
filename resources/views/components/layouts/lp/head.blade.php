<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>{{ $title ?? 'Trademark' }}</title>
<meta name="description"
    content="{{ $description ?? '' }}">
<meta name="keywords" content="{{ $keywords ?? '' }}">

{{-- Preload Hero Banner Image --}}
{{-- <link rel="preload" as="image" href="{{ asset('images/hero-banner.webp') }}" type="image/webp" fetchpriority="high"> --}}

@vite('resources/css/app.css')

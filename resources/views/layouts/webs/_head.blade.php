<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" href="{{ asset('web/img/favicon.ico') }}">
<link rel="stylesheet" href="{{ asset('web/css/plugins.css') }}">
<link rel="stylesheet" href="{{ asset('web/css/style.css') }}">
<link rel="stylesheet" href="{{ asset('web/css/colors/purple.css') }}">
<link rel="preload" href="{{ asset('web/css/fonts/thicccboi.css') }}" as="style" onload="this.rel='stylesheet'">
<style>
    .navbar-stick h5 {
        color: #343f52 !important;
    }

    .card {
        transition: transform 0.3s ease;
    }

    .card:hover {
        transform: scale(1.1);
    }

    .card.card-service h4 {
        color: white;
    }

    .card.card-service {
        background: #747ed1;
        color: white;
    }

    .card.card-service:hover,
    .card.card-service:hover h4 {
        background: white;
        color: black;
    }

    .card.card-service-light:hover,
    .card.card-service-light:hover h4 {
        background: #747ed1;
        color: white;
    }

    .blog-img {
        width: 350px !important;
        height: 300px !important;
    }
</style>
@section('head')
@show

{!! SEO::generate() !!}

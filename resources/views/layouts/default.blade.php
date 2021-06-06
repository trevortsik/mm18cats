<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.82.0">
    <title>@yield('title')</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/album/">

    <link href="{{mix("/css/app.css")}}" rel="stylesheet">
</head>
<body>

@include('partials.header')

<main>

@yield('content')

</main>

@include('partials.footer')

<script src="{{mix("/js/app.js")}}"></script>
{{--for npm run hot to work--}}
{{--<script src="{{ mix('js/bundle.js') }}"></script> --}}
</body>
</html>

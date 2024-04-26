<!-- resources/views/layouts/main.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> | Rafael Dato</title>
    <link rel="stylesheet" href="/assets/css/reset.css">
    <link rel="stylesheet" href="/assets/css/bootstrap-grid.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Libre+Bodoni:wght@400;600&family=Raleway:wght@400;600&display=swap"
        rel="stylesheet">
    <script src="https://kit.fontawesome.com/f4f490fd37.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="/assets/css/viewer.min.css">
    <link rel="stylesheet" href="/assets/css/style.css?v=<?=time();?>">
    <link rel="stylesheet" href="/assets/css/responsive.css?v=<?=time();?>">
    {{-- tailwindcss  --}}
    <link rel="stylesheet" href="/assets/css/tailwind.css">
</head>
    <title>@yield('title')</title>
    <!-- Include any CSS or scripts -->
</head>
<body>
    @php
    $currentRoute = request()->route()->getName() ;
    @endphp
    <!-- Header section -->
    @include('layout.header')

    <!-- Main content section -->
  
        @yield('content')


    <!-- Footer section -->
    @include('layout.footer')
</body>
</html>

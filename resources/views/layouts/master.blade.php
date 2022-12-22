<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="@yield('description')" />
    <meta name="keywords" content="" />
    <link rel="icon" href="{{ asset('assets/images/favicon.png') }}" sizes="35x35" type="image/png">
    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/elegenticons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-select.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/perfect-scrollbar.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/color.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom-css.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- REVOLUTION STYLE SHEETS -->
    <link rel="stylesheet" href="{{ asset('assets/css/revolution/settings.css') }}">
    <!-- REVOLUTION LAYERS STYLES -->
    <link rel="stylesheet" href="{{ asset('assets/css/revolution/layers.css') }}">
    <!-- REVOLUTION NAVIGATION STYLES -->
    <link rel="stylesheet" href="{{ asset('assets/css/revolution/navigation.css') }}">
</head>

<body>
    <main>

        @include('partials.navbar')

        @yield('content')

        @include('partials.footer')

    </main><!-- Main Wrapper -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/counterup.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.fancybox.min.js') }}"></script>
    <script src="{{ asset('assets/js/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets/js/slick.min.js') }}"></script>
    <script src="{{ asset('assets/js/particles.min.js') }}"></script>
    <script src="{{ asset('assets/js/particle-int.js') }}"></script>
    <script src="{{ asset('assets/js/custom-scripts.js') }}"></script>

    <script src="{{ asset('assets/js/revolution/jquery.themepunch.tools.min.js') }}"></script>
    <script src="{{ asset('assets/js/revolution/jquery.themepunch.revolution.min.js') }}"></script>

    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
    <script src="{{ asset('assets/js/revolution/extensions/revolution.extension.actions.min.js') }}"></script>
    <script src="{{ asset('assets/js/revolution/extensions/revolution.extension.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/revolution/extensions/revolution.extension.kenburn.min.js') }}"></script>
    <script src="{{ asset('assets/js/revolution/extensions/revolution.extension.layeranimation.min.js') }}"></script>
    <script src="{{ asset('assets/js/revolution/extensions/revolution.extension.migration.min.js') }}"></script>
    <script src="{{ asset('assets/js/revolution/extensions/revolution.extension.navigation.min.js') }}"></script>
    <script src="{{ asset('assets/js/revolution/extensions/revolution.extension.parallax.min.js') }}"></script>
    <script src="{{ asset('assets/js/revolution/extensions/revolution.extension.slideanims.min.js') }}"></script>
    <script src="{{ asset('assets/js/revolution/extensions/revolution.extension.video.min.js') }}"></script>
    <script src="{{ asset('assets/js/revolution/revolution-init.js') }}"></script>
</body>

</html>

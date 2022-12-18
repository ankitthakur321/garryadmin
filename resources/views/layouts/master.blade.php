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

    <!-- REVOLUTION STYLE SHEETS -->
    <link rel="stylesheet" href="{{ asset('assets/css/revolution/settings.css') }}">
    <!-- REVOLUTION LAYERS STYLES -->
    <link rel="stylesheet" href="{{ asset('assets/css/revolution/layers.css') }}">
    <!-- REVOLUTION NAVIGATION STYLES -->
    <link rel="stylesheet" href="{{ asset('assets/css/revolution/navigation.css') }}">
    <style>
        .img-logo {
            height: 150px;
            width: 200px;
        }

        .img-logo2 {
            height: 50px;
            width: 80px;
            margin-left: 2em;
        }

        .header-text1 {
            margin-left: 20px;
        }

        .header-text2 {
            margin-top: -100px;
        }

        .header-text3 {
            margin-top: 320px;
        }

        .header-text4 {
            margin-top: -80px;
        }

        .bottom-line {
            border: 3px solid #ffffff;
            width: 420px;
        }

        .header-btn {
            margin-left: 100px;
            margin-top: 300px;
            font-size: 30px;
        }

        @media only screen and (max-width: 480px) {
            .img-logo {
                height: 65px;
                width: 100px;
            }

            .header-text1 {
                margin-top: 50px;
                margin-left: 0px;
            }

            .header-text2 {
                margin-top: -40px;
            }

            .header-text3 {
                margin-top: 170px;
            }

            .header-text4 {
                margin-top: -30px;
            }

            .bottom-line {
                width: 140px;
                margin-left: auto;
                margin-right: auto;
            }

            .header-btn {
                margin-left: auto;
                margin-right: auto;
                margin-top: 50px;
                font-size: 14px;
            }
        }
    </style>
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

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>@stack('setTitle')</title>
    <link href="{{ URL::asset('img/logo/logo.png') }}" rel="icon">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" />
    <!-- MDB -->
    <link rel="stylesheet" href="{{ URL::asset('adminAssets/css/mdb.min.css') }}" />
    <!-- PRISM -->
    <link rel="stylesheet" href="{{ URL::asset('adminAssets/css/new-prism.css') }}" />
    <!-- Custom styles -->
    <style>
        @media (min-width: 1400px) {

            main,
            header,
            #main-navbar {
                padding-left: 240px;
            }
        }
    </style>
</head>

<body>
    <!--Main Navigation-->
    <header>
        @include('backend.common.sidebar')
        @include('backend.common.header')
    </header>
    <!--Main Navigation-->

    <!--Main layout-->
    <main style="margin-top: 58px">
        @yield('content')
    </main>
    
    @include('backend.common.footer')
    <script type="text/javascript" src="{{ URL::asset('adminAssets/js/new-prism.js') }}"></script>
    <!-- MDB SNIPPET -->
    <script type="text/javascript" src="{{ URL::asset('adminAssets/js/mdbsnippet.min.js') }}"></script>
    <!-- MDB -->
    <script type="text/javascript" src="{{ URL::asset('adminAssets/js/mdb.min.js') }}"></script>

    <!-- Custom scripts -->
    <script type="text/javascript">
        const sidenav = document.getElementById("sidenav-1");
        const instance = mdb.Sidenav.getInstance(sidenav);

        let innerWidth = null;

        const setMode = (e) => {
            // Check necessary for Android devices
            if (window.innerWidth === innerWidth) {
                return;
            }

            innerWidth = window.innerWidth;

            if (window.innerWidth < 1400) {
                instance.changeMode("over");
                instance.hide();
            } else {
                instance.changeMode("side");
                instance.show();
            }
        };

        setMode();

        // Event listeners
        window.addEventListener("resize", setMode);
    </script>
</body>

</html>

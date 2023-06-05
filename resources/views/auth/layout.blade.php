<!DOCTYPE html>
<html lang="en" dir="ltr" class="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    @yield('title')
    <link rel="icon" type="image/png" href="assets/images/logo/favicon.svg">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/rt-plugins.css">
    <link href="https://unpkg.com/aos@2.3.0/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="">
    <link rel="stylesheet" href="assets/css/app.css">
    <!-- START : Theme Config js-->
    <script src="assets/js/settings.js" sync></script>
    <!-- END : Theme Config js-->
</head>

<body class="font-inter skin-default">
    <!-- [if IE]> <p class="browserupgrade">
            You are using an <strong>outdated</strong> browser. Please
            <a href="https://browsehappy.com/">upgrade your browser</a> to improve
            your experience and security.
        </p> <![endif] -->

    <div class="loginwrapper">
        <div class="lg-inner-column">
            <div class="left-column relative z-[1]">
                <div class="max-w-[520px] pt-20 ltr:pl-20 rtl:pr-20">
                    <a href="/">
                        <img src="{{ url('assets/images/logo/logo.svg') }}" alt="" class="mb-10 dark_logo">
                        <img src="{{ url('assets/images/logo/logo.svg') }}" alt="" class="mb-10 white_logo">
                    </a>
                    <h5>
                        Melangkah bersama dalam dunia
                        <span class="font-bold">
                            Pemrograman.
                        </span>
                    </h5>
                </div>
                <div class="absolute left-0 2xl:bottom-[-160px] bottom-[-130px] h-full w-full z-[-1]">
                    <img src="assets/images/auth/ils1.svg" alt="" class=" h-full w-full object-contain">
                </div>
            </div>
            <div class="right-column  relative">
                <div class="inner-content h-full flex flex-col bg-white dark:bg-slate-800">
                    <div class="auth-box h-full flex flex-col justify-center">
                        <div class="mobile-logo text-center mb-6 lg:hidden block">
                            <a href="/">
                                <img src="{{ url('assets/images/logo/logo.svg') }}" alt="" class="mb-10 dark_logo">
                                <img src="{{ url('assets/images/logo/logo.svg') }}" alt="" class="mb-10 white_logo">
                            </a>
                        </div>
                        @yield('content-form-header')
                        <!-- BEGIN: Form -->
                        @yield('content-form')
                        <!-- END: Form -->
                        <div class="relative border-b-[#9AA2AF] border-opacity-[16%] border-b pt-6">
                            <div class="absolute inline-block bg-white dark:bg-slate-800 dark:text-slate-400 left-1/2 top-1/2 transform -translate-x-1/2
                                    px-4 min-w-max text-sm text-slate-500 font-normal">
                                Atau masuk menggunakan
                            </div>
                        </div>
                        <div class="max-w-[242px] mx-auto mt-8 w-full">

                            <!-- BEGIN: Social Log in Area -->
                            @yield('content-sosmed-in')
                            <!-- END: Social Log In Area -->
                        </div>
                        @yield('content-form-footer')
                    </div>
                    <div class="auth-footer text-center">
                        Copyright 2023, KodeMaya All Rights Reserved.
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- scripts -->
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/rt-plugins.js"></script>
    <script src="assets/js/app.js"></script>
    @yield('custom-script')
</body>

</html>
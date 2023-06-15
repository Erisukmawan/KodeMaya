<!DOCTYPE html>
<!-- Template N

ame: DashCode - HTML, React, Vue, Tailwind Admin Dashboard Template Author: Codeshaper Website: https://codeshaper.net Contact: support@codeshaperbd.net Like: https://www.facebook.com/Codeshaperbd Purchase: https://themeforest.net/item/dashcode-admin-dashboard-template/42600453 License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project. -->
<html lang="zxx" dir="ltr" class="light">


<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <title>KodeMaya - Melangkah bersama dalam dunia Pemrograman.</title>
    <link rel="icon" type="image/png" href="assets/images/logo/favicon.svg">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" href="assets/css/rt-plugins.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <!-- End : Theme CSS-->
    <script src="assets/js/settings.js" sync></script>
</head>

<body class=" font-inter" id="body_class">
    <!-- [if IE]> <p class="browserupgrade"> You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security. </p> <![endif] -->
    <main class="app-wrapper">
        <!-- BEGIN: Sidebar -->
        <!-- BEGIN: Sidebar -->

        <div class="sidebar-wrapper group md:hidden block">
            <div id="bodyOverlay"
                class="w-screen h-screen fixed top-0 bg-slate-900 bg-opacity-50 backdrop-blur-sm z-10 hidden"></div>
            <div class="logo-segment">
                <a class="flex items-center" href="/">
                    <img src="assets/images/logo/favicon.svg" class="black_logo" alt="logo">
                    <img src="assets/images/logo/favicon.svg" class="white_logo" alt="logo">
                    <span
                        class="ltr:ml-3 rtl:mr-3 text-xl font-Inter font-bold text-slate-900 dark:text-white">KodeMaya</span>
                </a>
                <!-- Sidebar Type Button -->
                <div id="sidebar_type" class="cursor-pointer text-slate-900 dark:text-white text-lg">
                    <span class="sidebarDotIcon extend-icon cursor-pointer text-slate-900 dark:text-white text-2xl">
                        <div
                            class="h-4 w-4 border-[1.5px] border-slate-900 dark:border-slate-700 rounded-full transition-all duration-150 ring-2 ring-inset ring-offset-4 ring-black-900 dark:ring-slate-400 bg-slate-900 dark:bg-slate-400 dark:ring-offset-slate-700">
                        </div>
                    </span>
                    <span class="sidebarDotIcon collapsed-icon cursor-pointer text-slate-900 dark:text-white text-2xl">
                        <div
                            class="h-4 w-4 border-[1.5px] border-slate-900 dark:border-slate-700 rounded-full transition-all duration-150">
                        </div>
                    </span>
                </div>
                <button class="sidebarCloseIcon text-2xl">
                    <iconify-icon class="text-slate-900 dark:text-slate-200" icon="clarity:window-close-line">
                    </iconify-icon>
                </button>
            </div>
            <div id="nav_shadow"
                class="nav_shadow h-[60px] absolute top-[80px] nav-shadow z-[1] w-full transition-all duration-200 pointer-events-none
      opacity-0">
            </div>
            <div class="sidebar-menus bg-white dark:bg-slate-800 py-2 px-4 h-[calc(100%-80px)] overflow-y-auto z-50"
                id="sidebar_menus">
                <ul class="sidebar-menu">
                    <li class="sidebar-menu-title">MENU</li>
                    <li class="">
                        <a href="#" class="navItem">
                            <span class="flex items-center">
                                <iconify-icon class="nav-icon" icon=heroicons-outline:home> </iconify-icon>
                                <span>Home</span>
                            </span>
                        </a>
                    </li>
                    <li class="">
                        <a href="javascript:void(0)" class="navItem">
                            <span class="flex items-center">
                                <iconify-icon class=" nav-icon" icon="mdi:feature-highlight"></iconify-icon>
                                <span>Fitur</span>
                            </span>
                            <iconify-icon class="icon-arrow" icon="heroicons-outline:chevron-right"></iconify-icon>
                        </a>
                        <ul class="sidebar-submenu">
                            <li>
                                <a href="project.html">Konsultasi</a>
                            </li>
                            <li>
                                <a href="project-details.html">Tulung</a>
                            </li>
                        </ul>
                    </li>
                    <li class="">
                        <a href="#" class="navItem">
                            <span class="flex items-center">
                                <iconify-icon class="nav-icon" icon=material-symbols:price-change-outline>
                                </iconify-icon>
                                <span>Harga</span>
                            </span>
                        </a>
                    </li>
                    <li class="">
                        <a href="javascript:void(0)" class="navItem">
                            <span class="flex items-center">
                                <iconify-icon class=" nav-icon" icon="material-symbols:contact-support-outline">
                                </iconify-icon>
                                <span>Bantuan</span>
                            </span>
                            <iconify-icon class="icon-arrow" icon="heroicons-outline:chevron-right"></iconify-icon>
                        </a>
                        <ul class="sidebar-submenu">
                            <li>
                                <a href="project.html">Tentang Kami</a>
                            </li>
                            <li>
                                <a href="project-details.html">Hubungi Kami</a>
                            </li>
                            <li>
                                <a href="project-details.html">Syarat dan Ketentuan</a>
                            </li>
                        </ul>
                    </li>
            </div>
        </div>
        <button id="btn-back-to-top" style="z-index:2; margin-top:21.5em"
            class="btn btn-sm  btn-danger fixed ltr:md:right-[40px] ltr:right-0 rtl:left-0 top-1/2  cursor-pointer font-medium mb-12 shadow-deep ltr:rounded-b rtl:rounded-t"
            data-bs-toggle="offcanvas" data-bs-target="#offcanvas" aria-controls="offcanvas">
            <iconify-icon class="text-sm dark:text-white" icon="mingcute:up-fill"></iconify-icon>
        </button>
        <!-- End: Sidebar -->
        <!-- End: Sidebar -->
        <div class="flex flex-col justify-between min-h-screen">
            <div>
                <!-- BEGIN: Header -->
                <!-- BEGIN: Header -->
                <div class="z-[9]" id="app_header">
                    <div
                        class="app-header z-[999] ltr:ml-[248px] rtl:mr-[248px] bg-white dark:bg-slate-800 shadow-sm dark:shadow-slate-700">
                        <div class="flex justify-between items-center h-full">
                            <div
                                class="flex items-center md:space-x-4 space-x-2 xl:space-x-0 rtl:space-x-reverse vertical-box">
                                <a href="/" class="mobile-logo xl:hidden inline-block">
                                    <img src="assets/images/logo/favicon.svg" class="black_logo" alt="logo">
                                    <img src="assets/images/logo/favicon.svg" class="white_logo" alt="logo">
                                </a>
                                {{-- <button class="smallDeviceMenuController hidden md:inline-block xl:hidden">
                                    <iconify-icon
                                        class="leading-none bg-transparent relative text-xl top-[2px] text-slate-900 dark:text-white"
                                        icon="heroicons-outline:menu-alt-3"></iconify-icon>
                                </button> --}}

                            </div>
                            <!-- end vertcial -->
                            <div class="items-center space-x-4 rtl:space-x-reverse horizental-box">
                                <a href="/">
                                    <span class="xl:inline-block hidden">
                                        <img src="assets/images/logo/logo.svg" class="black_logo " alt="logo">
                                        <img src="assets/images/logo/logo.svg" class="white_logo" alt="logo">
                                    </span>
                                    <span class="xl:hidden inline-block">
                                        <img src="assets/images/logo/favicon.svg" class="black_logo " alt="logo">
                                        <img src="assets/images/logo/favicon.svg" class="white_logo " alt="logo">
                                    </span>
                                </a>
                                {{-- <button
                                    class="smallDeviceMenuController open-sdiebar-controller xl:hidden inline-block">
                                    <iconify-icon
                                        class="leading-none bg-transparent relative text-xl top-[2px] text-slate-900 dark:text-white"
                                        icon="heroicons-outline:menu-alt-3"></iconify-icon>
                                </button> --}}

                            </div>
                            <!-- end horizental -->
                            <div class="main-menu">
                                <ul>
                                    <li class="menu-item-has-children">
                                        <a href="{{ url('/') }}" class="Navbar">
                                            <div class="flex flex-1 items-center space-x-[6px] rtl:space-x-reverse">
                                                <span class="icon-box">
                                                    <iconify-icon icon=heroicons-outline:home> </iconify-icon>
                                                </span>
                                                <div class="text-box">Home</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="menu-item-has-children ">
                                        <a href="javascript:void()">
                                            <div class="flex flex-1 items-center space-x-[6px] rtl:space-x-reverse">
                                                <span class="icon-box">
                                                    <iconify-icon icon=mdi:feature-highlight> </iconify-icon>
                                                </span>
                                                <div class="text-box">Fitur</div>
                                            </div>
                                            <div
                                                class="flex-none text-sm ltr:ml-3 rtl:mr-3 leading-[1] relative top-1">
                                                <iconify-icon icon="heroicons-outline:chevron-down"> </iconify-icon>
                                            </div>
                                        </a>
                                        <ul class="sub-menu">
                                            <li>
                                                <a href=#konsultasi>
                                                    <div class="flex space-x-2 items-start rtl:space-x-reverse">
                                                        <iconify-icon icon=heroicons-outline:chat
                                                            class="leading-[1] text-base"> </iconify-icon>
                                                        <span class="leading-[1]">
                                                            Konsultasi
                                                        </span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=#tulung>
                                                    <div class="flex space-x-2 items-start rtl:space-x-reverse">
                                                        <iconify-icon icon=ic:baseline-connect-without-contact
                                                            class="leading-[1] text-base"> </iconify-icon>
                                                        <span class="leading-[1]">
                                                            Tulung
                                                        </span>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                        <!-- Megamenu -->
                                    </li>
                                    <li class="menu-item-has-children ">
                                        <a href="javascript:void()">
                                            <div class="flex flex-1 items-center space-x-[6px] rtl:space-x-reverse">
                                                <span class="icon-box">
                                                    <iconify-icon icon=material-symbols:price-change-outline>
                                                    </iconify-icon>
                                                </span>
                                                <div class="text-box">Harga</div>
                                            </div>
                                        </a>
                                    </li>


                                    <li class="menu-item-has-children ">
                                        <!--  Single menu -->

                                        <!-- has dropdown -->



                                        <a href="javascript:void()">
                                            <div class="flex flex-1 items-center space-x-[6px] rtl:space-x-reverse">
                                                <span class="icon-box">
                                                    <iconify-icon icon=material-symbols:contact-support-outline>
                                                    </iconify-icon>
                                                </span>
                                                <div class="text-box">Bantuan</div>
                                            </div>
                                            <div
                                                class="flex-none text-sm ltr:ml-3 rtl:mr-3 leading-[1] relative top-1">
                                                <iconify-icon icon="heroicons-outline:chevron-down"> </iconify-icon>
                                            </div>
                                        </a>
                                        <ul class="sub-menu">
                                            <li>
                                                <a href=basic-table.html>
                                                    <div class="flex space-x-2 items-start rtl:space-x-reverse">
                                                        <iconify-icon icon=mdi:about class="leading-[1] text-base">
                                                        </iconify-icon>
                                                        <span class="leading-[1]">
                                                            Tentang Kami
                                                        </span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=advance-table.html>
                                                    <div class="flex space-x-2 items-start rtl:space-x-reverse">
                                                        <iconify-icon icon=fluent:contact-card-group-28-regular
                                                            class="leading-[1] text-base"> </iconify-icon>
                                                        <span class="leading-[1]">
                                                            Hubungi Kami
                                                        </span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=apex-chart.html>
                                                    <div class="flex space-x-2 items-start rtl:space-x-reverse">
                                                        <iconify-icon icon=material-symbols:privacy-tip-outline
                                                            class="leading-[1] text-base"> </iconify-icon>
                                                        <span class="leading-[1]">
                                                            Syarat dan Ketentuan
                                                        </span>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>

                                        <!-- Megamenu -->


                                    </li>

                                </ul>
                            </div>
                            <!-- end top menu -->
                            <div
                                class="nav-tools flex items-center lg:space-x-5 space-x-3 rtl:space-x-reverse leading-0">

                                <!-- BEGIN: Toggle Theme -->
                                <div>
                                    <button id="themeMood"
                                        class="h-[28px] w-[28px] lg:h-[32px] lg:w-[32px] lg:bg-gray-500 bg-slate-50 dark:bg-slate-900 lg:dark:bg-slate-900 dark:text-white text-slate-100 cursor-pointer rounded-full text-[20px] flex flex-col items-center justify-center">
                                        <span class="flex items-center">
                                            <iconify-icon
                                                class="text-slate-800 dark:text-white text-xl dark:block hidden"
                                                id="moonIcon"
                                                icon="line-md:sunny-outline-to-moon-alt-loop-transition">
                                            </iconify-icon>
                                            <iconify-icon
                                                class="text-slate-800 dark:text-white text-xl dark:hidden block"
                                                id="sunIcon"
                                                icon="line-md:moon-filled-to-sunny-filled-loop-transition">
                                            </iconify-icon>
                                        </span>
                                    </button>
                                </div>
                                @if (Auth::check())
                                <div class="md:block hidden w-full">
                                    <button class="text-slate-800 dark:text-white focus:ring-0 focus:outline-none font-medium rounded-lg text-sm text-center inline-flex items-center" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <div class="lg:h-8 lg:w-8 h-7 w-7 rounded-full flex-1 ltr:mr-[10px] rtl:ml-[10px]">
                                            <img src="{{ url('assets/images/all-img/user.png') }}" alt="user" class="block w-full h-full object-cover rounded-full">
                                        </div>
                                        <span class="flex-none text-slate-600 dark:text-white text-sm font-normal items-center lg:flex hidden overflow-hidden text-ellipsis whitespace-nowrap">{{ Auth::user()->name }}</span>
                                        <svg class="w-[16px] h-[16px] dark:text-white hidden lg:inline-block text-base inline-block ml-[10px] rtl:mr-[10px]" aria-hidden="true" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                        </svg>
                                    </button>
                                    <!-- Dropdown menu -->
                                    <div class="dropdown-menu z-10 hidden bg-white divide-y divide-slate-100 shadow w-44 dark:bg-slate-800 border dark:border-slate-700 !top-[23px] rounded-md overflow-hidden">
                                        <ul class="py-1 text-sm text-slate-800 dark:text-slate-200">
                                            <li>
                                                @php 
                                                    $acc_type = Auth::user()->account_type;
                                                    $dashboardRoute = null;

                                                    if ($acc_type == 'A') {
                                                        $dashboardRoute = 'admin.menu.dashboard';
                                                    } else if ($acc_type == 'M') {
                                                        $dashboardRoute = 'mentor.menu.dashboard';
                                                    } else {
                                                        $dashboardRoute = 'customer.menu.dashboard';
                                                    }
                                                @endphp
                                                <a href="{{ route($dashboardRoute) }}" class="block px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-600 dark:hover:text-white font-inter text-sm text-slate-600 dark:text-white font-normal">
                                                    <iconify-icon icon="line-md:home-md" class="relative top-[2px] text-lg ltr:mr-1 rtl:ml-1"></iconify-icon>
                                                    <span class="font-Inter">Dashboard</span>
                                                </a>
                                            </li>
                                            <hr>
                                            <li>
                                                <a href="/profile" class="block px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-600 dark:hover:text-white font-inter text-sm text-slate-600 dark:text-white font-normal">
                                                    <iconify-icon icon="heroicons-outline:user" class="relative top-[2px] text-lg ltr:mr-1 rtl:ml-1"></iconify-icon>
                                                    <span class="font-Inter">Profil</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/settings" class="block px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-600 dark:hover:text-white font-inter text-sm text-slate-600 dark:text-white font-normal">
                                                    <iconify-icon icon="heroicons-outline:cog" class="relative top-[2px] text-lg ltr:mr-1 rtl:ml-1"></iconify-icon>
                                                    <span class="font-Inter">Pengaturan</span>
                                                </a>
                                            </li>
                                            <li>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="block px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-600 dark:hover:text-white font-inter text-sm text-slate-600 dark:text-white font-normal">
                                                    @csrf
                                                    <button type="submit">
                                                        <iconify-icon icon="heroicons-outline:login" class="relative top-[2px] text-lg ltr:mr-1 rtl:ml-1"></iconify-icon>
                                                        <span class="font-Inter">Logout</span>
                                                    </button>
                                                </form>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                @else
                                <div>
                                    <a href="{{ route('register') }}">
                                        <button class="btn inline-flex btn-sm justify-center btn-primary ">
                                            <span class="flex items-center">
                                                <iconify-icon class="text-sm dark:text-white ltr:mr-2 rtl:ml-2"
                                                    icon="mdi:register-outline"></iconify-icon>
                                                <span>Daftar</span>
                                            </span>
                                        </button>
                                    </a>
                                    <a href="{{ route('login') }}">
                                        <button class="btn inline-flex btn-sm justify-center btn-outline-primary ">
                                            <span class="flex items-center">
                                                <iconify-icon class="text-sm dark:text-white ltr:mr-2 rtl:ml-2"
                                                    icon="heroicons-outline:login"></iconify-icon>
                                                <span class="dark:text-white">Masuk</span>
                                            </span>
                                        </button>
                                    </a>
                                </div>
                                @endif
                                <!-- END: TOggle Theme -->
                                <!-- END: Header -->
                                <button class="smallDeviceMenuController xl:hidden block leading-0">
                                    <iconify-icon class="cursor-pointer text-slate-900 dark:text-white text-2xl"
                                        icon="heroicons-outline:menu-alt-3"></iconify-icon>
                                </button>
                                <!-- end mobile menu -->
                                <!-- end nav tools -->
                            </div>
                        </div>
                    </div>


                    <!-- END: Header -->
                    <!-- END: Header -->
                    @yield('content')
                    @include('landingpage.footer')

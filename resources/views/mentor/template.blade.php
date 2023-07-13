@extends('auth.dashboard')

@section('header-element')
<div class="flex justify-between items-center h-full">
    <div class="flex items-center md:space-x-4 space-x-2 xl:space-x-0 rtl:space-x-reverse vertical-box">
        <a href="{{ route('landingpage') }}" class="mobile-logo xl:hidden inline-block">
            <img src="{{ url('/assets/images/logo/favicon.svg') }}" class="black_logo" alt="logo">
            <img src="{{ url('/assets/images/logo/favicon.svg') }}" class="white_logo" alt="logo">
        </a>
        <button class="smallDeviceMenuController hidden md:inline-block xl:hidden">
            <iconify-icon class="leading-none bg-transparent relative text-xl top-[2px] text-slate-900 dark:text-white" icon="heroicons-outline:menu-alt-3"></iconify-icon>
        </button>
        <button class="flex items-center xl:text-sm text-lg xl:text-slate-400 text-slate-800 dark:text-slate-300 px-1 rtl:space-x-reverse search-modal" data-bs-toggle="modal" data-bs-target="#searchModal">
            <iconify-icon icon="heroicons-outline:search"></iconify-icon>
            <span class="xl:inline-block hidden ml-3">Search...
            </span>
        </button>

    </div>
    <!-- end vertcial -->
    <div class="items-center space-x-4 rtl:space-x-reverse horizental-box">
        <a href="{{ route('landingpage') }}">
            <span class="xl:inline-block hidden">
                <img src="{{ url('assets/images/logo/logo.svg') }}" class="black_logo " alt="logo">
                <img src="{{ url('assets/images/logo/logo-white.svg') }}" class="white_logo" alt="logo">
            </span>
            <span class="xl:hidden inline-block">
                <img src="{{ url('assets/images/logo/logo-c.svg') }}" class="black_logo " alt="logo">
                <img src="{{ url('assets/images/logo/logo-c-white.svg') }}" class="white_logo " alt="logo">
            </span>
        </a>
        <button class="smallDeviceMenuController  open-sdiebar-controller xl:hidden inline-block">
            <iconify-icon class="leading-none bg-transparent relative text-xl top-[2px] text-slate-900 dark:text-white" icon="heroicons-outline:menu-alt-3"></iconify-icon>
        </button>

    </div>

    <div class="nav-tools flex items-center lg:space-x-5 space-x-3 rtl:space-x-reverse leading-0">
        <!-- Theme Changer -->
        <!-- BEGIN: Toggle Theme -->
        <div>
            <button id="themeMood" class="h-[28px] w-[28px] lg:h-[32px] lg:w-[32px] lg:bg-gray-500-f7 bg-slate-50 dark:bg-slate-900 lg:dark:bg-slate-900 dark:text-white text-slate-900 cursor-pointer rounded-full text-[20px] flex flex-col items-center justify-center">
                <iconify-icon class="text-slate-800 dark:text-white text-xl dark:block hidden" id="moonIcon" icon="line-md:sunny-outline-to-moon-alt-loop-transition"></iconify-icon>
                <iconify-icon class="text-slate-800 dark:text-white text-xl dark:hidden block" id="sunIcon" icon="line-md:moon-filled-to-sunny-filled-loop-transition"></iconify-icon>
            </button>
        </div>
        <!-- END: Toggle Theme -->

        <!-- BEGIN: gray-scale Dropdown -->
        <div>
            <button id="grayScale" class="lg:h-[32px] lg:w-[32px] lg:bg-slate-100 lg:dark:bg-slate-900 dark:text-white text-slate-900 cursor-pointer rounded-full text-[20px] flex flex-col items-center justify-center">
                <iconify-icon class="text-slate-800 dark:text-white text-xl" icon="mdi:paint-outline"></iconify-icon>
            </button>
        </div>
        <!-- END: gray-scale Dropdown -->

        <!-- BEGIN: Notification Dropdown -->
        <!-- Notifications Dropdown area -->
        <div class="relative md:block hidden">
            <button class="lg:h-[32px] lg:w-[32px] lg:bg-slate-100 lg:dark:bg-slate-900 dark:text-white text-slate-900 cursor-pointer rounded-full text-[20px] flex flex-col items-center justify-center" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <iconify-icon class="animate-tada text-slate-800 dark:text-white text-xl" icon="heroicons-outline:bell"></iconify-icon>
                <span class="absolute -right-1 lg:top-0 -top-[6px] h-4 w-4 bg-red-500 text-[8px] font-semibold flex flex-col items-center justify-center rounded-full text-white z-[99]">
                    4</span>
            </button>
            <!-- Notifications Dropdown -->
            <div class="dropdown-menu z-10 hidden bg-white shadow w-[335px] dark:bg-slate-800 border dark:border-slate-700 !top-[23px] rounded-md overflow-hidden lrt:origin-top-right rtl:origin-top-left">
                <div class="flex items-center justify-between py-4 px-4">
                    <h3 class="text-sm font-Inter font-medium text-slate-700 dark:text-white">Notifications</h3>
                    <a class="text-xs font-Inter font-normal underline text-slate-500 dark:text-white" href="#">See All</a>
                </div>
                <div class="" role="none">
                    <div class="bg-slate-100 dark:bg-slate-700 dark:bg-opacity-70 text-slate-800 block w-full px-4 py-2 text-sm relative">
                        <div class="flex ltr:text-left rtl:text-right">
                            <div class="flex-none ltr:mr-3 rtl:ml-3">
                                <div class="h-8 w-8 bg-white rounded-full">
                                    <img src="{{ url('assets/images/all-img/user.png') }}" alt="user" class="border-white block w-full h-full object-cover rounded-full border">
                                </div>
                            </div>
                            <div class="flex-1">
                                <a href="#" class="text-slate-600 dark:text-slate-300 text-sm font-medium mb-1 before:w-full before:h-full before:absolute before:top-0 before:left-0">
                                    Your order is placed</a>
                                <div class="text-slate-500 dark:text-slate-200 text-xs leading-4">Amet minim mollit non deser unt ullamco est sit
                                    aliqua.</div>
                                <div class="text-slate-400 dark:text-slate-400 text-xs mt-1">
                                    3 min ago
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-slate-600 dark:text-slate-300 block w-full px-4 py-2 text-sm">
                        <div class="flex ltr:text-left rtl:text-right relative">
                            <div class="flex-none ltr:mr-3 rtl:ml-3">
                                <div class="h-8 w-8 bg-white rounded-full">
                                    <img src="/assets/images/all-img/user2.png" alt="user" class="border-transparent block w-full h-full object-cover rounded-full border">
                                </div>
                            </div>
                            <div class="flex-1">
                                <a href="#" class="text-slate-600 dark:text-slate-300 text-sm font-medium mb-1 before:w-full before:h-full before:absolute before:top-0 before:left-0">
                                    Congratulations Darlene 🎉</a>
                                <div class="text-slate-600 dark:text-slate-300 text-xs leading-4">Won the monthly best seller badge</div>
                                3 min ago
                            </div>
                        </div>
                        <div class="flex-0">
                            <span class="h-[10px] w-[10px] bg-danger-500 border border-white dark:border-slate-400 rounded-full inline-block"></span>
                        </div>
                    </div>
                </div>
                <div class="text-slate-600 dark:text-slate-300 block w-full px-4 py-2 text-sm">
                    <div class="flex ltr:text-left rtl:text-right relative">
                        <div class="flex-none ltr:mr-3 rtl:ml-3">
                            <div class="h-8 w-8 bg-white rounded-full">
                                <img src="/assets/images/all-img/user3.png" alt="user" class="border-transparent block w-full h-full object-cover rounded-full border">
                            </div>
                        </div>
                        <div class="flex-1">
                            <a href="#" class="text-slate-600 dark:text-slate-300 text-sm font-medium mb-1 before:w-full before:h-full before:absolute before:top-0 before:left-0">
                                Revised Order 👋</a>
                            <div class="text-slate-600 dark:text-slate-300 text-xs leading-4">Won the monthly best seller badge</div>
                            <div class="text-slate-400 dark:text-slate-400 text-xs mt-1">3 min ago</div>
                        </div>
                    </div>
                </div>
                <div class="text-slate-600 dark:text-slate-300 block w-full px-4 py-2 text-sm">
                    <div class="flex ltr:text-left rtl:text-right relative">
                        <div class="flex-none ltr:mr-3 rtl:ml-3">
                            <div class="h-8 w-8 bg-white rounded-full">
                                <img src="/assets/images/all-img/user4.png" alt="user" class="border-transparent block w-full h-full object-cover rounded-full border">
                            </div>
                        </div>
                        <div class="flex-1">
                            <a href="#" class="text-slate-600 dark:text-slate-300 text-sm font-medium mb-1 before:w-full before:h-full before:absolute before:top-0 before:left-0">
                                Brooklyn Simmons</a>
                            <div class="text-slate-600 dark:text-slate-300 text-xs leading-4">Added you to Top Secret Project group...</div>
                            <div class="text-slate-400 dark:text-slate-400 text-xs mt-1">
                                3 min ago
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Notification Dropdown -->

        <!-- BEGIN: Profile Dropdown -->
        <!-- Profile DropDown Area -->
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
                        <a href="{{ route('mentor.profile') }}" class="block px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-600 dark:hover:text-white font-inter text-sm text-slate-600 dark:text-white font-normal">
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
                </ul>
            </div>
        </div>
        <!-- END: Header -->
        <button class="smallDeviceMenuController md:hidden block leading-0">
            <iconify-icon class="cursor-pointer text-slate-900 dark:text-white text-2xl" icon="heroicons-outline:menu-alt-3"></iconify-icon>
        </button>
        <!-- end mobile menu -->
    </div>
    <!-- end nav tools -->
</div>
@endsection

@section('content')
<div class="content-wrapper transition-all duration-150 ltr:ml-[248px] rtl:mr-[248px]" id="content_wrapper">
    <div class="page-content">
        <div class="transition-all duration-150 container-fluid" id="page_layout">
            <div id="content_layout">
                <!-- BEGIN: Breadcrumb -->
                <div class="mb-5">
                    <ul class="m-0 p-0 list-none">
                        <li class="inline-block relative top-[3px] text-base text-primary-500 font-Inter ">
                            <a href="{{ route('mentor.menu.dashboard') }}">
                                <iconify-icon icon="heroicons-outline:home"></iconify-icon>
                            </a>
                        </li>
                        @foreach(explode('.', Route::current()->getName()) as $name)
                        <li class="inline-block relative text-sm text-slate-500 font-Inter dark:text-white">
                            <iconify-icon icon="heroicons-outline:chevron-right" class="relative top-[3px] text-slate-500 rtl:rotate-180"></iconify-icon>
                            {{ $name }}
                        </li>
                        @endforeach

                    </ul>
                </div>
                <!-- END: BreadCrumb -->
                <div class=" space-y-5">
                    @yield('main-content')
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection

@section('sidebar')
<div class="sidebar-wrapper group">
    <div id="bodyOverlay" class="w-screen h-screen fixed top-0 bg-slate-900 bg-opacity-50 backdrop-blur-sm z-10 hidden"></div>
    <div class="logo-segment">
        <a class="flex items-center" href="{{ route('landingpage') }}">
            <img src="{{ url('/assets/images/logo/favicon.svg') }}" class="black_logo" alt="logo">
            <img src="{{ url('/assets/images/logo/favicon.svg') }}" class="white_logo" alt="logo">
            <span class="ltr:ml-3 rtl:mr-3 text-xl font-Inter font-bold text-slate-900 dark:text-white">KodeMaya</span>
        </a>
        <!-- Sidebar Type Button -->
        <div id="sidebar_type" class="cursor-pointer text-slate-900 dark:text-white text-lg">
            <span class="sidebarDotIcon extend-icon cursor-pointer text-slate-900 dark:text-white text-2xl">
                <div class="h-4 w-4 border-[1.5px] border-slate-900 dark:border-slate-700 rounded-full transition-all duration-150 ring-2 ring-inset ring-offset-4 ring-black-900 dark:ring-slate-400 bg-slate-900 dark:bg-slate-400 dark:ring-offset-slate-700"></div>
            </span>
            <span class="sidebarDotIcon collapsed-icon cursor-pointer text-slate-900 dark:text-white text-2xl">
                <div class="h-4 w-4 border-[1.5px] border-slate-900 dark:border-slate-700 rounded-full transition-all duration-150"></div>
            </span>
        </div>
        <button class="sidebarCloseIcon text-2xl">
            <iconify-icon class="text-slate-900 dark:text-slate-200" icon="clarity:window-close-line"></iconify-icon>
        </button>
    </div>
    <div id="nav_shadow" class="nav_shadow h-[60px] absolute top-[80px] nav-shadow z-[1] w-full transition-all duration-200 pointer-events-non opacity-0"></div>
    <div class="sidebar-menus bg-white dark:bg-slate-800 py-2 px-4 h-[calc(100%-80px)] overflow-y-auto z-50" id="sidebar_menus">
        <ul class="sidebar-menu">
            <li class="sidebar-menu-title">MENU</li>
            <li class="{{ (request()->is('mentor/dashboard*')) ? 'active' : '' }}">
                <a href="{{ route('mentor.menu.dashboard') }}" class="navItem">
                    <span class="flex items-center">
                        <iconify-icon class="nav-icon" icon="heroicons-outline:home"></iconify-icon>
                        <span>Dashboard</span>
                    </span>
                </a>
            </li>
            <li>
                <a href="javascript:void(0)" class="navItem">
                    <span class="flex items-center">
                        <iconify-icon class="nav-icon" icon="ic:baseline-connect-without-contact"></iconify-icon>
                        <span>Tulung</span>
                    </span>
                    <iconify-icon class="icon-arrow" icon="heroicons-outline:chevron-right"></iconify-icon>
                </a>
                <ul class="sidebar-submenu">
                    <li>
                        <a class="{{ (request()->is('mentor/tulung/post*')) ? 'active' : '' }}" href="">Layanan</a>
                    </li>
                    <li>
                        <a class="{{ (request()->is('mentor/tulung/task*')) ? 'active' : '' }}" href="{{ route('mentor.features.tulung.pesanan') }}">Pesanan</a>
                    </li>
                    <li>
                        <a class="{{ (request()->is('mentor/tulung/history*')) ? 'active' : '' }}" href="">Riwayat</a>
                    </li>
                </ul>
            </li>
            <li class="{{ (request()->is('mentor/transactions*')) ? 'active' : '' }}">
                <a href="" class="navItem">
                    <span class="flex items-center">
                        <iconify-icon class=" nav-icon" icon="uil:transaction"></iconify-icon>
                        <span>Riwayat Transaksi</span>
                    </span>
                </a>
            </li>
            <li class="{{ (request()->is('mentor/notification*')) ? 'active' : '' }}">
                <a href="" class="navItem">
                    <span class="flex items-center">
                        <iconify-icon class=" nav-icon" icon="iconamoon:notification-light"></iconify-icon>
                        <span>Notifikasi</span>
                    </span>
                </a>
            </li>
            <!-- Apps Area -->
        </ul>
        <div class="bg-slate-900 mb-10 mt-10 p-2 relative text-center rounded-3xl text-white" id="sidebar_bottom_wizard">
            <div>
                <button class="text-slate-900 text-xs text-white font-Inter rounded-md w-full block py-2 font-medium">
                    Perlu Bantuan?
                </button>
            </div>
        </div>
    </div>
</div>

@endsection

@section('menu-mobile')
@if(request()->is('mentor/tulung/pesanan') == 'active')
<div style=" @media(max-width: 760px) { #menuMobile1 = display:'none'}" 
id="menuMobile1" class="bg-white bg-no-repeat custom-dropshadow footer-bg dark:bg-slate-700 flex justify-around items-center backdrop-filter backdrop-blur-[40px] fixed left-0 bottom-0 w-full z-[9999] bothrefm-0 py-[12px] px-4 md:hidden">
    <a href="{{ route('mentor.features.tulung.pesanan') }}">
        <div>
            <span class="relative cursor-pointer rounded-full text-[20px] flex flex-col items-center justify-center mb-1 dark:text-white
          text-slate-900 ">
                <iconify-icon icon="heroicons-outline:mail"></iconify-icon>
            </span>
            <span class="block text-[11px] text-slate-600 dark:text-slate-300">
                Pesanana
            </span>
        </div>
    </a>
    <a href="{{ route('mentor.profile') }}" class="relative bg-white bg-no-repeat backdrop-filter backdrop-blur-[40px] rounded-full footer-bg dark:bg-slate-700
      h-[65px] w-[65px] z-[-1] -mt-[40px] flex justify-center items-center">
        <div class="h-[50px] w-[50px] rounded-full relative left-[0px] hrefp-[0px] custom-dropshadow">
            <img src="{{ url('assets/images/users/user-1.jpg') }}" alt="" class="w-full h-full rounded-full border-2 border-slate-100">
        </div>
    </a>
    <a href="">
        <div>
            <span class=" relative cursor-pointer rounded-full text-[20px] flex flex-col items-center justify-center mb-1 dark:text-white
          text-slate-900">
                <iconify-icon icon="heroicons-outline:bell"></iconify-icon>
                <span class="absolute right-[17px] lg:hrefp-0 -hrefp-2 h-4 w-4 bg-red-500 text-[8px] font-semibold flex flex-col items-center
            justify-center rounded-full text-white z-[99]">
                    2
                </span>
            </span>
            <span class=" block text-[11px] text-slate-600 dark:text-slate-300">
                Notifikasi
            </span>
        </div>
    </a>
</div>
@else
<div style=" @media(max-width: 760px) { #menuMobile = display:'block'}" id="menuMobile" class="bg-white bg-no-repeat custom-dropshadow footer-bg dark:bg-slate-700 flex justify-around items-center backdrop-filter backdrop-blur-[40px] fixed left-0 bottom-0 w-full z-[9999] bothrefm-0 py-[12px] px-4 md:hidden">
    <a href="{{ route('mentor.features.tulung.pesanan') }}">
        <div>
            <span class="relative cursor-pointer rounded-full text-[20px] flex flex-col items-center justify-center mb-1 dark:text-white
          text-slate-900 ">
                <iconify-icon icon="heroicons-outline:mail"></iconify-icon>
            </span>
            <span class="block text-[11px] text-slate-600 dark:text-slate-300">
                Pesanani
            </span>
        </div>
    </a>
    <a href="{{ route('mentor.profile') }}" class="relative bg-white bg-no-repeat backdrop-filter backdrop-blur-[40px] rounded-full footer-bg dark:bg-slate-700
      h-[65px] w-[65px] z-[-1] -mt-[40px] flex justify-center items-center">
        <div class="h-[50px] w-[50px] rounded-full relative left-[0px] hrefp-[0px] custom-dropshadow">
            <img src="{{ url('assets/images/users/user-1.jpg') }}" alt="" class="w-full h-full rounded-full border-2 border-slate-100">
        </div>
    </a>
    <a href="">
        <div>
            <span class=" relative cursor-pointer rounded-full text-[20px] flex flex-col items-center justify-center mb-1 dark:text-white
          text-slate-900">
                <iconify-icon icon="heroicons-outline:bell"></iconify-icon>
                <span class="absolute right-[17px] lg:hrefp-0 -hrefp-2 h-4 w-4 bg-red-500 text-[8px] font-semibold flex flex-col items-center
            justify-center rounded-full text-white z-[99]">
                    2
                </span>
            </span>
            <span class=" block text-[11px] text-slate-600 dark:text-slate-300">
                Notifikasi
            </span>
        </div>
    </a>
</div>
@endif
</div>
@endsection
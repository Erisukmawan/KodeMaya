@extends('auth.dashboard')

@section('header-element')
<div class="flex justify-between items-center h-full">
    <div class="flex items-center md:space-x-4 space-x-2 xl:space-x-0 rtl:space-x-reverse vertical-box">
        <a href="{{ route('customer.menu.dashboard') }}" class="mobile-logo xl:hidden inline-block">
            <img src="{{ url('/assets/images/logo/favicon.svg') }}" alt="logo">
        </a>

    </div>
    <!-- end vertcial -->
    <div class="items-center space-x-4 rtl:space-x-reverse horizental-box">
        <a href="{{ route('customer.menu.dashboard') }}">
            <span class="xl:inline-block hidden">
                <img src="{{ url('assets/images/logo/logo.svg') }}" alt="logo">
            </span>
            <span class="xl:hidden inline-block">
                <img src="{{ url('/assets/images/logo/favicon.svg') }}" alt="logo">
            </span>
        </a>

    </div>
     <div class="main-menu">
                                <ul>
                                    <li class="{{ (request()->is('customer/dashboard')) ? 'active' : '' }} menuatas">
                                        <a href="{{ route('customer.menu.dashboard') }}" class="Navbar">
                                            <div class="flex flex-1 items-center space-x-[6px] rtl:space-x-reverse">
                                                <span class="icon-box text-box">
                                                    <iconify-icon icon=heroicons-outline:home> </iconify-icon>
                                                </span>
                                                <div class="text-box">Home</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="{{ (request()->is('customer/pemesanan*')) ? 'active' : '' }} menuatas">
                                        <a href="{{ route('customer.menu.pemesanan') }}" class="Navbar">
                                            <div class="flex flex-1 items-center space-x-[6px] rtl:space-x-reverse">
                                               <span class="ion-box text-box">
                                                    <iconify-icon icon=ic:baseline-connect-without-contact> </iconify-icon>
                                                </span>
                                                  <div class="text-box">Pemesanan</div>
                                            </div>
                                        </a>
                                     </li>
                                    <li class="{{ (request()->is('customer/pembayaran*')) ? 'active' : '' }} menuatas">
                                        <a href="{{route('customer.menu.pembayaran')}}">
                                            <div class="flex flex-1 items-center space-x-[6px] rtl:space-x-reverse">
                                                <span class="icon-box text-box">
                                                    <iconify-icon icon=material-symbols:price-change-outline>
                                                    </iconify-icon>
                                                </span>
                                                <div class="text-box">Pembayaran</div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>

    <div class="nav-tools flex items-center lg:space-x-5 space-x-3 rtl:space-x-reverse leading-0">
        <!-- Theme Changer -->
        <!-- BEGIN: Toggle Theme -->
        <div class=" w-full">
            <button id="themeMood" class="h-[28px] w-[28px] lg:h-[32px] lg:w-[32px] lg:bg-gray-500-f7 bg-slate-50 dark:bg-slate-900 lg:dark:bg-slate-900 dark:text-white text-slate-900 cursor-pointer rounded-full text-[20px] flex flex-col items-center justify-center">
                <iconify-icon class="text-slate-800 dark:text-white text-xl dark:block hidden" id="moonIcon" icon="line-md:sunny-outline-to-moon-alt-loop-transition"></iconify-icon>
                <iconify-icon class="text-slate-800 dark:text-white text-xl dark:hidden block" id="sunIcon" icon="line-md:moon-filled-to-sunny-filled-loop-transition"></iconify-icon>
            </button>
        </div>
        <!-- END: Toggle Theme -->
        <!-- Profile DropDown Area -->
        <div class=" w-full">
            <button class="text-slate-800 dark:text-white focus:ring-0 focus:outline-none font-medium rounded-lg text-sm text-center inline-flex items-center" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <div class="lg:h-8 lg:w-8 h-7 w-7 rounded-full flex-1 ltr:mr-[10px] rtl:ml-[10px]">
                    <img src="{{ url('assets/images/avatar/av-1.svg') }}" alt="user" class="block w-full h-full object-cover rounded-full">
                </div>
                <span class="flex-none text-slate-600 dark:text-white text-sm font-normal items-center lg:flex hidden overflow-hidden text-ellipsis whitespace-nowrap">{{ Auth::user()->nama }}</span>
                <svg class="w-[16px] h-[16px] dark:text-white hidden lg:inline-block text-base inline-block ml-[10px] rtl:mr-[10px]" aria-hidden="true" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                </svg>
            </button>
            <!-- Dropdown menu -->
            <div class="dropdown-menu z-100 hidden bg-white divide-y divide-slate-100 shadow w-44 dark:bg-slate-800 border dark:border-slate-700 !top-[23px] rounded-md overflow-hidden">
                <ul class="py-1 text-sm text-slate-800 dark:text-slate-200">
                    <li>
                        <a href="{{ route('customer.profile') }}" class="block px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-600 dark:hover:text-white font-inter text-sm text-slate-600 dark:text-white font-normal">
                            <iconify-icon icon="heroicons-outline:user" class="relative top-[2px] text-lg ltr:mr-1 rtl:ml-1"></iconify-icon>
                            <span class="font-Inter">Profil</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- END: Header -->
        <!-- end mobile menu -->
    </div>
    <!-- end nav tools -->
</div>
@endsection

@section('content')
<div class="content-wrapper transition-all duration-150" id="content_wrapper">
    <div class="page-content">
        <div class="transition-all duration-150 container-fluid" id="page_layout">
            <div id="content_layout">
                <!-- BEGIN: Breadcrumb -->
                <div class="mb-5">
                    <ul class="m-0 p-0 list-none">
                        <li class="inline-block relative top-[3px] text-base text-primary-500 font-Inter ">
                            <a href="{{ route('customer.menu.dashboard') }}">
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

@section('menu-mobile')
<div class="bg-white bg-no-repeat custom-dropshadow footer-bg dark:bg-slate-700 flex justify-around items-center backdrop-filter backdrop-blur-[40px] fixed left-0 bottom-0 w-full z-[9999] bothrefm-0 py-[12px] px-4 md:hidden">
<a href="{{route('customer.menu.dashboard')}}">
        <div class="{{ (request()->is('customer/dashboard')) ? 'active' : '' }} menubawah">
            <span class="textcol relative cursor-pointer rounded-full text-[20px] flex flex-col items-center justify-center mb-1 dark:text-white
          text-slate-900">
                <iconify-icon icon="heroicons-outline:home"></iconify-icon>
            </span>
            <span class="textcol block text-[11px] text-slate-600 dark:text-slate-300">
                Home
            </span>
        </div>
    </a>    
<a href="{{route('customer.menu.pemesanan')}}">
        <div class="{{ (request()->is('customer/pemesanan*')) ? 'active' : '' }} menubawah">
            <span class="textcol relative cursor-pointer rounded-full text-[20px] flex flex-col items-center justify-center mb-1 dark:text-white
          text-slate-900 ">
                <iconify-icon icon="mdi:feature-highlight"></iconify-icon>
            </span>
            <span class="textcol block text-[11px] text-slate-600 dark:text-slate-300">
                Pemesanan
            </span>
        </div>
        
        
    </a>
    <a href="{{route('customer.menu.pembayaran')}}">
        <div class="{{ (request()->is('customer/pembayaran*')) ? 'active' : '' }} menubawah">
            <span class="textcol relative cursor-pointer rounded-full text-[20px] flex flex-col items-center justify-center mb-1 dark:text-white
          text-slate-900">
                <iconify-icon icon="material-symbols:price-change-outline"></iconify-icon>
            </span>
            <span class="textcol block text-[11px] text-slate-600 dark:text-slate-300">
                Pembayaran
            </span>
        </div>
    </a>
</div>
</div>
@endsection
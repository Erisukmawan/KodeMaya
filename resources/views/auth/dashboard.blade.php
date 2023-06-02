<!DOCTYPE html>
<!-- Template Name: DashCode - HTML, React, Vue, Tailwind Admin Dashboard Template Author: Codeshaper Website: https://codeshaper.net Contact: support@codeshaperbd.net Like: https://www.facebook.com/Codeshaperbd Purchase: https://themeforest.net/item/dashcode-admin-dashboard-template/42600453 License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project. -->
<html lang="zxx" dir="ltr" class="light">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <title>KodeMaya - Dashboard</title>
  <link rel="icon" type="image/png" href="{{ url('/assets/images/logo/favicon.svg') }}">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  <!-- BEGIN: Theme CSS-->
  <link rel="stylesheet" href="{{ url('/assets/css/rt-plugins.css') }}">
  <link rel="stylesheet" href="{{ url('/assets/css/app.css') }}">
  <!-- End : Theme CSS-->
  <script src="{{ url('/assets/js/settings.js') }}" sync></script>
</head>

<body class="font-inter dashcode-app" id="body_class">
  <!-- [if IE]> <p class="browserupgrade"> You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security. </p> <![endif] -->
  <main class="app-wrapper">
    <!-- BEGIN: Sidebar -->
    <!-- BEGIN: Sidebar -->
    @yield('sidebar')
    <!-- End: Sidebar -->
    <!-- End: Sidebar -->
    <div class="flex flex-col justify-between min-h-screen">
      <div>
        <!-- BEGIN: Header -->
        <!-- BEGIN: Header -->
        <div class="z-[9]" id="app_header">
          <div class="app-header z-[999] ltr:ml-[248px] rtl:mr-[248px] bg-white dark:bg-slate-800 shadow-sm dark:shadow-slate-700">
            @yield('header-element')
          </div>
        </div>

        <!-- BEGIN: Search Modal -->
        <div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto" id="searchModal" tabindex="-1" aria-labelledby="searchModalLabel" aria-hidden="true">
          <div class="modal-dialog relative w-auto pointer-events-none top-1/4">
            <div class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white dark:bg-slate-900 bg-clip-padding rounded-md outline-none text-current">
              <form>
                <div class="relative">
                  <input type="text" class="form-control !py-3 !pr-12" placeholder="Search">
                  <button class="absolute right-0 top-1/2 -translate-y-1/2 w-9 h-full border-l text-xl border-l-slate-200 dark:border-l-slate-600 dark:text-slate-300 flex items-center justify-center">
                    <iconify-icon icon="heroicons-solid:search"></iconify-icon>
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
        <!-- END: Search Modal -->
        <!-- END: Header -->
        <!-- END: Header -->
        @yield('content')
        <!-- BEGIN: Footer For Desktop and tab -->
        <footer class="md:block hidden" id="footer">
          <div class="site-footer px-6 bg-white dark:bg-slate-800 text-slate-500 dark:text-slate-300 py-4 ltr:ml-[248px] rtl:mr-[248px]">
            <div class="grid md:grid-cols-2 grid-cols-1 md:gap-5">
              <div class="text-center ltr:md:text-start rtl:md:text-right text-sm">
                COPYRIGHT ©
                <span id="thisYear"></span>
                KodeMaya, All rights Reserved
              </div>
              <!-- <div class="ltr:md:text-right rtl:md:text-end text-center text-sm">
                Hand-crafted &amp; Made by
                <a href="https://codeshaper.net" target="_blank" class="text-primary-500 font-semibold">
                  Codeshaper
                </a>
              </div> -->
            </div>
          </div>
        </footer>
        <!-- END: Footer For Desktop and tab -->
        @yield('menu-mobile')
  </main>
  <!-- scripts -->
  <script src="{{ url('/assets/js/jquery-3.6.0.min.js') }}"></script>
  <script src="{{ url('/assets/js/rt-plugins.js') }}"></script>
  <script src="{{ url('/assets/js/app.js') }}"></script>
  @yield('custom-script')
</body>

</html>
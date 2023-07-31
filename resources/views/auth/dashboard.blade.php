<!DOCTYPE html>
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
  <link rel="stylesheet" href="{{ url('/assets/css/app-chat.css') }}">
  <link rel="stylesheet" href="{{url('/assets/css/landingpage.css')}}">
  <!-- End : Theme CSS-->
  <script src="{{ url('/assets/js/settings.js') }}" sync></script>
</head>

<body class="font-inter dashcode-app" id="body_class">
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
          <div class="app-header z-[999] bg-white dark:bg-slate-800 shadow-sm dark:shadow-slate-700">
            @yield('header-element')
          </div>
        </div>
        <!-- END: Header -->
        <!-- END: Header -->
        @yield('content')
        <!-- BEGIN: Footer For Desktop and tab -->
        <footer class="md:block hidden" id="footer">
          <div class="site-footer px-6 bg-white dark:bg-slate-800 text-slate-500 dark:text-slate-300 py-4">
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
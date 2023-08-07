<!DOCTYPE html>
<html lang="en" dir="ltr" class="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    @yield('title')
    <link rel="icon" type="image/png" href="{{url('assets/images/logo/favicon.svg')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{url('assets/css/rt-plugins.css')}}">
    <link href="https://unpkg.com/aos@2.3.0/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="">
    <link rel="stylesheet" href="{{url('assets/css/app.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/app-chat.css')}}">
    <!-- START : Theme Config js-->
    <script src="{{url('assets/js/settings.js')}}" sync></script>
    <!-- END : Theme Config js-->
</head>

<body class=" font-inter skin-default">
  <!-- [if IE]> <p class="browserupgrade">
            You are using an <strong>outdated</strong> browser. Please
            <a href="https://browsehappy.com/">upgrade your browser</a> to improve
            your experience and security.
        </p> <![endif] -->

  <div class="min-h-screen">
    <div class="absolute left-0 top-0 w-full">
      <div class="flex flex-wrap justify-between items-center py-6 container">
        <div>
          <a href="{{route('landingpage')}}">
            <img src="{{url('assets/images/logo/logo.svg')}}" alt="" class="mb-10">
                    </a>
                </div>  
      </div>
    </div>
    <div class="container">
      <div class="flex justify-center flex-wrap items-center min-h-screen flex-col text-center">
        <img src="{{url('assets/images/svg/img-2.svg')}}" alt="">
        <h4 class="text-3xl font-medium text-slate-900 dark:text-white mb-2">
          Woopsie Error 500.
        </h4>
        <p class="font-normal text-base text-slate-500 dark:text-slate-300">
          Maaf Kami akan segera memperbaiki kesalahan.
        </p>
        <button onclick="history.go(-1)"
                            class="w-2/4 rounded-full px-4 py-2 mt-4 hover:bg-slate-500 dark:hover:bg-info-600 bg-slate-600 dark:hover:text-white font-inter text-sm text-white dark:text-white font-normal">
                            <span class="font-Inter items-center justify-center"
                                style="text-align:'center'; color:white"><-- Oke Kembali</span>
                        </button>
      </div>
    </div>
    <div class="fixed bottom-0 w-full">
      <div class="container">
        <div class="md:flex justify-between items-center flex-wrap space-y-4 py-6">
          
          <div>
            <ul class="flex md:justify-start justify-center space-x-3">
              <li>
                <a href="#" class="text-slate-500 dark:text-slate-400 text-sm transition duration-150 hover:text-slate-900">Privacy
                  policy</a>
              </li>
              <li>
                <a href="#" class="text-slate-500 dark:text-slate-400 text-sm transition duration-150 hover:text-slate-900">Faq</a>
              </li>
              <li>
                <a href="#" class="text-slate-500 dark:text-slate-400 text-sm transition duration-150 hover:text-slate-900">Email us</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- scripts -->
  <script src="{{url('assets/js/jquery-3.6.0.min.js')}}"></script>
    <script src="{{url('assets/js/rt-plugins.js')}}"></script>
    <script src="{{url('assets/js/app.js')}}"></script>
</body>
</html> 
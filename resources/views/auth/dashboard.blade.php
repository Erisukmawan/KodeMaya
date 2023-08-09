<!DOCTYPE html>
<html lang="id" dir="ltr" class="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <title>KodeMaya - Dashboard</title>
    <link rel="icon" type="image/png" href="{{ url('/assets/images/logo/favicon.svg') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" href="{{ url('/assets/css/rt-plugins.css') }}">
    <link rel="stylesheet" href="{{ url('/assets/css/app.css') }}">
    <link rel="stylesheet" href="{{ url('/assets/css/app-chat.css') }}">
    <link rel="stylesheet" href="{{ url('/assets/css/landingpage.css') }}">
    <!-- End : Theme CSS-->
    <script src="{{ url('/assets/js/settings.js') }}" sync></script>
<style>
    #clogout:hover {
  ba cground-color: red;
    
    }
    </style>
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
    <script src="//cdn.tiny.cloud/1/2eyi7kij6lootz7uffgtulqvq6lzp756ij1ky0fd6en1b8nd/tinymce/6/tinymce.min.js"
        referrerpolicy="origin"></script>
    <script src="{{ asset('assets/js/jquery.formatCurrency-1.4.0.min.js') }}"></script>
    <script src="{{ url('/assets/js/rt-plugins.js') }}"></script>
    <script src="{{ url('/assets/js/app.js') }}"></script>
    <script src="{{ url('/assets/js/sweetalert2.min.js') }}" sync></script>
    <script src="{{ url('/assets/js/swal-custom.js') }}" sync></script>
    <script>
        const currency = new Intl.NumberFormat("id-ID", {
            style: "currency",
            currency: "IDR",
        });

        $(document).ready(function() {
            var mode = $('html').attr('class');
            var linkTag = document.createElement('link');
            if (mode == 'black' || mode == 'light') {
                $('head').append(
                    `<link rel="stylesheet" href="{{ url('/assets/css/sweetalert2.light.min.css') }}">`)
            } else {
                $('head').append(
                    `<link rel="stylesheet" href="{{ url('/assets/css/sweetalert2.dark.min.css') }}">`)
            }

            $(".panel-alert").click(function() {
                $('.panel-alert-main').remove()
            })

            if ("{{ Session::get('success') }}") {
                let message = "{{ Session::get('success') }}"
                let splitMsg = message.split('||')
                let type = splitMsg[0]
                let title = splitMsg[1]
                let desc = splitMsg[2]
                if (type == 'P') {
                    Swal.fire(title, desc, "warning")
                } else if (type == 'I') {
                    Swal.fire(title, desc, "info")
                } else if (type == 'K') {
                    Swal.fire({
                        title: title,
                        text: desc,
                        icon: 'question',
                        showCancelButton: true,
                        confirmButtonText: 'Ya'
                    }).then((result) => {

                    })
                }
            }

            if ("{{ $errors->any() }}") {
                let message = "{{ $errors->first() }}"
                let splitMsg = message.split('||')
                let type = splitMsg[0]
                let title = splitMsg[1]
                let desc = splitMsg[2]
                if (type == 'P') {
                    Swal.fire(title, desc, "warning")
                } else if (type == 'I') {
                    Swal.fire(title, desc, "info")
                } else if (type == 'K') {
                    Swal.fire({
                        title: title,
                        text: desc,
                        icon: 'question',
                        showCancelButton: true,
                        confirmButtonText: 'Ya'
                    }).then((result) => {

                    })
                }
            }

            $("#logout-form").on('submit', function(evt) {
                evt.preventDefault();
                Swal.fire({
                    title: "Apakah anda yakin ingin logout?",
                    text: "",
                    icon: 'question',
                    showCancelButton: true,
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Ya',
                    cancelButtonText: 'Tidak',
                }).then((result) => {
                    console.log(result)
                    if (result.isConfirmed) {
                        window.location.href = "{{ route('login')}}";
                        $.ajax({
                            type: 'POST',
                            url: "{{ route('logout') }}",
                            headers: {
                                'X-CSRF-TOKEN': "{{ csrf_token() }}"
                            },
                            data: {
                                "_token": "{{ csrf_token() }}"
                            },
                            success: function(data) {
                                window.location.href = "{{ route('login')}}";
                            }
                        });

                    }
                })
            });
        })
    </script>
    @yield('custom-script')
</body>

</html>

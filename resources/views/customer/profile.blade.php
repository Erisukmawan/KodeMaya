@extends('customer/template')

{{-- @section('main-content')
    <div class="space-y-5 profile-page">
        <div
            class="profiel-wrap px-[35px] pb-10 md:pt-[84px] pt-10 rounded-lg bg-white dark:bg-slate-800 lg:flex lg:space-y-0
                space-y-6 justify-between items-end relative z-[1]">
            <div class="bg-slate-900 dark:bg-slate-700 absolute left-0 top-0 md:h-1/2 h-[150px] w-full z-[-1] rounded-t-lg">
            </div>
            <div class="profile-box flex-none md:text-start text-center">
                <div class="md:flex items-end md:space-x-6 rtl:space-x-reverse">
                    <div class="flex-none">
                        <div
                            class="md:h-[186px] md:w-[186px] h-[140px] w-[140px] md:ml-0 md:mr-0 ml-auto mr-auto md:mb-0 mb-4 rounded-full ring-4
                                ring-slate-100 relative">
                            <img src="assets/images/users/user-1.jpg" alt=""
                                class="w-full h-full object-cover rounded-full">
                            <a href="./profile-setting"
                                class="absolute right-2 h-8 w-8 bg-slate-50 text-slate-600 rounded-full shadow-sm flex flex-col items-center
                                    justify-center md:top-[140px] top-[100px]">
                                <iconify-icon icon="heroicons:pencil-square"></iconify-icon>
                            </a>
                        </div>
                    </div>
                    <div class="flex-1">
                        <div class="text-2xl font-medium text-slate-900 dark:text-slate-200 mb-[3px]">
                            {{ Auth::user()->nama }}
                        </div>
                        <div class="text-sm font-light text-slate-600 dark:text-slate-400">
                            Front End Developer
                        </div>
                    </div>
                </div>
            </div>
            <!-- end profile box -->
            <div class="profile-info-500 md:flex md:text-start text-center content-center justify-center flex-1 max-w-[516px] md:space-y-0 space-y-4"
                style="text-align:center">
                <div class="flex-1">
                    <div class="text-sm text-slate-600 font-light dark:text-slate-300">
                        Email
                    </div>
                    <div class="text-base text-slate-900 dark:text-slate-300 font-medium mb-1">
                        {{ Auth::user()->email }}
                    </div>
                </div>
                <!-- end single -->
            </div>
            <!-- end single -->
        </div>
        <!-- profile info-500 -->
    </div>
    <div class="lg:col-span-8 col-span-12 space-x-3">
        <div class="card">
            <header class="card-header">
                <div class="flex space-x-3 items-center rtl:space-x-reverse">
                    <div
                        class="flex-none h-8 w-8 rounded-full bg-success-500 text-white flex flex-col items-center justify-center text-lg">
                        <iconify-icon icon="heroicons:user"></iconify-icon>
                    </div>
                    <div class="flex-1 text-base text-slate-900 dark:text-white font-medium">
                        Profile Settings
                    </div>
                </div>
            </header>
            <div class="card-body p-6">
                <div class="space-y-9">
                    <div class="text-slate-600 dark:text-slate-300 text-sm">
                        <form action="{{ route('change_profile') }}" method="post">
                            @csrf
                            <div class="input-area">
                                <label for="textFormatter" class="form-label">Nama</label>
                                <div class="relative space-y-6">
                                    <input id="nama_project" type="text" class="form-control"
                                        placeholder="Nama Lengkap"value="{{ Auth::User()->nama }}">
                                    <!-- <span class="text-xs font-Inter font-normal text-slate-400 mt-2 inline-block">We will convert your text to lowercase instantly</span> -->
                                    <span class="block"></span>
                                </div>
                            </div>
                            <div class="input-area">
                                <label for="textFormatter" class="form-label">Alamat</label>
                                <div class="relative space-y-6">
                                    <input id="alamat" type="text" class="form-control" placeholder="Alamat Anda">
                                    <!-- <span class="text-xs font-Inter font-normal text-slate-400 mt-2 inline-block">We will convert your text to lowercase instantly</span> -->
                                    <span class="block"></span>
                                </div>
                            </div>
                            <div class="card-text h-full space-y-6 mb-8">
                                <div class="input-area">
                                    <label for="textFormatter" class="form-label">Foto Profile</label>
                                    <div class="filePreview">
                                        <label>
                                            <input type="file" class=" w-full hidden" name="basic"
                                                accept=".jpg, .jpeg, .png">
                                            <span class="w-full h-[40px] file-control flex items-center custom-class">
                                                <span class="flex-1 overflow-hidden text-ellipsis whitespace-nowrap">
                                                    <!-- <span id="placeholder" class="text-slate-400"></span> -->
                                                </span>
                                                <span
                                                    class="file-name flex-none cursor-pointer border-l px-4 border-slate-200 dark:border-slate-700 h-full inline-flex items-center bg-slate-100 dark:bg-slate-900 text-slate-600 dark:text-slate-400 text-sm rounded-tr rounded-br font-normal">Browse</span>
                                            </span>
                                        </label>
                                        <div id="file-preview"></div>
                                    </div>
                                </div>
                            </div>
                            <button class="flex w-full items-center justify-center btn-success bg-white btn-sm btn">
                                <div class="flex-1 mx-8 text-base text-slate-900 text-black font-medium">
                                    Ubah Profile
                                </div>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="card">
        <div class="card-body p-6">
            <div class="space-y-6">
                <div class="flex space-x-3 rtl:space-x-reverse items-center">
                    <div
                        class="flex-none h-8 w-8 rounded-full bg-danger-500 text-white flex flex-col items-center justify-center text-lg">
                        <iconify-icon icon="solar:logout-2-bold"></iconify-icon>
                    </div>
                    <div class="flex-1 text-base text-slate-900 dark:text-white font-medium">
                        Logout
                    </div>
                </div>
                <div class="text-slate-600 dark:text-slate-300 text-sm">
                    Yakin keluar ? pas balik harus masuk akun lagi, ya.
                </div>
                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                    class="block px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-600 dark:hover:text-white font-inter text-sm text-slate-600 dark:text-white font-normal">
                    @csrf
                    <button type="submit">
                        <span class="font-Inter items-center justify-center"
                            style="text-align:'center'; color:red">Logout</span>
                    </button>
                </form>
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection --}}

@section('main-content')
    <div class="grid grid-cols-12 gap-5">
        <!-- Basic Inputs -->
        <div class="card lg:col-span-3 col-span-12">
            <div class="card-body flex flex-col p-6">
                <div class="card-text h-full space-y-4">
                    <div
                        class="profile-wrap px-[35px] pb-10 md:pt-[84px] pt-10 rounded-lg bg-white dark:bg-slate-800 lg:space-y-0 space-y-6 justify-between items-end relative z-[1]">
                        <div
                            class="bg-slate-900 dark:bg-slate-700 absolute left-0 top-0 md:h-1/2 h-[150px] w-full z-[-1] rounded-t-lg">
                        </div>
                        <div class="profile-box flex-none text-center">
                            <div class="md:space-x-6 rtl:space-x-reverse">
                                <div class="flex-none">
                                    <div
                                        class="md:h-[186px] md:w-[186px] h-[140px] w-[140px] ml-auto mr-auto mb-4 rounded-full ring-4 ring-slate-100 relative">
                                        <img src="{{ url('assets/images/avatar/av-1.svg') }}" alt=""
                                            class="w-full h-full object-cover rounded-full">
                                        <a href="./profile-setting"
                                            class="absolute right-2 h-8 w-8 bg-slate-50 text-slate-600 rounded-full shadow-sm flex flex-col items-center justify-center md:top-[140px] top-[100px]">
                                            <iconify-icon icon="heroicons:pencil-square"></iconify-icon>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <div class="text-2xl font-medium text-slate-900 dark:text-slate-200 mb-[3px]">
                                    {{ Auth::guard('webcustomer')->user()->nama }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex-1">
                    <div class="text-base text-slate-900 dark:text-slate-300 font-medium mb-1">
                        Email
                    </div>
                    <div class="text-sm text-slate-600 font-light dark:text-slate-300">
                        {{ Auth::guard('webcustomer')->user()->email }}
                    </div>
                </div>
                <div class="flex-1 mt-4">
                    <div class="text-base text-slate-900 dark:text-slate-300 font-medium mb-1">
                        No Telepon
                    </div>
                    <div class="text-sm text-slate-600 font-light dark:text-slate-300">
                        {{ Auth::guard('webcustomer')->user()->telp }}
                    </div>
                </div>
            </div>
        </div>
        <!-- Sized Inputs -->
        <div class="card lg:col-span-9 col-span-12">
            <div class="lg:col-span-8 col-span-12 space-x-3">
                <div class="card">
                    <header class="card-header">
                        <div class="flex space-x-3 items-center rtl:space-x-reverse">
                            <div
                                class="flex-none h-8 w-8 rounded-full bg-primary-500 text-white flex flex-col items-center justify-center text-lg">
                                <iconify-icon icon="heroicons:user"></iconify-icon>
                            </div>
                            <div class="flex-1 text-base text-slate-900 dark:text-white font-medium">
                                Profile Settings
                            </div>
                        </div>
                    </header>
                    <div class="card-body p-6">
                        @if ($message = Session::get('success'))
                            <div class="p-6 panel-alert-main">
                                <div class="py-[18px] px-5 font-normal text-sm rounded-md bg-success-500 text-white">
                                    <div class="flex items-center space-x-3 rtl:space-x-reverse">
                                        <iconify-icon class="text-2xl flex-0" icon="system-uicons:target"></iconify-icon>
                                        <p class="flex-1 font-Inter">
                                            {{ $message }}
                                        </p>
                                        <div class="flex-0 text-xl cursor-pointer panel-alert">
                                            <iconify-icon icon="line-md:close"></iconify-icon>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif

                        @if ($errors->any())
                            <div class="p-6 panel-alert-main">
                                <div class="py-[18px] px-5 font-normal text-sm rounded-md bg-danger-500 text-white">
                                    <div class="flex items-center space-x-3 rtl:space-x-reverse">
                                        <iconify-icon class="text-2xl flex-0" icon="system-uicons:target"></iconify-icon>
                                        <p class="flex-1 font-Inter">
                                            {{ $errors->first() }}
                                        </p>
                                        <div class="flex-0 text-xl cursor-pointer panel-alert">
                                            <iconify-icon icon="line-md:close"></iconify-icon>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                        <div class="space-y-9">
                            <div class="text-slate-600 dark:text-slate-300 text-sm">
                                <form action="{{ route('change_profile') }}" method="post">
                                    @csrf
                                    <div class="input-area">
                                        <label for="textFormatter" class="form-label">Nama</label>
                                        <div class="relative space-y-6">
                                            <input id="nama" name="nama" type="text" class="form-control"
                                                placeholder="Nama Lengkap" value="{{ Auth::User()->nama }}">
                                            <!-- <span class="text-xs font-Inter font-normal text-slate-400 mt-2 inline-block">We will convert your text to lowercase instantly</span> -->
                                            <span class="block"></span>
                                        </div>
                                    </div>
                                    <div class="input-area">
                                        <label for="textFormatter" class="form-label">Alamat</label>
                                        <div class="relative space-y-6">
                                            <input id="alamat" type="text" name="alamat" value="{{ Auth::User()->alamat }}" class="form-control" placeholder="Alamat Anda">
                                            <span class="block"></span>
                                        </div>
                                    </div>
                                    <div class="input-area">
                                        <label for="textFormatter" class="form-label">Password</label>
                                        <div class="relative space-y-6">
                                            <input id="password" name="password" type="text" class="form-control"
                                                value="" placeholder="Isi hanya jika ingin mengganti password.">
                                            <!-- <span class="text-xs font-Inter font-normal text-slate-400 mt-2 inline-block">We will convert your text to lowercase instantly</span> -->
                                            <span class="block"></span>
                                        </div>
                                    </div>
                                    <div class="card-text h-full space-y-6 mb-8">
                                        
                                    </div>
                                    <button class="flex w-full items-center justify-center btn-success bg-white btn-sm btn">
                                        <div class="flex-1 mx-8 text-base text-slate-900 text-black font-medium">
                                            Simpan
                                        </div>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body p-6">
                    <div class="space-y-6">
                        <div class="flex space-x-3 rtl:space-x-reverse items-center">
                            <div
                                class="flex-none h-8 w-8 rounded-full bg-danger-500 text-white flex flex-col items-center justify-center text-lg">
                                <iconify-icon icon="solar:logout-2-bold"></iconify-icon>
                            </div>
                            <div class="flex-1 text-base text-slate-900 dark:text-white font-medium">
                                Logout
                            </div>
                        </div>
                        <div class="text-slate-600 dark:text-slate-300 text-sm">
                            Yakin keluar ? pas balik harus masuk akun lagi, ya.
                        </div>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit"
                                class="block px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-600 dark:hover:text-white font-inter text-sm w-full text-slate-600 dark:text-white font-normal">
                                <span class="font-Inter items-center justify-center"
                                    style="text-align:'center'; color:red">Logout</span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('custom-script')
    <script>
        $(function() {
            $(".panel-alert").click(function() {
                $('.panel-alert-main').remove()
            })

            $('#passShow').on('click', function() {
                const el = $(this)
                const isShow = el.data('show')

                if (isShow == '0') {
                    el.data('show', '1')
                    el.attr('icon', 'heroicons-outline:eye')
                    $('#password').attr('type', 'text')
                } else {
                    el.data('show', '0')
                    el.attr('icon', 'heroicons-solid:eye-off')
                    $('#password').attr('type', 'password')
                }
            })
        });
    </script>
@endsection
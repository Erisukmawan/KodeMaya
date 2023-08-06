@extends('customer/template')

@section('main-content')
    <style>
        .light #chat-box,
        .black #chat-box {
            background: url('{{ url('assets/images/all-img/doodle-light.jpg') }}');
            background-repeat: no-repeat;
            background-size: cover;
        }

        .dark #chat-box {
            background: url('{{ url('assets/images/all-img/doodle-dark.jpg') }}');
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
    <div class="mb-2">
        <ul class="nav bg-white dark:bg-slate-700 justify-center nav-tabs flex flex-col md:flex-row flex-wrap list-none border-b-0 pl-0 mb-4"
            id="tabs-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <a href="#tabs-pesanan"
                    class="nav-link w-full block font-medium text-sm font-Inter leading-tight capitalize border-x-0 border-t-0 border-b border-transparent px-4 pb-2 my-2 hover:border-transparent focus:border-transparent active dark:text-slate-300"
                    id="tabs-pesanan-tab" data-bs-toggle="pill" data-bs-target="#tabs-pesanan" role="tab"
                    aria-controls="tabs-pesanan" aria-selected="true"><iconify-icon class="mr-1"
                        icon="ic:baseline-connect-without-contact"></iconify-icon>Pesanan</a>
            </li>
            <li class="nav-item" role="presentation">
                <a href="#tabs-negosiasi"
                    class="nav-link w-full block font-medium text-sm font-Inter leading-tight capitalize border-x-0 border-t-0 border-b border-transparent px-4 pb-2 my-2 hover:border-transparent focus:border-transparent dark:text-slate-300"
                    id="tabs-negosiasi-tab" data-bs-toggle="pill" data-bs-target="#tabs-negosiasi" role="tab"
                    aria-controls="tabs-negosiasi" aria-selected="false"><iconify-icon
                        icon="streamline:mail-chat-bubble-typing-oval-messages-message-bubble-typing-chat"></iconify-icon>
                    Negosiasi</a>
            </li>
            <li class="nav-item" role="presentation">
                <a href="#tabs-kontrak"
                    class="nav-link w-full block font-medium text-sm font-Inter leading-tight capitalize border-x-0 border-t-0 border-b border-transparent px-4 pb-2 my-2 hover:border-transparent focus:border-transparent dark:text-slate-300"
                    id="tabs-kontrak-tab" data-bs-toggle="pill" data-bs-target="#tabs-kontrak" role="tab"
                    aria-controls="tabs-kontrak" aria-selected="false"><iconify-icon icon="pajamas:review-list">
                    </iconify-icon>Kontrak</a>
            </li>
        </ul>
        <div class="card-text h-full space-y-3 mb-3">
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
        </div>
        <div class="tab-content" id="tabs-tabContent">
            <div class="tab-pane fade show active" id="tabs-pesanan" role="tabpanel" aria-labelledby="tabs-pesanan-tab">
                <div class="space-y-5">
                    <div class="bg-no-repeat bg-cover bg-center px-5 py-8 rounded-xl relative flex items-center"
                        style="background-image: url({{ url('assets/images/all-img/widget-bg-7.png') }})">
                        <div class="flex-1">
                            <div class="max-w-[310px]">
                                <div class="text-md text-slate-800 mb-2">
                                    <span class="block font-normal">Hi, {{ Auth::guard('webcustomer')->user()->nama }} Yuk
                                        Buat projek
                                        Sekarang!</span>
                                </div>
                            </div>
                        </div>
                        <div class="flex-none">
                            <a href="{{ route('customer.menu.pemesanan.form_pemesanan') }}"><button
                                    class="flex space-x-1 btn-light bg-white btn-sm btn">
                                    <div
                                        class="flex-none h-6 w-6  rounded-full bg-info-900 text-white flex flex-col items-center justify-center text-lg">
                                        <iconify-icon icon="mingcute:add-fill"></iconify-icon>
                                    </div>
                                    <div class="flex-1 mx-8 text-base text-slate-900 text-black font-medium">
                                        Buat Pesanan
                                    </div>
                                </button></a>
                        </div>
                    </div>
                    <!-- section pesanan  -->
                    <div class=" space-y-5">
                        @if ($pemesanan)
                            <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-6">
                                @foreach ($pemesanan as $pesanan)
                                    <div class="card">
                                        <header class="card-header">
                                            <div class="flex-1">
                                                <div class="text-xl text-sm text-black dark:text-white mb-2">
                                                    <span class="block font-normal">No Pesanan :
                                                        #{{ $pesanan->id_pemesanan }}</span>
                                                </div>
                                            </div>
                                            <div class="flex-none">
                                                @if ($pesanan->status_pemesanan == 'MENUNGGU')
                                                    <span
                                                        class="block font-normal w-full rounded-2xl bg-warning-500 text-white dark:text-slate-800 text-sm p-1">Menunggu</span>
                                                @elseif ($pesanan->status_pemesanan == 'DIPROSES')
                                                    <span
                                                        class="block font-normal w-full rounded-2xl bg-primary-500 text-white dark:text-slate-800 text-sm p-1">Diproses</span>
                                                @elseif ($pesanan->status_pemesanan == 'DIPERIKSA')
                                                    <span
                                                        class="block font-normal w-full rounded-2xl bg-info-500 text-white dark:text-slate-800 text-sm p-1">Diperiksa</span>
                                                @elseif ($pesanan->status_pemesanan == 'SELESAI')
                                                    <span
                                                        class="block font-normal w-full rounded-2xl bg-success-500 text-white dark:text-slate-800 text-sm p-1">Selesai</span>
                                                @elseif ($pesanan->status_pemesanan == 'DIBATALKAN')
                                                    <span
                                                        class="block font-normal w-full rounded-2xl bg-danger-500 text-white dark:text-slate-800 text-sm p-1">Dibatalkan</span>
                                                @endif
                                            </div>
                                        </header>
                                        <div class="card-body p-6">
                                            <div class="space-y-6">
                                                <div class="text-slate-600 space-y-3 text-sm">
                                                    <div class="">
                                                        <div class=" mx-8 font-medium dark:text-slate-100 text-black">
                                                            Nama projek
                                                        </div>
                                                        <div class="block mx-8 text-sm dark:text-slate-100 text-black">
                                                            {{ $pesanan->nama_projek }}
                                                        </div>
                                                    </div>
                                                    <div class="">
                                                        <div class=" mx-8 font-medium dark:text-slate-100 text-black">
                                                            Kategori
                                                        </div>
                                                        <div class="block mx-8 text-sm dark:text-slate-100 text-black">
                                                            {{ $pesanan->kategori }}
                                                        </div>
                                                    </div>

                                                    <div class="">
                                                        <div class=" mx-8 font-medium dark:text-slate-100 text-black">
                                                            Tenggat Waktu
                                                        </div>
                                                        <div class="block mx-8 text-sm dark:text-slate-100 text-black">
                                                            {{ $pesanan->tenggat_waktu ? $pesanan->tenggat_waktu : '-' }}
                                                        </div>
                                                    </div>
                                                </div>
                                                <a href="{{ route('customer.menu.pemesanan.detail_pemesanan', ['id' => $pesanan->id_pemesanan]) }}"
                                                    class="inline-flex items-center space-x-3 rtl:space-x-reverse text-sm capitalize dark:bg-slate-700 bg-slate-200 rounded-full p-2 font-medium text-slate-600 dark:text-slate-300">
                                                    <span>Lihat Detail</span>
                                                    <iconify-icon icon="heroicons:arrow-right"></iconify-icon>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @else
                            <div class="flex max-w-[300px] mx-auto mt-20">
                                <img src="{{ url('assets/images/img-state/no-records.svg') }}">
                            </div>
                        @endif
                    </div>
                </div>
            </div>
            <!-- tab nego -->
            <div class="tab-pane fade" id="tabs-negosiasi" role="tabpanel" aria-labelledby="tabs-negosiasi-tab">
                <!-- isi -->

                <div class="flex lg:space-x-5 space-y-5 chat-height rtl:space-x-reverse">
                    <div class="chat-contact-bar">
                        <div class="h-full card">
                            <div class="card-body relative p-0 h-full overflow-hidden">
                                <div class="border-b border-slate-100 dark:border-slate-700 pb-4">
                                    <!-- BEGIN: Profile -->
                                    <div>
                                        <header>
                                            <div class="flex px-6 pt-6">
                                                <div class="flex-1">
                                                    <div class="flex space-x-3 rtl:space-x-reverse">
                                                        <div class="flex-none">
                                                            <div class="h-10 w-10 rounded-full">
                                                                <img src="{{ Auth::User()->foto_profil ? Auth::User()->foto_profil : url('assets/images/avatar/av-1.svg') }}"
                                                                    alt=""
                                                                    class="w-full h-full object-cover rounded-full">
                                                            </div>
                                                        </div>
                                                        <div class="flex-1 text-start">
                                                            <span
                                                                class="block text-slate-800 dark:text-slate-300 text-sm font-medium mb-[2px] ">
                                                                {{ Auth::guard('webcustomer')->user()->nama }}
                                                                <span
                                                                    class="status bg-success-500 inline-block h-[10px] w-[10px] rounded-full ml-3"></span>
                                                            </span>
                                                            <span
                                                                class="block text-slate-500 dark:text-slate-300 text-xs font-normal">
                                                                Available
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex-none">
                                                    <div
                                                        class="h-8 w-8 bg-slate-100 dark:bg-slate-900 dark:text-slate-400 flex flex-col justify-center items-center text-xl rounded-full cursor-pointer">
                                                        <iconify-icon icon="heroicons-outline:dots-horizontal">
                                                        </iconify-icon>
                                                    </div>
                                                </div>
                                            </div>
                                        </header>
                                    </div>
                                    <!-- END: Profile -->
                                </div>
                                <!-- end profile -->
                                <div class=" dark:border-slate-700 py-1">

                                    <span class="block text-slate-800 dark:text-slate-300 text-sm font-medium mb-[2px]"
                                        style="text-align: center;">
                                    </span>
                                </div>
                                <!-- end seach -->
                                <div class="contact-height" data-simplebar="data-simplebar">
                                    <!-- BEGIN: Contact Area -->
                                    <ul id="message-contact">
                                        @foreach ($pemesanan as $pesanan)
                                            <li class="chat-row block w-full py-5 focus:ring-0 outline-none cursor-pointer group transition-all duration-150 hover:bg-slate-100 dark:hover:bg-slate-600 dark:hover:bg-opacity-70"
                                                data-order_id="{{ $pesanan->id_pemesanan }}">
                                                <div class="flex space-x-3 px-6 rtl:space-x-reverse">
                                                    <div class="flex-none">
                                                        <div class="h-10 w-10 rounded-full relative">
                                                            @if ($pesanan->status_pemesanan == 'MENUNGGU')
                                                                <span
                                                                    class=" status ring-1 ring-white inline-block h-[10px] w-[10px] rounded-full absolute -right-0 top-0 bg-warning-500 "></span>
                                                            @elseif ($pesanan->status_pemesanan == 'DIPROSES')
                                                                <span
                                                                    class=" status ring-1 ring-white inline-block h-[10px] w-[10px] rounded-full absolute -right-0 top-0 bg-primary-500 "></span>
                                                            @elseif ($pesanan->status_pemesanan == 'DIPERIKSA')
                                                                <span
                                                                    class=" status ring-1 ring-white inline-block h-[10px] w-[10px] rounded-full absolute -right-0 top-0 bg-info-500 "></span>
                                                            @elseif ($pesanan->status_pemesanan == 'SELESAI')
                                                                <span
                                                                    class=" status ring-1 ring-white inline-block h-[10px] w-[10px] rounded-full absolute -right-0 top-0 bg-success-500 "></span>
                                                            @elseif ($pesanan->status_pemesanan == 'DIBATALKAN')
                                                                <span
                                                                    class=" status ring-1 ring-white inline-block h-[10px] w-[10px] rounded-full absolute -right-0 top-0 bg-danger-500 "></span>
                                                            @endif

                                                            <img src="{{ $pesanan->foto_profil_mentor ? $pesanan->foto_profil_mentor : url('assets/images/avatar/av-1.svg') }}"
                                                                alt=""
                                                                class="block w-full h-full object-cover rounded-full">
                                                        </div>
                                                    </div>
                                                    <div class="flex-1 text-start flex">
                                                        <div class="flex-1">
                                                            <span
                                                                class="block text-slate-800 dark:text-slate-300 text-sm font-medium mb-[2px] truncate"
                                                                style="width: 170px;">
                                                                #{{ $pesanan->id_pemesanan }} {{ $pesanan->nama_projek }}
                                                            </span>
                                                            <span
                                                                class="block text-slate-600 dark:text-slate-300 text-xs font-normal">
                                                                Mentor:
                                                                {{ $pesanan->nama_mentor ? $pesanan->nama_mentor : '-' }}
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        @endforeach
                                    </ul>
                                    <!-- END: Contact Area -->
                                </div>
                                <!-- end contact -->
                            </div>
                        </div>
                    </div>
                    <div class="chat-overlay"></div>
                    <div class="flex-1" style="margin-top: 0;">
                        <div class="h-full card">
                            <div class="p-0 h-full body-class">
                                <div
                                    class="parent lg:space-x-5 md:space-x-5 space-x-0 lg:space-y-0 md:space-y-0 space-y-5 lg:flex md:flex flex-row h-full ">
                                    <!-- end main message body -->
                                    <div class="flex-1">
                                        <div class="h-full flex flex-col items-center justify-center xl:space-y-2 space-y-6"
                                            id="chat-blank">
                                            <img src="{{ url('assets/images/svg/blank.svg') }}" alt="">
                                            <h4 class="text-2xl text-slate-600 dark:text-slate-300 font-medium">
                                                Negosiasi
                                            </h4>
                                            <div class="text-sm text-slate-500 lg:pt-0 pt-4">
                                                <span class="lg:block hidden">
                                                    Kamu bisa mulai negosiasi ketika pesanan kamu telah diterima oleh mentor
                                                </span>
                                                <span class="lg:block hidden">
                                                    Jangan khawatir, cek pesananmu secara berkala ...
                                                </span>
                                                <div class="lg:hidden block">
                                                    <span class="btn btn-dark cursor-pointer start-chat">
                                                        List Pesanan
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="h-full overflow-auto lg:h-full md:h-full card" id="chat-content"
                                            style="display: none">
                                            <div class="p-0 h-full body-class">
                                                <!-- BEGIN: Blank Page -->
                                                <!-- BEGIN: Messages -->
                                                <div class="h-full" style="border-radius: 15%;">
                                                    <div id="chat-box" class="parent-height dark:bg-slate-800">
                                                        <div class="msgs overflow-y-auto msg-height pt-6 space-y-6">
                                                            {{-- bubble msg --}}
                                                        </div>
                                                    </div>
                                                    <!-- message -->
                                                    <footer
                                                        class=" md:px-9 px-4 sm:flex md:space-x-4 sm:space-x-2 border-t md:pt-6 pt-1 border-slate-100 dark:border-slate-700">
                                                        <div class="flex grow sm:flex md:space-x-1 space-x-3"
                                                            style="align-items: center; display: inherit">
                                                            {{-- <div
                                                                class="h-8 w-8  cursor-pointer bg-slate-100 dark:bg-slate-900 dark:text-slate-400 flex justify-center items-center text-xl rounded-full">
                                                                <iconify-icon icon="material-symbols:image-outline">
                                                                </iconify-icon>
                                                            </div> --}}
                                                            <div
                                                                class="h-8 w-8  cursor-pointer bg-slate-100 dark:bg-slate-900 dark:text-slate-400 flex justify-center items-center text-xl rounded-full">
                                                                <iconify-icon icon="heroicons-outline:emoji-happy">
                                                                </iconify-icon>
                                                            </div>
                                                            <div
                                                                class="grow relative bg-slate-200 space-x-3 p-2 rounded-2xl dark:bg-slate-700">
                                                                <textarea id="text-message" placeholder="Type your message..."
                                                                    class="focus:ring-0 focus:outline-0 block w-full bg-transparent dark:text-white resize-none"></textarea>
                                                            </div>
                                                            <div class="flex-none grow-0 md:pr-0 pr-3">
                                                                <button id="btnSendMsg" type="button"
                                                                    class="h-8 w-8 bg-slate-900 text-white flex flex-col justify-center items-center text-lg rounded-full">
                                                                    <iconify-icon icon="heroicons-outline:paper-airplane"
                                                                        class="transform rotate-[60deg]"></iconify-icon>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </footer>
                                                    <!-- end footer -->
                                                </div>
                                                <!-- END: Message -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end isi -->
            </div>
            <!-- kontrak -->
            <div class="tab-pane fade" id="tabs-kontrak" role="tabpanel" aria-labelledby="tabs-kontrak-tab">
                <!-- isi -->
                @if ($pemesanan)
                    <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-6">
                        @foreach ($pemesanan as $pesanan)
                            @if ($pesanan->status_kontrak == 'MENUNGGU')
                                <div class="card">
                                    <header class="card-header">
                                        <div class="flex-1">
                                            <div class="text-xl text-sm text-black dark:text-white mb-2">
                                                <span class="block font-normal">No Pesanan :
                                                    #{{ $pesanan->id_pemesanan }}</span>
                                            </div>
                                        </div>
                                        <div class="flex-none">
                                            <div class="flex-none">
                                                <span
                                                    class="block font-normal w-full rounded-2xl bg-danger-500 text-white dark:text-slate-800 text-sm p-1">
                                                    BELUM DISETUJUI
                                                </span>
                                            </div>
                                        </div>
                                    </header>
                                    <div class="card-body p-6">
                                        <div class="space-y-6">
                                            <div class="text-slate-600 space-y-3 text-sm">
                                                <div class="">
                                                    <div class=" mx-8 font-medium dark:text-slate-100 text-black">
                                                        Nama projek
                                                    </div>
                                                    <div class="block mx-8 text-sm dark:text-slate-100 text-black">
                                                        {{ $pesanan->nama_projek }}
                                                    </div>
                                                </div>
                                                <div class="">
                                                    <div class=" mx-8 font-medium dark:text-slate-100 text-black">
                                                        Kategori
                                                    </div>
                                                    <div class="block mx-8 text-sm dark:text-slate-100 text-black">
                                                        {{ $pesanan->kategori }}
                                                    </div>
                                                </div>

                                                <div class="">
                                                    <div class=" mx-8 font-medium dark:text-slate-100 text-black">
                                                        Nama Mentor
                                                    </div>
                                                    <div class="block mx-8 text-sm dark:text-slate-100 text-black">
                                                        {{ $pesanan->nama_mentor }}
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="{{ route('customer.menu.pemesanan.detail-kontrak', ['id' => $pesanan->id_pemesanan]) }}"
                                                class="inline-flex items-center space-x-3 rtl:space-x-reverse text-sm capitalize dark:bg-slate-700 bg-slate-200 rounded-full p-2 font-medium text-slate-600 dark:text-slate-300">
                                                <span>Setujui Kontrak</span>
                                                <iconify-icon icon="heroicons:arrow-right"></iconify-icon>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                @endif

                <div class="card mt-4">
                    <header class=" card-header noborder">
                        <h4 class="card-title">Riwayat Kontrak
                        </h4>
                    </header>
                    <div class="card-body px-6 pb-6">
                        <div class="overflow-x-auto -mx-6 dashcode-data-table">
                            <span class=" col-span-8  hidden"></span>
                            <span class="  col-span-4 hidden"></span>
                            <div class="inline-block min-w-full align-middle">
                                <div class="overflow-hidden ">
                                    <table class="min-w-full divide-y divide-slate-100 table-fixed dark:divide-slate-700"
                                        id="data-table">
                                        <thead class=" border-t border-slate-100 dark:border-slate-800">
                                            <tr>
                                                <th scope="col" class=" table-th ">Id</th>
                                                <th scope="col" class=" table-th ">Nama projek</th>
                                                <th scope="col" class=" table-th ">Mentor</th>
                                                <th scope="col" class=" table-th ">Waktu kontrak</th>
                                                <th scope="col" class=" table-th ">Tenggat waktu</th>
                                                <th scope="col" class=" table-th ">Status Kontrak</th>
                                                <th scope="col" class=" table-th ">Harga</th>
                                                <th scope="col" class=" table-th ">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody
                                            class="bg-white divide-y divide-slate-100 dark:bg-slate-800 dark:divide-slate-700">
                                            @foreach ($kontrak_list as $kontrak)
                                                <tr>
                                                    <td class="table-td">{{ $kontrak->id_kontrak }}</td>
                                                    <td class="table-td">{{ $kontrak->nama_projek }}</td>
                                                    <td class="table-td ">
                                                        {{ $kontrak->nama_mentor }}
                                                    </td>
                                                    <td class="table-td ">
                                                        {{ $kontrak->waktu_kontrak }}
                                                    </td>
                                                    <td class="table-td ">
                                                        {{ $kontrak->tenggat_waktu }}
                                                    </td>
                                                    <td class="table-td ">
                                                        @if ($kontrak->status_kontrak == 'MENUNGGU')
                                                            <span
                                                                class="inline-block px-3 min-w-[90px] text-center mx-auto py-1 rounded-[999px] bg-opacity-25 text-warning-500 bg-warning-500">{{ $kontrak->status_kontrak }}</span>
                                                        @elseif ($kontrak->status_kontrak == 'SETUJU')
                                                            <span
                                                                class="inline-block px-3 min-w-[90px] text-center mx-auto py-1 rounded-[999px] bg-opacity-25 text-success-500 bg-success-500">{{ $kontrak->status_kontrak }}</span>
                                                        @elseif ($kontrak->status_kontrak == 'TIDAK SETUJU')
                                                            <span
                                                                class="inline-block px-3 min-w-[90px] text-center mx-auto py-1 rounded-[999px] bg-opacity-25 text-danger-500 bg-danger-500">{{ $kontrak->status_kontrak }}</span>
                                                        @else
                                                            <span
                                                                class="inline-block px-3 min-w-[90px] text-center mx-auto py-1 rounded-[999px] bg-opacity-25 text-secondary-500 bg-secondary-500">BELUM
                                                                DIBUAT</span>
                                                        @endif
                                                    </td>
                                                    <td class="table-td idr-currency">{{ $kontrak->total_harga }}
                                                    </td>
                                                    <td class="table-td ">
                                                        @if ($kontrak->status_kontrak == 'MENUNGGU')
                                                            <div class="flex space-x-2">
                                                                <a
                                                                    href="{{ route('customer.menu.pemesanan.detail-kontrak', ['id' => $kontrak->id_kontrak]) }}">
                                                                    <span
                                                                        class="toolTip onTop text-2xl rounded-sm pt-2 p-1 hover:bg-slate-900 bg-info-600 text-white "
                                                                        data-tippy-content="Setujui kontrak">
                                                                        <iconify-icon icon="ic:outline-rate-review">
                                                                        </iconify-icon>
                                                                    </span>
                                                                </a>
                                                            </div>
                                                        @else
                                                            <div class="flex space-x-2">
                                                                <a
                                                                    href="{{ route('customer.menu.pemesanan.detail-kontrak', ['id' => $kontrak->id_kontrak]) }}">
                                                                    <span
                                                                        class="toolTip onTop text-2xl rounded-sm pt-2 p-1 hover:bg-slate-900 bg-info-600 text-white "
                                                                        data-tippy-content="Lihat Detail">
                                                                        <iconify-icon icon="heroicons:eye">
                                                                        </iconify-icon>
                                                                    </span>
                                                                </a>
                                                            </div>
                                                        @endif
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end isi -->
            </div>
        </div>
    </div>
@endsection

@section('custom-script')
    <script src="https://js.pusher.com/8.2.0/pusher.min.js"></script>
    <script>
        // Enable pusher logging - don't include this in production
        Pusher.logToConsole = true;

        var pusher = new Pusher('2144bc95f007e22453fb', {
            cluster: 'ap1'
        });

        var channel = pusher.subscribe(`chat-customer.{{ Auth::guard('webcustomer')->user()->id_pelanggan }}`);
        channel.bind('chat-event', function(data) {
            addFromTextMsg(data.msg_date, data.msg_content);
            pushChat(data.order_id, data)
        });

        // Chat Content Change
        $('.chat-row').click(function() {
            const el = $(this)
            const order_id = el.data('order_id');
            $.ajax({
                url: "{{ route('customer.menu.pemesanan.get') }}",
                type: 'POST',
                data: {
                    "_token": "{{ csrf_token() }}",
                    "id": order_id
                },
                success: function(data) {
                    if (data.status_pemesanan == "MENUNGGU") {
                        Toast.fire('', 'Belum diambil oleh mentor', 'info')
                    } else {
                        $('#chat-content').attr('data-order_id', order_id)
                        $('#chat-blank').hide()
                        $('#chat-content').show()
                        storeChat(order_id)
                    }
                },
                error: function(data) {
                    console.log(data);
                    Toast.fire('', 'Gagal mendapatkan pesanan', 'error')
                },
            })
        })

        // Sending Chat Message
        function sendMessage() {
            const order_id = $('#chat-content').data('order_id')
            const text = $('#text-message').val()
            setTimeout(() => {
                $('#text-message').val('')
            }, 100);
            if (!text) return
            const data = {
                order_id: order_id,
                type: 'text',
                content: text
            }
            const dateID = Date.now()
            addTextMsg(dateID, text)
            $.ajax({
                url: "{{ route('customer.menu.negosiasi.send') }}",
                type: 'POST',
                data: {
                    "_token": "{{ csrf_token() }}",
                    ...data
                },
                success: function(data) {
                    updateSendMsg(dateID, data)
                    let chat_obj = {
                        user_name: "{{ Auth::guard('webcustomer')->user()->nama }}",
                        msg_date: dateID,
                        msg_from: "customer",
                        msg_type: "text",
                        msg_content: text,
                    }
                    pushChat(order_id, chat_obj)
                },
                error: function(data) {
                    console.log(data);
                    Toast.fire('', 'Gagal mengirim pesan', 'error')
                },
            })

        }

        $('#btnSendMsg').click(() => {
            sendMessage()
        })

        $('#text-message').keypress(function(event) {
            if (event.keyCode == 13) {
                sendMessage()
            }
        });

        // Chat Height
        let chatHeight = 1000


        // add to ui
        function addFromTextMsg(date_id, text) {
            var target = $('.msgs');
            const strTime = new Date(Number(date_id) * 1000).toLocaleTimeString();
            let textHtml = `<div id="${date_id}" class="message-bubble block md:px-6 px-4">
                <div class="flex space-x-2 items-start group rtl:space-x-reverse">
                    <div class="flex-1 flex space-x-4 rtl:space-x-reverse">
                        <div>
                            <div id="textfrom-content-${date_id}" class="text-contrent p-3 bg-slate-100 dark:bg-slate-600 dark:text-slate-300 text-slate-600 text-sm font-normal mb-1 rounded-md flex-1 break-all">
                                ${text}
                            </div>
                            <span id="timefrom-content-${date_id}" class="font-normal text-xs text-slate-400 dark:text-slate-400">
                                ${strTime}
                            </span>
                        </div>
                    </div>
                </div>
            </div>`
            target.append(textHtml)
            $(`#text-content-${date_id}`).text(text)
            chatHeight += 500
            target.animate({
                scrollTop: chatHeight
            }, 400);
            return date_id
        }

        function addTextMsg(date_id, text, isSent = false) {
            var target = $('.msgs');
            let textHtml = `<div id="${date_id}" class="message-bubble block md:px-6 px-4">
                <div class="flex space-x-2 items-start justify-end group w-full rtl:space-x-reverse">
                    <div class="no flex space-x-4">
                        <div>
                            <div id="text-content-${date_id}"
                                class="p-3 bg-slate-300 dark:bg-slate-900 dark:text-slate-300 text-slate-800 text-sm font-normal rounded-md flex-1 mb-1">
                            </div>
                            <span id="time-content-${date_id}"
                                class="font-normal text-xs text-slate-400 dark:text-slate-400 float-right">
                                ${isSent ? new Date(Number(date_id)).toLocaleTimeString() : '<iconify-icon class="text-2xl flex-0" icon="game-icons:sands-of-time"></iconify-icon>'}
                            </span>
                        </div>
                    </div>
                </div>
            </div>`
            target.append(textHtml)
            $(`#text-content-${date_id}`).text(text)
            chatHeight += 500
            target.animate({
                scrollTop: chatHeight
            }, 400);
            return date_id
        }

        function updateSendMsg(date_id, timestamp) {
            const strTime = new Date(Number(timestamp) * 1000).toLocaleTimeString();
            $(`#time-content-${date_id}`).text(strTime)
        }

        // UI Chat Management
        function storeChat(order_id) {
            $('.msgs').html('')
            let chats = getChats(order_id);
            for (let chat of chats) {
                if (chat.msg_from == 'customer') {
                    addTextMsg(chat.msg_date, chat.msg_content, true)
                } else {
                    addFromTextMsg(chat.msg_date, chat.msg_content)
                }
            }
        }

        // Local storage store
        function getChats(order_id) {
            const storageKey = 'order-' + order_id
            const arrString = localStorage.getItem(storageKey)
            let chats = []
            if (arrString) {
                chats = JSON.parse(arrString)
            }
            return chats
        }

        function pushChat(order_id, object) {
            const storageKey = 'order-' + order_id
            const arrString = localStorage.getItem(storageKey)
            if (arrString) {
                console.log(storageKey)
                var objectArr = JSON.parse(arrString);
                objectArr.push(object)
                localStorage.setItem('order-' + order_id, JSON.stringify(objectArr));
                console.log("setted " + order_id)
            } else {
                var objectArr = []
                objectArr.push(object)
                localStorage.setItem('order-' + order_id, JSON.stringify(objectArr));
                console.log("setted " + order_id)
            }
        }
    </script>
@endsection

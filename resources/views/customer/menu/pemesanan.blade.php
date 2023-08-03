@extends('customer/template')

@section('main-content')
<div class="mb-10 pb-10">
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
    <div class="tab-content" id="tabs-tabContent">
        <div class="tab-pane fade show active" id="tabs-pesanan" role="tabpanel" aria-labelledby="tabs-pesanan-tab">
            <div class="space-y-5">
                <div class="bg-no-repeat bg-cover bg-center px-5 py-8 rounded-xl relative flex items-center"
                    style="background-image: url({{url('assets/images/all-img/widget-bg-7.png')}})">
                    <div class="flex-1">
                        <div class="max-w-[310px]">
                            <div class="text-md text-slate-800 mb-2">
                                <span class="block font-normal">Hi, {{ Auth::user()->name }} Yuk Buat projek
                                    Sekarang!</span>
                                <!-- <span class="block">{{ Auth::user()->name }}</span> -->
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
                    <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-6">
                        <div class="card">
                            <header class="card-header">
                                <div class="flex-1">
                                    <div class="text-xl text-sm text-black dark:text-white mb-2">
                                        <span class="block font-normal">No Pesanan : {id_pemesanan}</span>
                                    </div>
                                </div>
                                <div class="flex-none">
                                    <span
                                        class="block font-normal w-full rounded-2xl bg-info-500 text-white dark:text-slate-800 text-sm p-1">Menunggu</span>
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
                                                Aplikasi Rumah Makan
                                            </div>
                                        </div>
                                        <div class="">
                                            <div class=" mx-8 font-medium dark:text-slate-100 text-black">
                                                Kategori
                                            </div>
                                            <div class="block mx-8 text-sm dark:text-slate-100 text-black">
                                                Webiste
                                            </div>
                                        </div>

                                        <div class="">
                                            <div class=" mx-8 font-medium dark:text-slate-100 text-black">
                                                Tenggat Waktu
                                            </div>
                                            <div class="block mx-8 text-sm dark:text-slate-100 text-black">
                                                20-08-2003
                                            </div>
                                        </div>
                                    </div>
                                    <a href="{{route('customer.menu.pemesanan.detail_pemesanan')}}" class="inline-flex items-center space-x-3 rtl:space-x-reverse text-sm capitalize dark:bg-slate-700 bg-slate-200 rounded-full p-2 font-medium text-slate-600
                                dark:text-slate-300">
                                        <span>Lihat Detail</span>
                                        <iconify-icon icon="heroicons:arrow-right"></iconify-icon>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <header class="card-header">
                                <div class="flex-1">
                                    <div class="text-xl text-sm text-black dark:text-white mb-2">
                                        <span class="block font-normal">No Pesanan : {id_pemesanan}</span>
                                    </div>
                                </div>
                                <div class="flex-none">
                                    <span
                                        class="block font-normal w-full rounded-2xl bg-warning-500 text-white dark:text-slate-800 text-sm p-1">Diproses</span>
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
                                                Aplikasi Rumah Makan
                                            </div>
                                        </div>
                                        <div class="">
                                            <div class=" mx-8 font-medium dark:text-slate-100 text-black">
                                                Kategori
                                            </div>
                                            <div class="block mx-8 text-sm dark:text-slate-100 text-black">
                                                Webiste
                                            </div>
                                        </div>

                                        <div class="">
                                            <div class=" mx-8 font-medium dark:text-slate-100 text-black">
                                                Tenggat Waktu
                                            </div>
                                            <div class="block mx-8 text-sm dark:text-slate-100 text-black">
                                                20-08-2003
                                            </div>
                                        </div>
                                    </div>
                                    <a href="{{route('customer.menu.pemesanan.detail_pemesanan')}}" class="inline-flex items-center space-x-3 rtl:space-x-reverse text-sm capitalize dark:bg-slate-700 bg-slate-200 rounded-full p-2 font-medium text-slate-600
                                dark:text-slate-300">
                                        <span>Lihat Detail</span>
                                        <iconify-icon icon="heroicons:arrow-right"></iconify-icon>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- tab nego -->
        <div class="tab-pane fade" id="tabs-negosiasi" role="tabpanel" aria-labelledby="tabs-negosiasi-tab">
            <!-- isi -->
            <div class="flex lg:space-x-5 space-y-5 chat-height rtl:space-x-reverse">
                <div class="flex-1 ">
                    <div class="h-full card">
                        <div class="p-0 h-full body-class">
                            <div class="parent lg:space-x-5 md:space-x-5 space-x-0 lg:space-y-0 md:space-y-0 space-y-5 lg:flex md:flex
            flex-row h-full ">
                                <!-- end main message body -->
                                <div class="flex-1">
                                    <div class="h-full overflow-auto lg:h-full md:h-full card">
                                        <div class="p-0 h-full body-class">
                                            <!-- BEGIN: Blank Page -->


                                            <!-- BEGIN: Messages -->
                                            <div class="h-full">
                                                <div class="chat-content  parent-height bg-slate-800 dark:bg-slate-800">
                                                    <div class="msgs overflow-y-auto msg-height pt-6 space-y-6">
                                                        <div class="block md:px-6 px-4">
                                                            <div class="flex space-x-2 items-start group">
                                                                <div class="flex-none">
                                                                    <div class="h-8 w-8 rounded-full">
                                                                        <img src="{{ url('assets/images/users/user-2.jpg') }}"
                                                                            alt=""
                                                                            class="block w-full h-full object-cover rounded-full">
                                                                    </div>
                                                                </div>
                                                                <div class="flex-1 flex space-x-4">
                                                                    <div>
                                                                        <div
                                                                            class="text-contrent p-3 bg-slate-100 dark:bg-slate-600 dark:text-slate-300 text-slate-600 text-sm font-normal mb-1 rounded-md flex-1 whitespace-pre-wrap break-all">
                                                                            Hey! How are you?</div>
                                                                        <span
                                                                            class="font-normal text-xs text-slate-400 dark:text-slate-400">12:20
                                                                            pm</span>
                                                                    </div>
                                                                    <div
                                                                        class="opacity-0 invisible group-hover:opacity-100 group-hover:visible">
                                                                        <div class="relative inline-block">
                                                                            <div class="block w-full "
                                                                                data-headlessui-state="">
                                                                                <button class="block w-full"
                                                                                    id="headlessui-menu-button-:rc:"
                                                                                    type="button" aria-haspopup="menu"
                                                                                    aria-expanded="false"
                                                                                    data-headlessui-state="">
                                                                                    <div class="label-class-custom">
                                                                                        <div
                                                                                            class="h-8 w-8 bg-slate-100 dark:bg-slate-600 dark:text-slate-300 text-slate-900 flex flex-col justify-center items-center text-xl rounded-full">
                                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                                aria-hidden="true"
                                                                                                role="img"
                                                                                                class="iconify iconify--heroicons-outline"
                                                                                                width="1em" height="1em"
                                                                                                viewbox="0 0 24 24">
                                                                                                <path fill="none"
                                                                                                    stroke="currentColor"
                                                                                                    stroke-linecap="round"
                                                                                                    stroke-linejoin="round"
                                                                                                    stroke-width="2"
                                                                                                    d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 1 1-2 0a1 1 0 0 1 2 0Zm7 0a1 1 0 1 1-2 0a1 1 0 0 1 2 0Zm7 0a1 1 0 1 1-2 0a1 1 0 0 1 2 0Z">
                                                                                                </path>
                                                                                            </svg>
                                                                                        </div>
                                                                                    </div>
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="block md:px-6 px-4">
                                                            <div
                                                                class="flex space-x-2 items-start justify-end group w-full rtl:space-x-reverse">
                                                                <div class="no flex space-x-4 rtl:space-x-reverse">
                                                                    <div
                                                                        class="opacity-0 invisible group-hover:opacity-100 group-hover:visible">
                                                                        <div class="relative inline-block">
                                                                            <div class="block w-full "
                                                                                data-headlessui-state="">
                                                                                <button class="block w-full"
                                                                                    id="headlessui-menu-button-:re:"
                                                                                    type="button" aria-haspopup="menu"
                                                                                    aria-expanded="false"
                                                                                    data-headlessui-state="">
                                                                                    <div class="label-class-custom">
                                                                                        <div
                                                                                            class="h-8 w-8 bg-slate-300 dark:bg-slate-900 dark:text-slate-400 flex flex-col justify-center items-center text-xl rounded-full text-slate-900">
                                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                                aria-hidden="true"
                                                                                                role="img"
                                                                                                class="iconify iconify--heroicons-outline"
                                                                                                width="1em" height="1em"
                                                                                                viewbox="0 0 24 24">
                                                                                                <path fill="none"
                                                                                                    stroke="currentColor"
                                                                                                    stroke-linecap="round"
                                                                                                    stroke-linejoin="round"
                                                                                                    stroke-width="2"
                                                                                                    d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 1 1-2 0a1 1 0 0 1 2 0Zm7 0a1 1 0 1 1-2 0a1 1 0 0 1 2 0Zm7 0a1 1 0 1 1-2 0a1 1 0 0 1 2 0Z">
                                                                                                </path>
                                                                                            </svg>
                                                                                        </div>
                                                                                    </div>
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="break-all">
                                                                        <div
                                                                            class="text-contrent p-3 bg-slate-300 dark:bg-slate-900 dark:text-slate-300 text-slate-800 text-sm font-normal rounded-md flex-1 mb-1">
                                                                            <video class="w-full" id="player"
                                                                                playsinline="playsinline"
                                                                                controls="controls"
                                                                                data-poster="https://vjs.zencdn.net/v/oceans.png">
                                                                                <source
                                                                                    src="https://vjs.zencdn.net/v/oceans.mp4"
                                                                                    type="video/mp4">
                                                                            </video>
                                                                        </div>
                                                                        <span
                                                                            class="font-normal text-xs text-slate-400">4:09
                                                                            pm</span>
                                                                    </div>
                                                                </div>
                                                                <div class="flex-none">
                                                                    <div class="h-8 w-8 rounded-full">
                                                                        <img src="{ {url('assets/images/users/user-2.jpg')}}"
                                                                            alt=""
                                                                            class="block w-full h-full object-cover rounded-full">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="block md:px-6 px-4">
                                                            <div
                                                                class="flex space-x-2 items-start justify-end group w-full rtl:space-x-reverse">
                                                                <div class="no flex space-x-4 rtl:space-x-reverse">
                                                                    <div
                                                                        class="opacity-0 invisible group-hover:opacity-100 group-hover:visible">
                                                                        <div class="relative inline-block">
                                                                            <div class="block w-full "
                                                                                data-headlessui-state="">
                                                                                <button class="block w-full"
                                                                                    id="headlessui-menu-button-:re:"
                                                                                    type="button" aria-haspopup="menu"
                                                                                    aria-expanded="false"
                                                                                    data-headlessui-state="">
                                                                                    <div class="label-class-custom">
                                                                                        <div
                                                                                            class="h-8 w-8 bg-slate-300 dark:bg-slate-900 dark:text-slate-400 flex flex-col justify-center items-center text-xl rounded-full text-slate-900">
                                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                                aria-hidden="true"
                                                                                                role="img"
                                                                                                class="iconify iconify--heroicons-outline"
                                                                                                width="1em" height="1em"
                                                                                                viewbox="0 0 24 24">
                                                                                                <path fill="none"
                                                                                                    stroke="currentColor"
                                                                                                    stroke-linecap="round"
                                                                                                    stroke-linejoin="round"
                                                                                                    stroke-width="2"
                                                                                                    d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 1 1-2 0a1 1 0 0 1 2 0Zm7 0a1 1 0 1 1-2 0a1 1 0 0 1 2 0Zm7 0a1 1 0 1 1-2 0a1 1 0 0 1 2 0Z">
                                                                                                </path>
                                                                                            </svg>
                                                                                        </div>
                                                                                    </div>
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="break-all">
                                                                        <div
                                                                            class="text-contrent p-3 bg-slate-300 dark:bg-slate-900 dark:text-slate-300 text-slate-800 text-sm font-normal rounded-md flex-1 mb-1">
                                                                            <img src="https://www.freecodecamp.org/news/content/images/size/w2000/2022/09/jonatan-pie-3l3RwQdHRHg-unsplash.jpg"
                                                                                class="rounded-md" alt="image">
                                                                            <br>
                                                                            <hr>
                                                                            <div class="flex-none"
                                                                                style="text-align: center;">
                                                                                <a href="https://www.freecodecamp.org/news/content/images/size/w2000/2022/09/jonatan-pie-3l3RwQdHRHg-unsplash.jpg"
                                                                                    Download="ags"><button type="button"
                                                                                        class="text-xs text-slate-900 dark:text-white">
                                                                                        Download</a>
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                        <span
                                                                            class="font-normal text-xs text-slate-400">4:09
                                                                            pm</span>
                                                                    </div>
                                                                </div>
                                                                <div class="flex-none">
                                                                    <div class="h-8 w-8 rounded-full">
                                                                        <img src="{{ url('assets/images/users/user-2.jpg') }}"
                                                                            alt=""
                                                                            class="block w-full h-full object-cover rounded-full">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="block md:px-6 px-4">
                                                            <div
                                                                class="flex space-x-2 items-start justify-end group w-full rtl:space-x-reverse">
                                                                <div class="no flex space-x-4 rtl:space-x-reverse">
                                                                    <div
                                                                        class="opacity-0 invisible group-hover:opacity-100 group-hover:visible">
                                                                        <div class="relative inline-block">
                                                                            <div class="block w-full "
                                                                                data-headlessui-state="">
                                                                                <button class="block w-full"
                                                                                    id="headlessui-menu-button-:re:"
                                                                                    type="button" aria-haspopup="menu"
                                                                                    aria-expanded="false"
                                                                                    data-headlessui-state="">
                                                                                    <div class="label-class-custom">
                                                                                        <div
                                                                                            class="h-8 w-8 bg-slate-300 dark:bg-slate-900 dark:text-slate-400 flex flex-col justify-center items-center text-xl rounded-full text-slate-900">
                                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                                aria-hidden="true"
                                                                                                role="img"
                                                                                                class="iconify iconify--heroicons-outline"
                                                                                                width="1em" height="1em"
                                                                                                viewbox="0 0 24 24">
                                                                                                <path fill="none"
                                                                                                    stroke="currentColor"
                                                                                                    stroke-linecap="round"
                                                                                                    stroke-linejoin="round"
                                                                                                    stroke-width="2"
                                                                                                    d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 1 1-2 0a1 1 0 0 1 2 0Zm7 0a1 1 0 1 1-2 0a1 1 0 0 1 2 0Zm7 0a1 1 0 1 1-2 0a1 1 0 0 1 2 0Z">
                                                                                                </path>
                                                                                            </svg>
                                                                                        </div>
                                                                                    </div>
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="break-all">
                                                                        <div
                                                                            class="text-contrent p-3 bg-slate-300 dark:bg-slate-900 dark:text-slate-300 text-slate-800 text-sm font-normal rounded-md flex-1 mb-1">
                                                                            <li class="block py-[8px]">
                                                                                <div
                                                                                    class="flex space-x-2 rtl:space-x-reverse">
                                                                                    <div
                                                                                        class="flex-1 flex space-x-2 rtl:space-x-reverse">
                                                                                        <div class="flex-none">
                                                                                            <div class="h-8 w-8">
                                                                                                <img src="{{ url('assets/images/icon/pdf-1.svg') }}"
                                                                                                    alt=""
                                                                                                    class="block w-full h-full object-cover rounded-full border hover:border-white border-transparent">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="flex-1">
                                                                                            <span
                                                                                                class="block text-slate-600 text-sm dark:text-slate-300">
                                                                                                Dashboard.pdf
                                                                                            </span>
                                                                                            <span
                                                                                                class="block font-normal text-xs text-slate-500 mt-1">155MB
                                                                                            </span>
                                                                                            <button type="button"
                                                                                                class="text-xs text-slate-900 dark:text-white mt-1">
                                                                                                Download
                                                                                            </button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                        </div>
                                                                        <span
                                                                            class="font-normal text-xs text-slate-400">4:09
                                                                            pm</span>
                                                                    </div>
                                                                </div>
                                                                <div class="flex-none">
                                                                    <div class="h-8 w-8 rounded-full">
                                                                        <img src="{{ url('assets/images/users/user-2.jpg') }}"
                                                                            alt=""
                                                                            class="block w-full h-full object-cover rounded-full">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- message -->
                                                <footer
                                                    class=" md:px-9 px-4 sm:flex md:space-x-4 sm:space-x-2 border-t md:pt-6 pt-1 border-slate-100 dark:border-slate-700">
                                                    <div class="flex grow sm:flex md:space-x-1 space-x-3">
                                                        <div
                                                            class="h-8 w-8  cursor-pointer bg-slate-100 dark:bg-slate-900 dark:text-slate-400 flex justify-center items-center text-xl rounded-full">
                                                            <iconify-icon icon="material-symbols:image-outline">
                                                            </iconify-icon>
                                                        </div>
                                                        <div
                                                            class="h-8 w-8  cursor-pointer bg-slate-100 dark:bg-slate-900 dark:text-slate-400 flex justify-center items-center text-xl rounded-full">
                                                            <iconify-icon icon="heroicons-outline:emoji-happy">
                                                            </iconify-icon>
                                                        </div>
                                                        <div
                                                            class="grow relative bg-slate-200 space-x-3 p-2 rounded-2xl dark:bg-slate-700">
                                                            <textarea placeholder="Type your message..."
                                                                class="focus:ring-0 focus:outline-0 block w-full bg-transparent dark:text-white resize-none"></textarea>
                                                        </div>
                                                        <div class="flex-none grow-0 md:pr-0 pr-3">
                                                            <button type="button"
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
            <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-6">
                <div class="card">
                    <header class="card-header">
                        <div class="flex-1">
                            <div class="text-xl text-sm text-black dark:text-white mb-2">
                                <span class="block font-normal">Kode Pesanan : #KT2112</span>
                            </div>
                        </div>
                        <div class="flex-none">
                            <span
                                class="block font-normal w-full rounded-2xl bg-danger-500 text-white dark:text-slate-800 text-sm p-1">BELUM
                                DISETUJUI</span>
                        </div>
                    </header>
                    <div class="card-body p-6">
                        <div class="space-y-6">
                            <div class="text-slate-600 space-y-2  text-sm">
                                <div class=" text-lg space-x-2">
                                    <!-- <div class="flex-none h-6 w-6 rounded-full bg-info-500 dark:bg-info-100 text-black flex flex-col items-center justify-center text-sm">
                                <iconify-icon icon="heroicons:user"></iconify-icon>
                              </div> -->
                                    <div class="flex-1 mx-8 text-sm dark:text-slate-100 text-black font-sm">
                                        projek :
                                    </div>
                                    <div class="block  text-base dark:text-slate-100 text-black font-sm">
                                        Aplikasi pencari jodoh
                                    </div>
                                </div>

                                <div class="relative text-lg space-x-2 ">
                                    <!-- <div class="flex-none h-6 w-6 rounded-full bg-info-500 dark:bg-info-100 text-black flex flex-col items-center justify-center text-sm">
                                <iconify-icon icon="heroicons:user"></iconify-icon>
                              </div> -->
                                    <div class="flex-1 mx-8 text-sm dark:text-slate-100 text-black font-sm">
                                        Nama Mentor :
                                    </div>
                                    <div class="block  text-base dark:text-slate-100 text-black font-sm">
                                        Bapaknya Siapa
                                    </div>
                                </div>

                            </div>
                            <a href="{{route('customer.menu.pemesanan.detail-kontrak')}}" class="inline-flex items-center space-x-3 rtl:space-x-reverse text-sm capitalize font-medium text-slate-600
                                dark:text-slate-300">
                                <span>Setujui Kontrak</span>
                                <iconify-icon icon="heroicons:arrow-right"></iconify-icon>
                            </a>
                        </div>
                    </div>
                </div>
            </div>


            <div class="card">
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
                                            <th scope="col" class=" table-th ">Date</th>
                                            <th scope="col" class=" table-th ">Status Kontrak</th>
                                            <th scope="col" class=" table-th ">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody
                                        class="bg-white divide-y divide-slate-100 dark:bg-slate-800 dark:divide-slate-700">
                                        <tr>
                                            <td class="table-td">1</td>
                                            <td class="table-td ">Aplikasi Kantin Sekolah</td>
                                            <td class="table-td">Jenny Wilson</td>
                                            <td class="table-td ">3/26/2022</td>
                                            <td class="table-td ">
                                                <div
                                                    class="inline-block px-3 min-w-[90px] text-center mx-auto py-1 rounded-[999px] bg-opacity-25 text-success-500 bg-success-500">
                                                    DISETUJUI
                                                </div>
                                            </td>
                                            <td class="table-td ">
                                                <div class="flex space-x-2">
                                                    <a href="{{route('customer.menu.pemesanan.detail-kontrak')}}">
                                                        <span
                                                            class="text-2xl rounded-sm pt-2 p-1 hover:bg-slate-900 bg-info-600 text-white">
                                                            <iconify-icon icon="heroicons:eye"></iconify-icon>
                                                        </span>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
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
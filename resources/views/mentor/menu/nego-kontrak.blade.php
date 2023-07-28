@extends('mentor/template')

@section('main-content')
<a href="{{route('mentor.menu.pemesanan')}}" class="inline-flex items-center space-x-1 rtl:space-x-reverse text-sm capitalize font-medium text-slate-600
                                dark:text-slate-300">
    <iconify-icon icon="heroicons:arrow-left"></iconify-icon>
    <span class="">Kembali </span>
</a>
<div class="flex lg:space-x-5 chat-height rtl:space-x-reverse">
    <!-- <div class="chat-overlay"></div> -->
    <!-- main chat box -->
    <div class="flex-1 flex-wrap ">
        <div class="parent lg:space-x-5 md:space-x-5 space-x-0 lg:space-y-0 md:space-y-0 space-y-5 lg:flex md:flex
            flex-row h-full ">
            <!-- end main message body -->
            <div class="flex-1">
                <div class="h-[calc(100vh-74px)] overflow-auto lg:h-full md:h-full card">
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
                                                    <img src="{{ url('assets/images/users/user-2.jpg') }}" alt=""
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
                                                        <div class="block w-full " data-headlessui-state="">
                                                            <button class="block w-full"
                                                                id="headlessui-menu-button-:rc:" type="button"
                                                                aria-haspopup="menu" aria-expanded="false"
                                                                data-headlessui-state="">
                                                                <div class="label-class-custom">
                                                                    <div
                                                                        class="h-8 w-8 bg-slate-100 dark:bg-slate-600 dark:text-slate-300 text-slate-900 flex flex-col justify-center items-center text-xl rounded-full">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                            aria-hidden="true" role="img"
                                                                            class="iconify iconify--heroicons-outline"
                                                                            width="1em" height="1em"
                                                                            viewbox="0 0 24 24">
                                                                            <path fill="none" stroke="currentColor"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round" stroke-width="2"
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
                                                        <div class="block w-full " data-headlessui-state="">
                                                            <button class="block w-full"
                                                                id="headlessui-menu-button-:re:" type="button"
                                                                aria-haspopup="menu" aria-expanded="false"
                                                                data-headlessui-state="">
                                                                <div class="label-class-custom">
                                                                    <div
                                                                        class="h-8 w-8 bg-slate-300 dark:bg-slate-900 dark:text-slate-400 flex flex-col justify-center items-center text-xl rounded-full text-slate-900">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                            aria-hidden="true" role="img"
                                                                            class="iconify iconify--heroicons-outline"
                                                                            width="1em" height="1em"
                                                                            viewbox="0 0 24 24">
                                                                            <path fill="none" stroke="currentColor"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round" stroke-width="2"
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
                                                        <video class="w-full" id="player" playsinline="playsinline"
                                                            controls="controls"
                                                            data-poster="https://vjs.zencdn.net/v/oceans.png">
                                                            <source src="https://vjs.zencdn.net/v/oceans.mp4"
                                                                type="video/mp4">
                                                        </video>
                                                    </div>
                                                    <span class="font-normal text-xs text-slate-400">4:09 pm</span>
                                                </div>
                                            </div>
                                            <div class="flex-none">
                                                <div class="h-8 w-8 rounded-full">
                                                    <img src="{ {url('assets/images/users/user-2.jpg')}}" alt=""
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
                                                        <div class="block w-full " data-headlessui-state="">
                                                            <button class="block w-full"
                                                                id="headlessui-menu-button-:re:" type="button"
                                                                aria-haspopup="menu" aria-expanded="false"
                                                                data-headlessui-state="">
                                                                <div class="label-class-custom">
                                                                    <div
                                                                        class="h-8 w-8 bg-slate-300 dark:bg-slate-900 dark:text-slate-400 flex flex-col justify-center items-center text-xl rounded-full text-slate-900">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                            aria-hidden="true" role="img"
                                                                            class="iconify iconify--heroicons-outline"
                                                                            width="1em" height="1em"
                                                                            viewbox="0 0 24 24">
                                                                            <path fill="none" stroke="currentColor"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round" stroke-width="2"
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
                                                        <div class="flex-none" style="text-align: center;">
                                                            <a href="https://www.freecodecamp.org/news/content/images/size/w2000/2022/09/jonatan-pie-3l3RwQdHRHg-unsplash.jpg"
                                                                Download="ags"><button type="button"
                                                                    class="text-xs text-slate-900 dark:text-white">
                                                                    Download</a>
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <span class="font-normal text-xs text-slate-400">4:09 pm</span>
                                                </div>
                                            </div>
                                            <div class="flex-none">
                                                <div class="h-8 w-8 rounded-full">
                                                    <img src="{{ url('assets/images/users/user-2.jpg') }}" alt=""
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
                                                        <div class="block w-full " data-headlessui-state="">
                                                            <button class="block w-full"
                                                                id="headlessui-menu-button-:re:" type="button"
                                                                aria-haspopup="menu" aria-expanded="false"
                                                                data-headlessui-state="">
                                                                <div class="label-class-custom">
                                                                    <div
                                                                        class="h-8 w-8 bg-slate-300 dark:bg-slate-900 dark:text-slate-400 flex flex-col justify-center items-center text-xl rounded-full text-slate-900">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                            aria-hidden="true" role="img"
                                                                            class="iconify iconify--heroicons-outline"
                                                                            width="1em" height="1em"
                                                                            viewbox="0 0 24 24">
                                                                            <path fill="none" stroke="currentColor"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round" stroke-width="2"
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
                                                            <div class="flex space-x-2 rtl:space-x-reverse">
                                                                <div class="flex-1 flex space-x-2 rtl:space-x-reverse">
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
                                                    <span class="font-normal text-xs text-slate-400">4:09 pm</span>
                                                </div>
                                            </div>
                                            <div class="flex-none">
                                                <div class="h-8 w-8 rounded-full">
                                                    <img src="{{ url('assets/images/users/user-2.jpg') }}" alt=""
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
                                        <iconify-icon icon="material-symbols:image-outline"></iconify-icon>
                                    </div>
                                    <div
                                        class="h-8 w-8  cursor-pointer bg-slate-100 dark:bg-slate-900 dark:text-slate-400 flex justify-center items-center text-xl rounded-full">
                                        <iconify-icon icon="heroicons-outline:emoji-happy"> </iconify-icon>
                                    </div>
                                    <div class="grow relative bg-slate-200 space-x-3 p-2 rounded-2xl dark:bg-slate-700">
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

            <!-- right info bar -->
            <div class="flex-1 ">
                <div class="h-full card">
                    <div class="p-8 h-full card-body">
                        <!-- BEGIN: Info Area -->
                        <div data-simplebar class="h-full p-6">
                            <h3 class="text-xl text-center text-slate-900 font-medium mt-8 mb-8 font-bold">Tambah
                                Kontrak</h3>
                            <div>
                                <ul class="nav nav-tabs flex flex-col md:flex-row flex-wrap list-none border-b-0 pl-0 mb-4"
                                    id="tabs-tab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a href="#tabs-tambah-kontrak"
                                            class="nav-link w-full flex items-center font-medium text-sm font-Inter leading-tight capitalize border-x-0 border-t-0 border-b border-transparent px-4 pb-2 my-2 hover:border-transparent focus:border-transparent active dark:text-slate-300"
                                            id="tabs-tambah-kontrak-tab" data-bs-toggle="pill"
                                            data-bs-target="#tabs-tambah-kontrak" role="tab"
                                            aria-controls="tabs-tambah-kontrak" aria-selected="true">
                                            <iconify-icon class="mr-1" icon="heroicons-outline:home"></iconify-icon>
                                            Home
                                        </a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a href="#tabs-detail"
                                            class="nav-link w-full flex items-center font-medium text-sm font-Inter leading-tight capitalize border-x-0 border-t-0 border-b border-transparent px-4 pb-2 my-2 hover:border-transparent focus:border-transparent dark:text-slate-300"
                                            id="tabs-detail-tab" data-bs-toggle="pill"
                                            data-bs-target="#tabs-detail" role="tab"
                                            aria-controls="tabs-detail" aria-selected="false">
                                            <iconify-icon class="mr-1" icon="bx:detail"></iconify-icon>
                                            Detail
                                        </a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="tabs-tabContent">
                                    <div class="tab-pane fade show active" id="tabs-tambah-kontrak" role="tabpanel"
                                        aria-labelledby="tabs-tambah-kontrak-tab">
                                        <div class="input-area">
                                            <label for="textFormatter" class="form-label">Nama Project</label>
                                            <div class="relative space-y-6">
                                                <input id="nama_project" type="text" class="form-control"
                                                    placeholder="Alamat Anda">
                                                <!-- <span class="text-xs font-Inter font-normal text-slate-400 mt-2 inline-block">We will convert your text to lowercase instantly</span> -->
                                                <span class="block"></span>
                                            </div>
                                        </div>
                                        <div class="input-area">
                                            <label for="textFormatter" class="form-label">Deskripsi</label>
                                            <div class="relative space-y-6">
                                                <input id="nama_project" type="text" class="form-control"
                                                    placeholder="Alamat Anda">
                                                <!-- <span class="text-xs font-Inter font-normal text-slate-400 mt-2 inline-block">We will convert your text to lowercase instantly</span> -->
                                                <span class="block"></span>
                                            </div>
                                        </div>
                                        <div class="input-area">
                                            <label for="textFormatter" class="form-label">Tenggat Waktu</label>
                                            <div class="relative space-y-6">
                                                <input id="nama_project" type="date" class="form-control"
                                                    placeholder="Alamat Anda">
                                                <!-- <span class="text-xs font-Inter font-normal text-slate-400 mt-2 inline-block">We will convert your text to lowercase instantly</span> -->
                                                <span class="block"></span>
                                            </div>
                                        </div>
                                        <div class="input-area">
                                            <label for="textFormatter" class="form-label">Waktu Kontrak</label>
                                            <div class="relative space-y-6">
                                                <input id="nama_project" type="date" class="form-control"
                                                    placeholder="Alamat Anda">
                                                <!-- <span class="text-xs font-Inter font-normal text-slate-400 mt-2 inline-block">We will convert your text to lowercase instantly</span> -->
                                                <span class="block"></span>
                                            </div>
                                        </div>
                                        <div class="input-area">
                                            <label for="textFormatter" class="form-label">Total Harga</label>
                                            <div class="relative space-y-6">
                                                <input id="nama_project" type="text" class="form-control"
                                                    placeholder="Alamat Anda">
                                                <!-- <span class="text-xs font-Inter font-normal text-slate-400 mt-2 inline-block">We will convert your text to lowercase instantly</span> -->
                                                <span class="block"></span>
                                            </div>
                                        </div>
                                        <button
                                            class="flex w-full items-center justify-center btn-success bg-white btn-sm btn">
                                            <div class="flex-1 mx-8 text-base text-slate-900 text-black font-medium">
                                                Tambah Kontrak
                                            </div>
                                        </button>
                                    </div>
                                    <div class="tab-pane fade" id="tabs-detail" role="tabpanel"
                                        aria-labelledby="tabs-detail-tab">
                                        <table
                                            class="min-w-full divide-y divide-slate-100 table-fixed dark:divide-slate-700"
                                            >
                                            <thead class=" border-t border-slate-100 dark:border-slate-800">
                                                <tr>
                                                    <th scope="col" class=" table-th ">Id Kontrak</th>
                                                    <th scope="col" class=" table-th ">Nama Project</th>
                                                    <th scope="col" class=" table-th ">Deskripsi Project</th>
                                                    <th scope="col" class=" table-th ">Tenggat Waktu</th>
                                                    <th scope="col" class=" table-th ">Status</th>
                                                    <th scope="col" class=" table-th ">Harga</th>
                                                </tr>
                                            </thead>
                                            <tbody
                                                class="bg-white divide-y divide-slate-100 dark:bg-slate-800 dark:divide-slate-700">
                                                <tr>
                                                    <td class="table-td">1</td>
                                                    <td class="table-td ">Aplikasi Kantin Sekolah</td>
                                                    <td class="table-td">Aplikasi yang bisa mengelola kantin dengan
                                                        fitur pembayaran</td>
                                                    <td class="table-td ">20-09-2023
                                                    </td>
                                                    <td class="table-td ">
                                                        <div
                                                            class="inline-block px-3 min-w-[90px] text-center mx-auto py-1 rounded-[999px] bg-opacity-25 text-warning-500 bg-warning-500">
                                                            Belum DISetujui
                                                        </div>
                                                    </td>
                                                    <td class="table-td ">Rp1000000</td>
                                                    
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        <!-- END: Info Area -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
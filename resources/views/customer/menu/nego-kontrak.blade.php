@extends('customer/template')

@section('main-content')
<a href="{{route('customer.menu.pemesanan')}}" class="inline-flex items-center space-x-1 rtl:space-x-reverse text-sm capitalize font-medium text-slate-600
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

            <div class="flex-1 ">
                <div class="h-full card">
                    <div class="p-8 h-full card-body">
                        <!-- BEGIN: Info Area -->
                        <div data-simplebar class="h-full p-6">
                            <header class="grid grid-col-2 grid gap-1">
                            <h3
                                class="text-xl text-center text-slate-900 font-medium mt-8 mb-8 font-bold">
                                Kontrak</h3>
                            </header>
                        <div class="grid lg:grid-cols-2 space-y-2 md:grid-cols-2 grid-cols-2 gap-4">
                <!-- <div class="flex card-text h-full space-y-4"> -->
                <div class="input-area space-y-1">
                    <label for="textFormatter" class="form-label text-slate-400">Nama Project</label>
                    <div class="relative">
                        <span
                            class="text-normal font-Inter font-normal text-slate-800 mt-2 dark:text-white inline-block">Aplikasi
                            Penjualan Barang</span>
                    </div>
                </div>
                <!-- <div class="flex-1"> -->
                <div class="input-area relative">
                    <label for="textFormatter" class="form-label text-slate-400">Status Project</label>
                    <div class="relative">
                        <span
                            class="text-normal font-Inter font-normal text-slate-800 mt-2 dark:text-white inline-block">BELUM
                            DISETUJUI</span>
                    </div>
                </div>
                <div class="flex-none input-area space-y-1">
                    <label for="textFormatter" class="form-label text-slate-400">Nama customer</label>
                    <div class="relative">
                        <span
                            class="text-normal font-Inter font-normal text-slate-800 mt-2 dark:text-white inline-block">Bapaknya
                            dimana</span>
                    </div>
                </div>
                <div class="flex-none input-area space-y-1">
                    <label for="textFormatter" class="form-label text-slate-400">Tenggat Project</label>
                    <div class="relative">
                        <span
                            class="text-normal font-Inter font-normal text-slate-800 mt-2 dark:text-white inline-block">20-08-2023</span>
                    </div>
                </div>
                <div class="input-area space-y-1">
                    <label for="textFormatter" class="form-label text-slate-400">Tipe Project</label>
                    <div class="relative">
                        <span
                            class="text-normal font-Inter font-normal text-slate-800 mt-2 dark:text-white inline-block">Website</span>
                    </div>
                </div>
                <div class="input-area space-y-1">
                    <label for="textFormatter" class="form-label text-slate-400">Tanggal Pembuatan</label>
                    <div class="relative">
                        <span
                            class="text-normal font-Inter font-normal text-slate-800 mt-2 dark:text-white inline-block">20-08-2023</span>
                    </div>
                </div>
                <div class="input-area space-y-1">
                    <label for="textFormatter" class="form-label text-slate-400">Harga</label>
                    <div class="relative">
                        <span
                            class="text-normal font-Inter font-normal text-slate-800 mt-2 dark:text-white inline-block">Rp2000000</span>
                    </div>
                </div>
            </div>
            <div class="input-area mt-5">
                <label for="textFormatter" class="form-label text-slate-400">Deskripsi Project</label>
                <div class="relative">
                    <span
                        class="text-normal dark:text-white font-Inter font-normal text-slate-800 mt-2 inline-block">Lorem
                        ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,
                        molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum
                        numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium
                        optio, eaque rerum! Provident similique accusantium nemo autem. Veritatis
                        obcaecati tenetur iure eius earum ut molestias architecto voluptate aliquam
                        nihil, eveniet aliquid culpa officia aut! Impedit sit sunt quaerat, odit,
                        tenetur error, harum nesciunt ipsum debitis quas aliquid. Reprehenderit,
                        quia.</span>
                </div>
            </div>
            <div class="input-area mt-5">
                <label for="textFormatter" class="form-label text-slate-400">Syarat dan Ketentuan</label>
                <div class="relative">
                    <span
                        class="text-normal pl-8 dark:text-white font-Inter font-normal text-slate-800 mt-1 inline-block">
                        <ol type="1">
                            <li type="1">Deskripsi Layanan <span
                                    class="text-normal pl-1 dark:text-white font-Inter font-normal text-slate-800 mb-2 block">Kami
                                    adalah penyedia jasa pembuatan projek yang ditujukan untuk memenuhi kebutuhan bisnis
                                    Anda.</span></li>
                            <li type="1">Harga dan Pembayaran <span
                                    class="text-normal pl-1 dark:text-white font-Inter font-normal text-slate-800 mb-2 block">Harga
                                    yang tertera di website kami belum termasuk pajak dan biaya tambahan lainnya.
                                    Pembayaran harus dilakukan sebelum layanan kami diberikan.</span></li>
                            <li type="1">Kebijakan Pengembalian Dana <span
                                    class="text-normal pl-1 dark:text-white font-Inter font-normal text-slate-800 mb-2 block">Kami
                                    tidak dapat menerima pengembalian dana setelah layanan kami diberikan, kecuali
                                    terdapat kesalahan atau ketidaksesuaian mendasar dengan kesepakatan awal.</span>
                            </li>
                            <li type="1">Kebijakan Privasi <span
                                    class="text-normal pl-1 dark:text-white font-Inter font-normal text-slate-800 mb-2 block">Kami
                                    sangat menghargai dan menjaga kerahasiaan data pribadi Anda. Informasi yang Anda
                                    berikan kepada kami akan kami perlakukan dengan ketat sesuai dengan Kebijakan
                                    Privasi kami yang terpisah.</span></li>
                            <li type="1">Kebijakan Penggunaan Situs Web <span
                                    class="text-normal pl-1 dark:text-white font-Inter font-normal text-slate-800 mb-2 block">Anda
                                    tidak diperbolehkan menggunakan situs web kami untuk tujuan ilegal atau melanggar
                                    hukum. Anda bertanggung jawab penuh atas setiap konten yang Anda unggah atau bagikan
                                    melalui platform kami.</span></li>
                            <li type="1">Kebijakan Konten <span
                                    class="text-normal pl-1 dark:text-white font-Inter font-normal text-slate-800 mb-2 block">Konten
                                    yang Anda berikan harus sesuai dengan hukum dan tidak boleh melanggar hak cipta atau
                                    hak milik intelektual milik orang lain. Kami berhak untuk menghapus konten yang
                                    melanggar Kebijakan Konten kami.</span></li>
                            <li type="1">Kebijakan Keamanan <span
                                    class="text-normal pl-1 dark:text-white font-Inter font-normal text-slate-800 mb-2 block">Kami
                                    akan menjaga keamanan data Anda dan mengambil langkah-langkah yang wajar untuk
                                    melindunginya dari akses atau penggunaan yang tidak sah.</span></li>
                            <li type="1">Perubahan pada Syarat dan Ketentuan <span
                                    class="text-normal pl-1 dark:text-white font-Inter font-normal text-slate-800 mb-2 block">Kami
                                    berhak untuk mengubah Syarat dan Ketentuan ini dari waktu ke waktu tanpa
                                    pemberitahuan sebelumnya. Perubahan akan berlaku segera setelah dipublikasikan di
                                    situs web kami.<span></li>
                        </ol>
                    </span>
                    <span
                        class="text-normal pl-1 dark:text-white font-Inter font-normal text-slate-800 mb-4 block">Dengan
                        menggunakan layanan kami, Anda dianggap telah membaca, memahami, dan menyetujui semua ketentuan
                        dalam Syarat dan Ketentuan ini. Jika Anda tidak setuju dengan salah satu bagian dari ketentuan
                        ini, maka Anda tidak diperkenankan menggunakan layanan kami.</span>
                </div>
            </div>
            <button class="flex w-full mt-5 items-center justify-center btn-success bg-white btn-sm btn">
                <div class="flex-1 mx-8 text-base text-slate-900 text-white font-medium">Setujui Kontrak
                </div>
            </button>
            <button class="flex w-full mt-5 items-center justify-center btn-danger bg-white btn-sm btn">
                <div class="flex-1 mx-8 text-base text-slate-900 text-white font-medium">Tolak Kontrak
                </div>
            </button>
        </div>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>
@endsection
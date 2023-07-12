@extends('mentor/template')

@section('main-content')
    <div class="flex lg:space-x-5 chat-height overflow-hidden relative rtl:space-x-reverse">
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
                                                    <img src="{{ url('assets/images/users/user-1.jpg') }}" alt=""
                                                        class="w-full h-full object-cover rounded-full">
                                                </div>
                                            </div>
                                            <div class="flex-1 text-start">
                                                <span
                                                    class="block text-slate-800 dark:text-slate-300 text-sm font-medium mb-[2px]">
                                                    Jane Cooper
                                                    <span
                                                        class="status bg-success-500 inline-block h-[10px] w-[10px] rounded-full ml-3"></span>
                                                </span>
                                                <span class="block text-slate-500 dark:text-slate-300 text-xs font-normal">
                                                    Available
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-none">
                                        <div
                                            class="h-8 w-8 bg-slate-100 dark:bg-slate-900 dark:text-slate-400 flex flex-col justify-center items-center text-xl
                        rounded-full cursor-pointer">
                                            <iconify-icon icon="heroicons-outline:dots-horizontal"></iconify-icon>
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
                            Riwayat Pesan
                        </span>
                    </div>
                    <!-- end seach -->
                    <div class="contact-height" data-simplebar="data-simplebar">

                        <!-- BEGIN: Contact Area -->

                        <ul id="message-contact">

                            <li
                                class="block w-full py-5 focus:ring-0 outline-none cursor-pointer group transition-all duration-150 hover:bg-slate-100
            dark:hover:bg-slate-600 dark:hover:bg-opacity-70">
                                <div class="flex space-x-3 px-6 rtl:space-x-reverse">
                                    <div class="flex-none">
                                        <div class="h-10 w-10 rounded-full relative">
                                            <span
                                                class=" status ring-1 ring-white inline-block h-[10px] w-[10px] rounded-full absolute -right-0 top-0  bg-secondary-500 "></span>
                                            <img src="{{ url('assets/images/users/user-2.jpg') }}" alt=""
                                                class="block w-full h-full object-cover rounded-full">
                                        </div>
                                    </div>
                                    <div class="flex-1 text-start flex">
                                        <div class="flex-1">
                                            <span
                                                class="block text-slate-800 dark:text-slate-300 text-sm font-medium mb-[2px]">
                                                Kathryn Murphy
                                            </span>
                                            <span class="block text-slate-600 dark:text-slate-300 text-xs font-normal">
                                                Hey! there I&#39;m...
                                            </span>
                                        </div>
                                        <div class="flex-none ltr:text-right rtl:text-end">
                                            <span class="block text-xs text-slate-400 dark:text-slate-400 font-normal">
                                                12:20 pm
                                            </span>

                                            <span
                                                class="inline-flex flex-col items-center justify-center text-[10px] font-medium w-4 h-4 bg-[#FFC155] text-white
                                rounded-full">
                                                6
                                            </span>

                                        </div>
                                    </div>
                                </div>
                            </li>


                            <li
                                class="block w-full py-5 focus:ring-0 outline-none cursor-pointer group transition-all duration-150 hover:bg-slate-100
            dark:hover:bg-slate-600 dark:hover:bg-opacity-70">
                                <div class="flex space-x-3 px-6 rtl:space-x-reverse">
                                    <div class="flex-none">
                                        <div class="h-10 w-10 rounded-full relative">
                                            <span
                                                class=" status ring-1 ring-white inline-block h-[10px] w-[10px] rounded-full absolute -right-0 top-0 
                        bg-success-500 "></span>
                                            <img src="{{ url('assets/images/users/user-5.jpg') }}" alt=""
                                                class="block w-full h-full object-cover rounded-full">
                                        </div>
                                    </div>
                                    <div class="flex-1 text-start flex">
                                        <div class="flex-1">
                                            <span
                                                class="block text-slate-800 dark:text-slate-300 text-sm font-medium mb-[2px]">
                                                Alec Thompson
                                            </span>
                                            <span class="block text-slate-600 dark:text-slate-300 text-xs font-normal">
                                                Hey! there I&#39;m...
                                            </span>
                                        </div>
                                        <div class="flex-none ltr:text-right rtl:text-end">
                                            <span class="block text-xs text-slate-400 dark:text-slate-400 font-normal">
                                                12:20 pm
                                            </span>

                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li
                                class="block w-full py-5 focus:ring-0 outline-none cursor-pointer group transition-all duration-150 hover:bg-slate-100
            dark:hover:bg-slate-600 dark:hover:bg-opacity-70">
                                <div class="flex space-x-3 px-6 rtl:space-x-reverse">
                                    <div class="flex-none">
                                        <div class="h-10 w-10 rounded-full relative">
                                            <span
                                                class=" status ring-1 ring-white inline-block h-[10px] w-[10px] rounded-full absolute -right-0 top-0  bg-secondary-500 "></span>
                                            <img src="{{ url('assets/images/users/user-1.jpg') }}" alt=""
                                                class="block w-full h-full object-cover rounded-full">
                                        </div>
                                    </div>
                                    <div class="flex-1 text-start flex">
                                        <div class="flex-1">
                                            <span
                                                class="block text-slate-800 dark:text-slate-300 text-sm font-medium mb-[2px]">
                                                Murphy Aileen
                                            </span>
                                            <span class="block text-slate-600 dark:text-slate-300 text-xs font-normal">
                                                Hey! there I&#39;m...
                                            </span>
                                        </div>
                                        <div class="flex-none ltr:text-right rtl:text-end">
                                            <span class="block text-xs text-slate-400 dark:text-slate-400 font-normal">
                                                12:20 pm
                                            </span>

                                        </div>
                                    </div>
                                </div>
                            </li>

                        </ul>
                        <!-- END: Contact Area -->
                    </div>
                    <!-- end contact -->
                </div>
            </div>
        </div>
        <div class="chat-overlay"></div>
        <!-- main chat box -->
        <div class="flex-1">
            <div class="parent flex space-x-5 h-full rtl:space-x-reverse">
                <!-- end main message body -->
                <div class="flex-1">
                    <div class="h-full card">
                        <div class="p-0 h-full body-class">
                            <!-- BEGIN: Blank Page -->
                            <div class="h-full flex flex-col items-center justify-center xl:space-y-2 space-y-6"
                                id="blank-box">
                                <img src="{{ url('assets/images/svg/blank.svg') }}" alt="">
                                <h4 class="text-2xl text-slate-600 dark:text-slate-300 font-medium">
                                    No message yet...
                                </h4>
                                <div class="text-sm text-slate-500 lg:pt-0 pt-4">
                                    <span class="lg:block hidden">don't worry, just take a deep breath & say "Hello"</span>
                                    <div class="lg:hidden block">
                                        <span class="btn btn-dark cursor-pointer start-chat">
                                            Start Conversation
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <!-- END: Blank Page -->

                            <!-- BEGIN: Messages -->


                            <div id="main-message-box" style="height: 128%;">
                                <div class="chat-content parent-height bg-white dark:bg-slate-800">
                                    <div class="msgs overflow-y-auto msg-height pt-6 space-y-6">
                                        <div class="block md:px-6 px-4">
                                            <div class="flex space-x-2 items-start group rtl:space-x-reverse">
                                                <div class="flex-none">
                                                    <div class="h-8 w-8 rounded-full">
                                                        <img src="{{ url('assets/images/users/user-2.jpg') }}"
                                                            alt=""
                                                            class="block w-full h-full object-cover rounded-full">
                                                    </div>
                                                </div>
                                                <div class="flex-1 flex space-x-4 rtl:space-x-reverse">
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
                                                                playsinline="playsinline" controls="controls"
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
                                    class="md:px-6 px-4 sm:flex md:space-x-4 sm:space-x-2 rtl:space-x-reverse border-t md:pt-6 pt-4 border-slate-100
            dark:border-slate-700">
                                    <div class="flex sm:flex md:space-x-3 space-x-1 rtl:space-x-reverse">
                                        <div class="h-8 w-8 cursor-pointer bg-slate-100 dark:bg-slate-900 dark:text-slate-400 flex justify-center
                    items-center text-xl rounded-full"
                                            id="konten">
                                            <iconify-icon icon="heroicons-outline:link">
                                            </iconify-icon>
                                            <input type="checkbox" id="chek" />
                                            <div class="fab text-slate-900"></div>
                                            <div class="fac">
                                                <iconify-icon icon="material-symbols:image-outline"></iconify-icon>
                                                <iconify-icon icon="mdi:file-outline"> </iconify-icon>
                                                <iconify-icon icon="majesticons:video-line"> </iconify-icon>
                                                <iconify-icon icon="solar:tag-price-bold"> </iconify-icon>

                                            </div>
                                            <!--  -->
                                        </div>
                                        <div
                                            class="h-8 w-8 cursor-pointer bg-slate-100 dark:bg-slate-900 dark:text-slate-400 flex justify-center
                    items-center text-xl rounded-full">
                                            <iconify-icon icon="heroicons-outline:emoji-happy"> </iconify-icon>
                                        </div>
                                    </div>
                                    <div class="flex-1 relative flex space-x-3 rtl:space-x-reverse">
                                        <div class="flex-1 bg-slate-200 rounded-2xl dark:bg-slate-700">
                                            <textarea placeholder="Type your message..."
                                                class="focus:ring-0 focus:outline-0 block w-full bg-transparent dark:text-white resize-none"></textarea>
                                        </div>
                                        <div class="flex-none md:pr-0 pr-3">
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
                <div class="flex-none w-[285px]" id="info-box">
                    <div class="h-full card">
                        <div class="p-0 h-full card-body">

                            <!-- BEGIN: Info Area -->
                            <div data-simplebar class="h-full p-6">
                                <h4 class="text-xl text-slate-900 font-medium mb-8">About</h4>
                                <div class="h-[100px] w-[100px] rounded-full mx-auto mb-4">
                                    <img src="{{ url('assets/images/users/user-2.jpg') }}" alt=""
                                        class="block w-full h-full object-cover rounded-full">
                                </div>
                                <div class="text-center">
                                    <h5 class="text-base text-slate-600 dark:text-slate-300 font-medium mb-1">Kathryn
                                        Murphy</h5>
                                    <h6 class="text-xs text-slate-600 dark:text-slate-300 font-normal">Frontend Developer
                                    </h6>
                                </div>
                                <ul
                                    class="list-item mt-5 space-y-4 border-b border-slate-100 dark:border-slate-700 pb-5 -mx-6 px-6">
                                    <li
                                        class="flex justify-between text-sm text-slate-600 dark:text-slate-300 leading-[1]">
                                        <div class="flex space-x-2 items-start rtl:space-x-reverse">
                                            <iconify-icon icon="heroicons-outline:location-marker"></iconify-icon>
                                            <span>Location</span>
                                        </div>
                                        <div class="font-medium">Bangladesh</div>
                                    </li>
                                    <li
                                        class="flex justify-between text-sm text-slate-600 dark:text-slate-300 leading-[1]">
                                        <div class="flex space-x-2 items-start rtl:space-x-reverse">
                                            <iconify-icon icon="heroicons-outline:user"></iconify-icon>
                                            <span>Members since</span>
                                        </div>
                                        <div class="font-medium">Oct 2021</div>
                                    </li>
                                    <li
                                        class="flex justify-between text-sm text-slate-600 dark:text-slate-300 leading-[1]">
                                        <div class="flex space-x-2 items-start rtl:space-x-reverse">
                                            <iconify-icon icon="ion:language-outline"></iconify-icon>
                                            <span>Language</span>
                                        </div>
                                        <div class="font-medium">English</div>
                                    </li>
                                </ul>
                                <ul
                                    class="list-item space-y-3 border-b border-slate-100 dark:border-slate-700 pb-5 -mx-6 px-6 mt-5">
                                    <li class="text-sm text-slate-600 dark:text-slate-300 leading-[1]">
                                        <button class="flex space-x-2 rtl:space-x-reverse">
                                            <iconify-icon icon="bxl:facebook-circle"></iconify-icon>
                                            <span
                                                class="capitalize font-normal text-slate-600 dark:text-slate-300">facebook</span>
                                        </button>
                                    </li>
                                    <li class="text-sm text-slate-600 dark:text-slate-300 leading-[1]">
                                        <button class="flex space-x-2 rtl:space-x-reverse">
                                            <iconify-icon icon="radix-icons:twitter-logo"></iconify-icon>
                                            <span
                                                class="capitalize font-normal text-slate-600 dark:text-slate-300">twitter</span>
                                        </button>
                                    </li>
                                    <li class="text-sm text-slate-600 dark:text-slate-300 leading-[1]">
                                        <button class="flex space-x-2 rtl:space-x-reverse">
                                            <iconify-icon icon="bxl:instagram"></iconify-icon>
                                            <span
                                                class="capitalize font-normal text-slate-600 dark:text-slate-300">instagram</span>
                                        </button>
                                    </li>
                                </ul>
                                <h4 class="py-4 text-sm text-secondary-500 dark:text-slate-300 font-normal">Shared
                                    documents</h4>
                                <ul class="grid grid-cols-3 gap-2">
                                    <li class="h-[46px]">
                                        <img src="{{ url('assets/images/chat/sd1.png') }}" alt=""
                                            class="w-full h-full object-cover rounded-[3px]">
                                    </li>
                                    <li class="h-[46px]">
                                        <img src="{{ url('assets/images/chat/sd2.png') }}" alt=""
                                            class="w-full h-full object-cover rounded-[3px]">
                                    </li>
                                    <li class="h-[46px]">
                                        <img src="{{ url('assets/images/chat/sd3.png') }}" alt=""
                                            class="w-full h-full object-cover rounded-[3px]">
                                    </li>
                                    <li class="h-[46px]">
                                        <img src="{{ url('assets/images/chat/sd4.png') }}" alt=""
                                            class="w-full h-full object-cover rounded-[3px]">
                                    </li>
                                    <li class="h-[46px]">
                                        <img src="{{ url('assets/images/chat/sd5.png') }}" alt=""
                                            class="w-full h-full object-cover rounded-[3px]">
                                    </li>
                                    <li class="h-[46px]">
                                        <img src="{{ url('assets/images/chat/sd6.png') }}" alt=""
                                            class="w-full h-full object-cover rounded-[3px]">
                                    </li>
                                </ul>
                            </div>
                            <!-- END: Info Area -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
    </div>
    </div>
    </div>
    </div>
@endsection

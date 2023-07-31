@extends('landingpage.header')
@section('content')
    <main class="p-5 bg-light-blue">
        <div class="flex justify-center items-start my-2">
            <div class="w-full sm:w-10/12 md:w-1/2 my-1">
                <h2 class="text-xl font-semibold text-vnet-blue mb-2">Kebijakan Privasi Kodemaya</h2>
                <ul class="flex flex-col">
                    <li class="bg-white dark:bg-slate-800 my-2 shadow-lg" x-data="accordion(1)">
                        <h2 @click="handleClick()"
                            class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer">
                            <p class="p-3 text-gray-900 dark:text-white">Informasi yang Kami Kumpulkan</p>
                            <svg :class="handleRotate()"
                                class="fill-current text-blue-400 h-6 w-6 transform transition-transform duration-500"
                                viewBox="0 0 20 20">
                                <path
                                    d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10">
                                </path>
                            </svg>
                        </h2>
                        <div x-ref="tab" :style="handleToggle()"
                            class="border-l-2 border-blue-600 overflow-hidden max-h-0 duration-500 transition-all">
                            <ol class="list-decimal pl-8 text-gray-900 dark:text-white">
                                <li>Kami mungkin mengumpulkan informasi pribadi seperti nama, alamat email, informasi
                                    kontak, dan detail pembayaran saat Anda mendaftar atau menggunakan layanan kami.</li>
                                <li>Data non-pribadi seperti alamat IP, browser yang digunakan, dan informasi teknis lainnya
                                    mungkin juga kami kumpulkan untuk tujuan analisis dan peningkatan platform.</li>
                            </ol>
                        </div>
                    </li>
                    <li class="bg-white dark:bg-slate-800 my-2 shadow-lg" x-data="accordion(2)">
                        <h2 @click="handleClick()"
                            class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer">
                            <p class="p-3 text-gray-900 dark:text-white">Penggunaan Informasi</p>
                            <svg :class="handleRotate()"
                                class="fill-current text-blue-400 h-6 w-6 transform transition-transform duration-500"
                                viewBox="0 0 20 20">
                                <path
                                    d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10">
                                </path>
                            </svg>
                        </h2>
                        <div class="border-l-2 border-blue-600 overflow-hidden max-h-0 duration-500 transition-all"
                            x-ref="tab" :style="handleToggle()">
                            <ol class="list-decimal pl-8 text-gray-900 dark:text-white">
                                <li>Informasi pribadi digunakan untuk menyediakan layanan, memproses pembayaran, dan
                                    berkomunikasi dengan Anda terkait proyek dan layanan yang Anda gunakan.</li>
                                <li>Kami mungkin menggunakan data non-pribadi untuk analisis statistik, penelitian pasar,
                                    dan perbaikan platform.</li>
                            </ol>
                        </div>
                    </li>
                    <li class="bg-white dark:bg-slate-800 my-2 shadow-lg" x-data="accordion(3)">
                        <h2 @click="handleClick()"
                            class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer">
                            <p class="p-3 text-gray-900 dark:text-white">Pengungkapan Informasi</p>
                            <svg :class="handleRotate()"
                                class="fill-current text-blue-400 h-6 w-6 transform transition-transform duration-500"
                                viewBox="0 0 20 20">
                                <path
                                    d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10">
                                </path>
                            </svg>
                        </h2>
                        <div class="border-l-2 border-blue-600 overflow-hidden max-h-0 duration-500 transition-all"
                            x-ref="tab" :style="handleToggle()">
                            <ol class="list-decimal pl-8 text-gray-900 dark:text-white">
                                <li>Kami tidak akan menjual, menyewakan, atau memberikan informasi pribadi Anda kepada pihak
                                    ketiga tanpa izin Anda, kecuali diperlukan oleh hukum.</li>
                                <li>Kami mungkin mengungkapkan informasi untuk mematuhi hukum, menjaga keamanan dan
                                    integritas platform, atau melindungi hak dan kepentingan kami.</li>
                            </ol>
                        </div>
                    </li>
                    <li class="bg-white dark:bg-slate-800 my-2 shadow-lg" x-data="accordion(4)">
                        <h2 @click="handleClick()"
                            class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer">
                            <p class="p-3 text-gray-900 dark:text-white">Keamanan Informasi</p>
                            <svg :class="handleRotate()"
                                class="fill-current text-blue-400 h-6 w-6 transform transition-transform duration-500"
                                viewBox="0 0 20 20">
                                <path
                                    d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10">
                                </path>
                            </svg>
                        </h2>
                        <div class="border-l-2 border-blue-600 overflow-hidden max-h-0 duration-500 transition-all"
                            x-ref="tab" :style="handleToggle()">
                            <p class="p-3 text-gray-900 dark:text-white">
                                Kami mengambil langkah-langkah keamanan yang wajar untuk melindungi informasi pribadi dari
                                akses, penggunaan, atau pengungkapan yang tidak sah.
                            </p>
                            <p class="p-3 text-gray-900 dark:text-white">Namun, tidak ada metode transmisi atau penyimpanan
                                data yang 100% aman. Oleh karena itu, kami tidak dapat menjamin keamanan absolut informasi
                                Anda.</p>
                        </div>
                    </li>
                    <li class="bg-white dark:bg-slate-800 my-2 shadow-lg" x-data="accordion(5)">
                        <h2 @click="handleClick()"
                            class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer">
                            <p class="p-3 text-gray-900 dark:text-white">Perubahan pada Kebijakan Privasi</p>
                            <svg :class="handleRotate()"
                                class="fill-current text-blue-400 h-6 w-6 transform transition-transform duration-500"
                                viewBox="0 0 20 20">
                                <path
                                    d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10">
                                </path>
                            </svg>
                        </h2>
                        <div class="border-l-2 border-blue-600 overflow-hidden max-h-0 duration-500 transition-all"
                            x-ref="tab" :style="handleToggle()">
                            <ol class="list-decimal pl-8 text-gray-900 dark:text-white">
                                <li>Kebijakan privasi kami mungkin diperbarui dari waktu ke waktu. Setiap perubahan akan
                                    diumumkan di platform, dan perubahan tersebut berlaku setelah diumumkan.</li>
                            </ol>
                        </div>
                    </li>
                    <li class="bg-white dark:bg-slate-800 my-2 shadow-lg" x-data="accordion(6)">
                        <p class="p-3 text-gray-600 dark:text-white">Dengan menggunakan aplikasi KodeMaya, Anda dianggap
                            telah membaca, memahami, dan menyetujui seluruh syarat dan ketentuan yang berlaku. Jika Anda
                            tidak setuju dengan syarat dan ketentuan ini, harap berhenti menggunakan aplikasi KodeMaya.</p>
                        <button onclick="history.go(-1)"
                            class="inline-block px-4 py-2 hover:bg-slate-600 dark:hover:bg-slate-600 bg-success-500 dark:hover:text-white font-inter text-sm w-full text-white dark:text-white font-normal">
                            <span class="font-Inter items-center justify-center"
                                style="text-align:'center'; color:white">Saya Setuju</span>
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </main>
@endsection

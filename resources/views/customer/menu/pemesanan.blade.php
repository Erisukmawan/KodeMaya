@extends('customer/template')

@section('main-content')
<div class="space-y-5">
    <div class="bg-no-repeat bg-cover bg-center px-5 py-8 rounded-xl relative flex items-center"
        style="background-image: url({{url('assets/images/all-img/widget-bg-7.png')}})">
        <div class="flex-1">
            <div class="max-w-[300px]">
                <div class="text-xl font-medium text-slate-800 mb-2">
                    <span class="block font-normal">Selamat Datang,</span>
                    <span class="block">{{ Auth::user()->name }}</span>
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
                            class="block font-normal w-full rounded-2xl bg-success-500 text-white dark:text-slate-800 text-sm p-1">SELESAI</span>
                    </div>
                </header>
                <div class="card-body p-6">
                    <div class="space-y-6">
                        <div class="text-slate-600 space-y-3 text-sm">
                            <div class="">
                                <div class=" mx-8 font-medium dark:text-slate-100 text-black">
                                    Nama Project
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
                        <div class="flex">
                            <div class="flex-1">
                                <a href="{{route('customer.menu.pemesanan.detail_pemesanan')}}" class="inline-flex items-center space-x-3 rtl:space-x-reverse text-sm capitalize dark:bg-slate-700 bg-slate-200 rounded-full p-2 font-medium text-slate-600
                                dark:text-slate-300">
                                    <span>Lihat Detail</span>
                                    <iconify-icon icon="heroicons:arrow-right"></iconify-icon>
                                </a>
                            </div>
                            <div class="flex-none">
                                <a href="{{route('customer.menu.pemesanan.review')}}" class="space-x-3 rtl:space-x-reverse text-sm capitalize bg-success-500 rounded-full text-white p-2 font-medium
                                  dark:text-slate-800">
                                    <span>Review Pesanan</span>
                                    <iconify-icon icon="heroicons:arrow-right"></iconify-icon>
                                </a>
                            </div>
                        </div>
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
                            class="block font-normal w-full rounded-2xl bg-info-500 text-white dark:text-slate-800 text-sm p-1">Menunggu</span>
                    </div>
                </header>
                <div class="card-body p-6">
                    <div class="space-y-6">
                        <div class="text-slate-600 space-y-3 text-sm">
                            <div class="">
                                <div class=" mx-8 font-medium dark:text-slate-100 text-black">
                                    Nama Project
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
                                    Nama Project
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
                        <a href="{{route('customer.menu.pemesanan.detail_pemesanan')}}"
                            class="inline-flex items-center space-x-3 rtl:space-x-reverse text-sm capitalize dark:bg-slate-700 bg-slate-200 rounded-full p-2 font-medium text-slate-600
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
@endsection
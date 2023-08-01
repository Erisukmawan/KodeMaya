@extends('customer.template')
@section('main-content')
<h6>Daftar Semua Pesanan Selesai</h6>
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
                <div class="flex">
                    <div class="flex-1"></div>
                    <div class="flex-none">
                        <a href="{{route('customer.menu.penyerahan-pesanan.review')}}" class="space-x-3 rtl:space-x-reverse text-sm capitalize bg-success-500 rounded-full text-white p-2 font-medium
                                  dark:text-slate-800">
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
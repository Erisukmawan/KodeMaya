@extends('mentor.template')
@section('main-content')
<div class="h-full card">
    <div class="p-8 h-full card-body">
        <!-- BEGIN: Info Area -->
        <div data-simplebar class="h-full p-6">
            <div class="card-body flex flex-col p-6">
                <header
                    class="flex space-x-3 mb-5 items-center border-b border-slate-100 dark:border-slate-700 pb-5 -mx-6 px-6">
                    <a href="{{route('mentor.menu.pemesanan')}}" class="inline-flex items-center space-x-1 rtl:space-x-reverse text-sm capitalize font-medium text-slate-600
                                dark:text-slate-300">
                        <iconify-icon icon="heroicons:arrow-left"></iconify-icon>
                        <span class="">Kembali </span>
                    </a>
                    <div class="flex-1">
                        <div class="card-title text-slate-900 dark:text-white">Tambah Kontrak</div>
                    </div>
                </header>
            <div class="input-area">
                <label for="textFormatter" class="form-label">Nama projek</label>
                <div class="relative space-y-6">
                    <input id="nama_projek" type="text" class="form-control" placeholder="Alamat Anda">
                    <!-- <span class="text-xs font-Inter font-normal text-slate-400 mt-2 inline-block">We will convert your text to lowercase instantly</span> -->
                    <span class="block"></span>
                </div>
            </div>
            <div class="input-area">
                <label for="textFormatter" class="form-label">Deskripsi</label>
                <div class="relative space-y-6">
                    <input id="nama_projek" type="text" class="form-control" placeholder="Alamat Anda">
                    <!-- <span class="text-xs font-Inter font-normal text-slate-400 mt-2 inline-block">We will convert your text to lowercase instantly</span> -->
                    <span class="block"></span>
                </div>
            </div>
            <div class="input-area">
                <label for="textFormatter" class="form-label">Tenggat Waktu</label>
                <div class="relative space-y-6">
                    <input id="nama_projek" type="date" class="form-control" placeholder="Alamat Anda">
                    <!-- <span class="text-xs font-Inter font-normal text-slate-400 mt-2 inline-block">We will convert your text to lowercase instantly</span> -->
                    <span class="block"></span>
                </div>
            </div>
            <div class="input-area">
                <label for="textFormatter" class="form-label">Waktu Kontrak</label>
                <div class="relative space-y-6">
                    <input id="nama_projek" type="date" class="form-control" placeholder="Alamat Anda">
                    <!-- <span class="text-xs font-Inter font-normal text-slate-400 mt-2 inline-block">We will convert your text to lowercase instantly</span> -->
                    <span class="block"></span>
                </div>
            </div>
            <div class="input-area">
                <label for="textFormatter" class="form-label">Total Harga</label>
                <div class="relative space-y-6">
                    <input id="nama_projek" type="text" class="form-control" placeholder="Alamat Anda">
                    <!-- <span class="text-xs font-Inter font-normal text-slate-400 mt-2 inline-block">We will convert your text to lowercase instantly</span> -->
                    <span class="block"></span>
                </div>
            </div>
            <button class="flex w-full items-center justify-center btn-success bg-white btn-sm btn">
                <div class="flex-1 mx-8 text-base text-slate-900 text-black font-medium">
                    Tambah Kontrak
                </div>
            </button>
        </div>
    </div>
</div>
@endsection
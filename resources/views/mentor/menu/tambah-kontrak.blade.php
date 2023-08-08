@extends('mentor.template')
@section('main-content')
    <div class="h-full card">
        <div class="p-8 h-full card-body">
            <!-- BEGIN: Info Area -->
            <form action="{{ route('mentor.menu.pemesanan.proses-tambah-kontrak') }}" method="post">
                @csrf
                <div data-simplebar class="h-full p-6">
                    <div class="card-body flex flex-col p-6">
                        <header
                            class="flex space-x-3 mb-5 items-center border-b border-slate-100 dark:border-slate-700 pb-5 -mx-6 px-6">
                            <a href="{{ route('mentor.menu.pemesanan') }}"
                                class="inline-flex items-center space-x-1 rtl:space-x-reverse text-sm capitalize font-medium text-slate-600
                                dark:text-slate-300">
                                <iconify-icon icon="heroicons:arrow-left"></iconify-icon>
                                <span class="">Kembali </span>
                            </a>
                            <div class="flex-1">
                                <div class="card-title text-slate-900 dark:text-white">Tambah Kontrak -
                                    {{ $pemesanan->nama_projek }}</div>
                            </div>
                        </header>
                        <div class="card-text h-full space-y-3 mb-3">
                            @if ($message = Session::get('success'))
                                <div class="p-6 panel-alert-main">
                                    <div class="py-[18px] px-5 font-normal text-sm rounded-md bg-success-500 text-white">
                                        <div class="flex items-center space-x-3 rtl:space-x-reverse">
                                            <iconify-icon class="text-2xl flex-0" icon="system-uicons:target"></iconify-icon>
                                            <p class="flex-1 font-Inter">
                                                {{ $message }}
                                                Hi
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
                        <input type="text" name="id_pemesanan" value="{{ $pemesanan->id_pemesanan }}"
                            style="display: none;">
                        <div class="input-area">
                            <label for="textFormatter" class="form-label">Nama projek</label>
                            <div class="relative">
                                <input id="nama_projek" name="nama_projek" type="text" class="form-control"
                                    placeholder="Nama Projek" value="{{ $pemesanan->nama_projek }}" style="display: none;">
                                <span
                                    class="text-sm font-Inter font-normal text-slate-400 mt-2 inline-block">{{ $pemesanan->nama_projek }}</span>
                                <span class="block"></span>
                                <br>
                            </div>
                        </div>
                        <div class="input-area">
                            <label for="textFormatter" class="form-label">Deskripsi</label>
                            <div class="relative">
                                <input id="deskripsi_projek" name="deskripsi_projek" type="text" class="form-control"
                                    placeholder="Deskripsi Projek" value="{{ $pemesanan->deskripsi_projek }}" style="display: none;">
                                <span
                                    class="text-sm font-Inter font-normal text-slate-400 mt-2 inline-block">{!! $pemesanan->deskripsi_projek !!}</span>
                                <span class="block"></span>
                                <br>
                            </div>
                        </div>
                        <div class="input-area">
                            <label for="textFormatter" class="form-label">Waktu Kontrak</label>
                            <div class="relative">
                                <input id="waktu_kontrak" name="waktu_kontrak" type="date" class="form-control"
                                    style="display: none;">
                                <span id="text_waktu_kontrak"
                                    class="text-sm font-Inter font-normal text-slate-400 mt-2 inline-block">-</span>
                                <span class="block"></span>
                                <br>
                            </div>
                        </div>
                        <div class="input-area">
                            <label for="textFormatter" class="form-label">Tenggat Waktu</label>
                            <div class="relative ">
                                <input id="tenggat_waktu" name="tenggat_waktu" type="date" class="form-control">
                                <span class="block"></span>
                            </div>
                        </div>
                        <div class="card py-4">
                            <div
                                class="py-[18px] px-6 font-normal space-y-8 font-Inter text-sm rounded-md bg-info-500 bg-opacity-[14%] text-info-800">
                                <div class="flex items-start space-x-3 rtl:space-x-reverse">
                                    <div class="flex-1 text-left">
                                        Tenggat waktu diatas akan ditambah <b>2 Hari</b> pada sistem untuk keperluan waktu
                                        proses review oleh pihak admin,
                                        jika <b>H+1</b> setelah waktu tenggat belum direview maka status pesanan akan
                                        selesai secara otomatis.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="input-area">
                            <label for="textFormatter" class="form-label">Total Harga</label>
                            <div class="relative">
                                <input id="total_harga" name="total_harga" type="number"
                                    class="form-control !pl-9" placeholder="harga" required value="{{ $pemesanan->harga }}">
                                <span class="absolute left-2 top-1/2 -translate-y-1/2 text-base text-slate-500">Rp</span>
                                <span class="block"></span>
                            </div>
                        </div>
                        <div class="card py-4">
                            <div
                                class="py-[18px] px-6 font-normal space-y-8 font-Inter text-sm rounded-md bg-info-500 bg-opacity-[14%] text-info-800">
                                <div class="flex items-start space-x-3 rtl:space-x-reverse">
                                    <div class="flex-1 text-left">
                                        Total harga di atas adalah harga yang telah dinegosiasikan,
                                        dan akan ditagihkan kepada pelanggan sebagai <b>Harga Jasa Projek</b> yang harus
                                        dibayar.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit"
                            class="flex w-full items-center justify-center btn-success bg-white btn-sm btn">
                            <div class="flex-1 mx-8 text-base text-slate-900 text-white font-medium">
                                Tambah Kontrak
                            </div>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    @endsection

    @section('custom-script')
        <script>
            $(document).ready(function() {
                $('#text_waktu_kontrak').text(new Date().toTimeString());
                $('#waktu_kontrak').val(new Date().toISOString().split('T')[0])
            })
        </script>
    @endsection

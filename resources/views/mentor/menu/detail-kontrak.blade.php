@extends('mentor.template')
@section('main-content')
    <div class="h-full card">
        <div class="p-8 h-full card-body">
            <!-- BEGIN: Info Area -->
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
                            <div class="card-title text-slate-900 dark:text-white">Detail Kontrak -
                                {{ $kontrak->nama_projek }}</div>
                        </div>
                    </header>
                    <div class="input-area">
                        <label for="textFormatter" class="form-label">Status Kontrak</label>
                        <div class="relative">
                            <input id="status_kontrak" name="status_kontrak" type="text" class="form-control"
                                placeholder="Status Kontrak" style="display: none;">
                            @if ($kontrak->status_kontrak == 'MENUNGGU')
                                <span
                                    class="text-sm inline-block px-3 min-w-[90px] text-center mx-auto py-1 rounded-[999px] bg-opacity-25 text-warning-500 bg-warning-500">{{ $kontrak->status_kontrak }}</span>
                            @elseif ($kontrak->status_kontrak == 'SETUJU')
                                <span
                                    class="text-sm inline-block px-3 min-w-[90px] text-center mx-auto py-1 rounded-[999px] bg-opacity-25 text-success-500 bg-success-500">{{ $kontrak->status_kontrak }}</span>
                            @elseif ($kontrak->status_kontrak == 'TIDAK SETUJU')
                                <span
                                    class="text-sm inline-block px-3 min-w-[90px] text-center mx-auto py-1 rounded-[999px] bg-opacity-25 text-danger-500 bg-danger-500">{{ $kontrak->status_kontrak }}</span>
                            @endif
                            <span class="block"></span>
                            <br>
                        </div>
                    </div>
                    <div class="input-area">
                        <label for="textFormatter" class="form-label">Nama projek</label>
                        <div class="relative">
                            <input id="nama_projek" name="nama_projek" type="text" class="form-control"
                                placeholder="Nama Projek" style="display: none;">
                            <span
                                class="text-sm font-Inter font-normal text-slate-400 mt-2 inline-block">{{ $kontrak->nama_projek }}</span>
                            <span class="block"></span>
                            <br>
                        </div>
                    </div>
                    <div class="input-area">
                        <label for="textFormatter" class="form-label">Deskripsi</label>
                        <div class="relative">
                            <input id="deskripsi_projek" type="text" class="form-control" placeholder="Deskripsi Projek"
                                style="display: none;">
                            <span
                                class="text-sm font-Inter font-normal text-slate-400 mt-2 inline-block">{!! $kontrak->deskripsi_projek !!}</span>
                            <span class="block"></span>
                            <br>
                        </div>
                    </div>
                    <div class="input-area">
                        <label for="textFormatter" class="form-label">Waktu Kontrak</label>
                        <div class="relative">
                            <input id="waktu_kontrak" name="waktu_kontrak" type="date" class="form-control"
                                style="display: none;" value="{{ $kontrak->waktu_kontrak }}">
                            <span id="text_waktu_kontrak"
                                class="text-sm font-Inter font-normal text-slate-400 mt-2 inline-block">{{ $kontrak->waktu_kontrak }}</span>
                            <span class="block"></span>
                            <br>
                        </div>
                    </div>
                    <div class="input-area">
                        <label for="textFormatter" class="form-label">Tenggat Waktu</label>
                        <div class="relative ">
                            <span
                                class="text-sm font-Inter font-normal text-slate-400 mt-2 inline-block">{{ $kontrak->tenggat_waktu }}</span>
                            <span class="block"></span>
                            <br>
                        </div>
                    </div>
                    <div class="card py-4">
                        <div
                            class="py-[18px] px-6 font-normal space-y-8 font-Inter text-sm rounded-md bg-info-500 bg-opacity-[14%] text-info-800">
                            <div class="flex items-start space-x-3 rtl:space-x-reverse">
                                <div class="flex-1 text-left">
                                    Tenggat waktu diatas akan ditambah <b>2 Hari</b> pada sistem untuk keperluan waktu
                                    proses review oleh pihak admin,
                                    jika <b>H+1</b> setelah waktu tenggat belum direview maka status pesanan akan selesai
                                    secara otomatis.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="input-area">
                        <label for="textFormatter" class="form-label">Total Harga</label>
                        <div class="relative">
                            <span id="harga"
                                class="text-sm font-Inter font-normal text-slate-400 mt-2 inline-block">{{ $kontrak->total_harga }}</span>
                            <span class="block"></span>
                            <br>
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
                </div>
            </div>
        </div>
    @endsection

    @section('custom-script')
        <script>
            $(document).ready(function() {
                var hargaEl = $('#harga')
                hargaEl.text(currency.format(parseInt(hargaEl.text())))
            })
        </script>
    @endsection

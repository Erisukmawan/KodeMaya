@extends('customer.template')
@section('main-content')
    <style>
        .deskripsi-pesanan ol {
            list-style: auto !important;
        }
    </style>
    <div class="card xl:col-span-2 rounded-md bg-white dark:bg-slate-800 lg:h-full shadow-base">
        <div class="card-body flex flex-col p-6">
            <header class="flex space-x-3 mb-5 items-center border-b border-slate-100 dark:border-slate-700 pb-5 -mx-6 px-6">
                <a href="{{ route('customer.menu.pemesanan') }}"
                    class="inline-flex items-center space-x-1 rtl:space-x-reverse text-sm capitalize font-medium text-slate-600
                                dark:text-slate-300">
                    <iconify-icon icon="heroicons:arrow-left"></iconify-icon>
                    <span class="">Kembali </span>
                </a>
                <div class="flex-1">
                    <div class="card-title text-center text-slate-900 dark:text-white">Detail Pesanan
                        #{{ $pemesanan->id_pemesanan }}</div>
                </div>
                <div class="flex-none">
                    <a href="{{ route('customer.menu.nego') }}"><button
                            class="rounded-xl p-2 hover:bg-primary-600 w-30 bg-success-600 text-white dark:text-white">
                            <iconify-icon icon="material-symbols:chat"></iconify-icon>
                            <span class="font-normal text-sm p-1">Negosiasi</span>
                        </button>
                    </a>
                </div>
            </header>
            <div class="card-text h-full space-y-">
                <div class="grid lg:grid-cols-3 space-y-2 md:grid-cols-2 grid-cols-2 gap-4">
                    <!-- <div class="flex card-text h-full space-y-4"> -->
                    <div class="input-area space-y-1">
                        <label for="textFormatter" class="form-label text-slate-400">Nama projek</label>
                        <div class="relative">
                            <span
                                class="text-normal font-Inter font-normal text-slate-800 mt-2 dark:text-white inline-block">
                                {{ $pemesanan->nama_projek }}
                            </span>
                        </div>
                    </div>
                    <!-- <div class="flex-1"> -->
                    <div class="input-area relative">
                        <label for="textFormatter" class="form-label text-slate-400">Status pesanan</label>
                        <div class="relative">
                            <span
                                class="text-normal font-Inter font-normal text-slate-800 mt-2 dark:text-white inline-block">
                                @if ($pemesanan->status_pesanan == 'MENUNGGU')
                                    <span
                                        class="block font-normal px-4 w-full rounded-2xl bg-warning-500 text-white dark:text-slate-800 text-sm p-1">Menunggu</span>
                                @elseif ($pemesanan->status_pesanan == 'DIPROSES')
                                    <span
                                        class="block font-normal px-4 w-full rounded-2xl bg-primary-500 text-white dark:text-slate-800 text-sm p-1">Diproses</span>
                                @elseif ($pemesanan->status_pesanan == 'DIPERIKSA')
                                    <span
                                        class="block font-normal px-4 w-full rounded-2xl bg-info-500 text-white dark:text-slate-800 text-sm p-1">Diperiksa</span>
                                @elseif ($pemesanan->status_pesanan == 'SELESAI')
                                    <span
                                        class="block font-normal px-4 w-full rounded-2xl bg-success-500 text-white dark:text-slate-800 text-sm p-1">Selesai</span>
                                @elseif ($pemesanan->status_pesanan == 'DIBATALKAN')
                                    <span
                                        class="block font-normal px-4 w-full rounded-2xl bg-danger-500 text-white dark:text-slate-800 text-sm p-1">Dibatalkan</span>
                                @endif
                            </span>
                        </div>
                    </div>
                    <div class="input-area relative">
                        <label for="textFormatter" class="form-label text-slate-400">Status Kontrak</label>
                        <div class="relative">
                            <span
                                class="text-normal font-Inter font-normal text-slate-800 mt-2 dark:text-white inline-block">
                                @if ($pemesanan->status_kontrak == 'MENUNGGU')
                                    <span
                                        class="text-sm inline-block px-3 min-w-[90px] text-center mx-auto py-1 rounded-[999px] bg-opacity-25 text-warning-500 bg-warning-500">{{ $pemesanan->status_kontrak }}</span>
                                @elseif ($pemesanan->status_kontrak == 'SETUJU')
                                    <span
                                        class="text-sm inline-block px-3 min-w-[90px] text-center mx-auto py-1 rounded-[999px] bg-opacity-25 text-success-500 bg-success-500">{{ $pemesanan->status_kontrak }}</span>
                                @elseif ($pemesanan->status_kontrak == 'TIDAK SETUJU')
                                    <span
                                        class="text-sm inline-block px-3 min-w-[90px] text-center mx-auto py-1 rounded-[999px] bg-opacity-25 text-danger-500 bg-danger-500">{{ $pemesanan->status_kontrak }}</span>
                                @else
                                    <span
                                        class="text-sm inline-block px-3 min-w-[90px] text-center mx-auto py-1 rounded-[999px] bg-opacity-25 text-secondary-500 bg-secondary-500">BELUM
                                        DIBUAT</span>
                                @endif
                            </span>
                        </div>
                    </div>
                    <div class="flex-none input-area space-y-1">
                        <label for="textFormatter" class="form-label text-slate-400">Nama Mentor</label>
                        <div class="relative">
                            <span
                                class="text-normal font-Inter font-normal text-slate-800 mt-2 dark:text-white inline-block">
                                {{ $pemesanan->nama_mentor ? $pemesanan->nama_mentor : '-' }}
                            </span>
                        </div>
                    </div>
                    <div class="flex-none input-area space-y-1">
                        <label for="textFormatter" class="form-label text-slate-400">Waktu Tenggat</label>
                        <div class="relative">
                            <span
                                class="text-normal font-Inter font-normal text-slate-800 mt-2 dark:text-white inline-block">
                                {{ $pemesanan->tenggat_waktu ? $pemesanan->tenggat_waktu : '-' }}
                            </span>
                        </div>
                    </div>
                    <div class="input-area space-y-1">
                        <label for="textFormatter" class="form-label text-slate-400">Tipe projek</label>
                        <div class="relative">
                            <span
                                class="text-normal font-Inter font-normal text-slate-800 mt-2 dark:text-white inline-block">
                                {{ $pemesanan->kategori }}
                            </span>
                        </div>
                    </div>
                    <div class="input-area space-y-1">
                        <label for="textFormatter" class="form-label text-slate-400">Harga yang ditawarkan</label>
                        <div class="relative">
                            <span id="harga"
                                class="text-normal font-Inter font-normal text-slate-800 mt-2 dark:text-white inline-block">
                                {{ $pemesanan->harga }}
                            </span>
                        </div>
                    </div>
                </div>
                <div class="input-area mt-5 deskripsi-pesanan">
                    <label for="textFormatter" class="form-label text-slate-400">Deskripsi</label>
                    <div class="relative">
                        <span
                            class="px-4 text-normal font-Inter font-normal text-slate-800 mt-2 dark:text-white inline-block">
                            {!! $pemesanan->deskripsi_projek !!}
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- </div> -->
@endsection

@section('custom-script')
    <script>
        $(document).ready(function() {
            var hargaEl = $('#harga')
            hargaEl.text(currency.format(parseInt(hargaEl.text())))
        })
    </script>
@endsection

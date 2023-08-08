@extends('admin.template')
@section('main-content')
    <div class="card xl:col-span-2 rounded-md bg-white dark:bg-slate-800 lg:h-full shadow-base">
        <div class="card-body flex flex-col p-6">
            <header class="flex space-x-3 mb-5 items-center border-b border-slate-100 dark:border-slate-700 pb-5 -mx-6 px-6">
                <a href="{{ route('admin.menu.review') }}"
                    class="inline-flex items-center space-x-1 rtl:space-x-reverse text-sm capitalize font-medium text-slate-600
                                dark:text-slate-300">
                    <iconify-icon icon="heroicons:arrow-left"></iconify-icon>
                    <span class="">Kembali </span>
                </a>
                <div class="flex-1">
                    <div class="text-center card-title text-slate-900 dark:text-white">Pesanan #{{ $pesanan->id_pemesanan }}
                    </div>
                </div>
                <div class="flex-none">
                    <form action="{{ route('admin.menu.review.process', ['id' => $pesanan->id_pemesanan]) }}" method="POST">
                        @csrf
                        <button
                            class="flex rounded-xl p-2 hover:bg-primary-600 w-30 bg-success-600 text-white dark:text-white items-center">
                            <iconify-icon icon="carbon:checkmark-filled"></iconify-icon>
                            <span data-tippy-content="Kirim pesanan ke pelanggan"
                                class="toolTip onTop font-normal text-sm p-1">Pesanan Selesai</span>
                        </button>
                    </form>
                </div>
            </header>
            <div class="card-text h-full space-y-">
                <div class="grid lg:grid-cols-2 space-y-2 md:grid-cols-2 grid-cols-2 gap-4">
                    <div class="input-area space-y-1">
                        <label for="textFormatter" class="form-label text-slate-400">Nama projek</label>
                        <div class="relative">
                            <span
                                class="text-normal font-Inter font-normal text-slate-800 mt-2 dark:text-white inline-block">
                                {{ $pesanan->nama_projek }}
                            </span>
                        </div>
                    </div>
                    <!-- <div class="flex-1"> -->
                    <div class="input-area relative">
                        <label for="textFormatter" class="form-label text-slate-400">Status Pesanan</label>
                        <div class="relative">
                            @if ($pesanan->status_pesanan == 'MENUNGGU')
                                <span
                                    class="inline-block font-normal px-4 w-auto rounded-2xl bg-warning-500 text-white dark:text-slate-800 text-sm p-1">Menunggu</span>
                            @elseif ($pesanan->status_pesanan == 'DIPROSES')
                                <span
                                    class="inline-block font-normal px-4 w-auto rounded-2xl bg-primary-500 text-white dark:text-slate-800 text-sm p-1">Diproses</span>
                            @elseif ($pesanan->status_pesanan == 'DIPERIKSA')
                                <span
                                    class="inline-block font-normal px-4 w-auto rounded-2xl bg-info-500 text-white dark:text-slate-800 text-sm p-1">Diperiksa</span>
                            @elseif ($pesanan->status_pesanan == 'SELESAI')
                                <span
                                    class="inline-block font-normal px-4 w-auto rounded-2xl bg-success-500 text-white dark:text-slate-800 text-sm p-1">Selesai</span>
                            @elseif ($pesanan->status_pesanan == 'DIBATALKAN')
                                <span
                                    class="inline-block font-normal px-4 w-auto rounded-2xl bg-danger-500 text-white dark:text-slate-800 text-sm p-1">Dibatalkan</span>
                            @endif
                        </div>
                    </div>
                    <div class="flex-none input-area space-y-1">
                        <label for="textFormatter" class="form-label text-slate-400">Nama Mentor</label>
                        <div class="relative">
                            <span
                                class="text-normal font-Inter font-normal text-slate-800 mt-2 dark:text-white inline-block">
                                {{ $pesanan->nama_mentor }}
                            </span>
                        </div>
                    </div>
                    <div class="flex-none input-area space-y-1">
                        <label for="textFormatter" class="form-label text-slate-400">Tenggat projek</label>
                        <div class="relative">
                            <span
                                class="text-normal font-Inter font-normal text-slate-800 mt-2 dark:text-white inline-block">
                                {{ $pesanan->tenggat_waktu }}
                            </span>
                        </div>
                    </div>
                    <div class="input-area space-y-1">
                        <label for="textFormatter" class="form-label text-slate-400">Kategori</label>
                        <div class="relative">
                            <span
                                class="text-normal font-Inter font-normal text-slate-800 mt-2 dark:text-white inline-block">
                                {{ $pesanan->kategori }}
                            </span>
                        </div>
                    </div>
                    <div class="input-area space-y-1">
                        <label for="textFormatter" class="form-label text-slate-400">Tanggal Pembuatan</label>
                        <div class="relative">
                            <span
                                class="text-normal font-Inter font-normal text-slate-800 mt-2 dark:text-white inline-block">
                                {{ $pesanan->waktu_kontrak }}
                            </span>
                        </div>
                    </div>
                    <div class="input-area space-y-1">
                        <label for="textFormatter" class="form-label text-slate-400">Total Harga</label>
                        <div class="relative">
                            <span id="idr-currency"
                                class="text-normal font-Inter font-normal text-slate-800 mt-2 dark:text-white inline-block">
                                {{ $pesanan->total_harga }}
                            </span>
                        </div>
                    </div>
                    <div class="input-area space-y-1">
                        <label for="textFormatter" class="form-label text-slate-400">Status Kontrak</label>
                        <div class="relative">
                            @if ($pesanan->status_kontrak == 'MENUNGGU')
                                <span
                                    class="text-sm inline-block px-3 min-w-[90px] text-center mx-auto py-1 rounded-[999px] bg-opacity-25 text-warning-500 bg-warning-500">{{ $pesanan->status_kontrak }}</span>
                            @elseif ($pesanan->status_kontrak == 'SETUJU')
                                <span
                                    class="text-sm inline-block px-3 min-w-[90px] text-center mx-auto py-1 rounded-[999px] bg-opacity-25 text-success-500 bg-success-500">{{ $pesanan->status_kontrak }}</span>
                            @elseif ($pesanan->status_kontrak == 'TIDAK SETUJU')
                                <span
                                    class="text-sm inline-block px-3 min-w-[90px] text-center mx-auto py-1 rounded-[999px] bg-opacity-25 text-danger-500 bg-danger-500">{{ $pesanan->status_kontrak }}</span>
                            @else
                                <span
                                    class="text-sm inline-block px-3 min-w-[90px] text-center mx-auto py-1 rounded-[999px] bg-opacity-25 text-secondary-500 bg-secondary-500">BELUM
                                    DIBUAT</span>
                            @endif
                        </div>
                    </div>
                    <div class="input-area space-y-1">
                        <label for="textFormatter" class="form-label text-slate-400">Status Pembayaran</label>
                        <div class="relative">
                            @if ($pesanan->status_pembayaran == 'TERBAYAR')
                                <div
                                    class="inline-block px-3 min-w-[90px] text-center mx-auto py-1 rounded-[999px] bg-opacity-25 text-success-500 bg-success-500">
                                    {{ $pesanan->status_pembayaran }}
                                </div>
                            @elseif ($pesanan->status_pembayaran == 'KADALUARSA')
                                <div
                                    class="inline-block px-3 min-w-[90px] text-center mx-auto py-1 rounded-[999px] bg-opacity-25 text-secondary-500 bg-secondary-500">
                                    {{ $pesanan->status_pembayaran }}
                                </div>
                            @elseif ($pesanan->status_pembayaran == 'GAGAL')
                                <div
                                    class="inline-block px-3 min-w-[90px] text-center mx-auto py-1 rounded-[999px] bg-opacity-25 text-danger-500 bg-danger-500">
                                    {{ $pesanan->status_pembayaran }}
                                </div>
                            @else
                                <div
                                    class="inline-block px-3 min-w-[90px] text-center mx-auto py-1 rounded-[999px] bg-opacity-25 text-danger-500 bg-danger-500">
                                    BELUM DIBUAT
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="input-area mt-5">
                    <label for="textFormatter" class="form-label text-slate-400">Deskripsi Aplikasi</label>
                    <div class="relative">
                        <span class="text-normal font-Inter font-normal text-slate-800 mt-2  dark:text-white inline-block">
                            {!! $pesanan->deskripsi_pemesanan !!}
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- </div> -->
@endsection

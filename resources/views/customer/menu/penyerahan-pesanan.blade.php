@extends('customer.template')
@section('main-content')
    <h6>Daftar Semua Pesanan Selesai</h6>
    @if ($pesanan_selesai->count())
        <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-6">
            @foreach ($pesanan_selesai as $pesanan)
                <div class="card">
                    <header class="card-header">
                        <div class="flex-1">
                            <div class="text-xl text-sm text-black dark:text-white mb-2">
                                <span class="block font-normal">No Pesanan :
                                    #{{ $pesanan->id_pemesanan }}</span>
                            </div>
                        </div>
                        <div class="flex-none">
                            @if ($pesanan->status_pesanan == 'MENUNGGU')
                                <span
                                    class="block font-normal px-4 w-full rounded-2xl bg-warning-500 text-white dark:text-slate-800 text-sm p-1">Menunggu</span>
                            @elseif ($pesanan->status_pesanan == 'DIPROSES')
                                <span
                                    class="block font-normal px-4 w-full rounded-2xl bg-primary-500 text-white dark:text-slate-800 text-sm p-1">Diproses</span>
                            @elseif ($pesanan->status_pesanan == 'DIPERIKSA')
                                <span
                                    class="block font-normal px-4 w-full rounded-2xl bg-info-500 text-white dark:text-slate-800 text-sm p-1">Diperiksa</span>
                            @elseif ($pesanan->status_pesanan == 'SELESAI')
                                <span
                                    class="block font-normal px-4 w-full rounded-2xl bg-success-500 text-white dark:text-slate-800 text-sm p-1">Selesai</span>
                            @elseif ($pesanan->status_pesanan == 'DIBATALKAN')
                                <span
                                    class="block font-normal px-4 w-full rounded-2xl bg-danger-500 text-white dark:text-slate-800 text-sm p-1">Dibatalkan</span>
                            @endif
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
                                        {{ $pesanan->nama_projek }}
                                    </div>
                                </div>
                                <div class="">
                                    <div class=" mx-8 font-medium dark:text-slate-100 text-black">
                                        Kategori
                                    </div>
                                    <div class="block mx-8 text-sm dark:text-slate-100 text-black">
                                        {{ $pesanan->kategori }}
                                    </div>
                                </div>

                                <div class="">
                                    <div class=" mx-8 font-medium dark:text-slate-100 text-black">
                                        Tenggat Waktu
                                    </div>
                                    <div class="block mx-8 text-sm dark:text-slate-100 text-black">
                                        {{ $pesanan->tenggat_waktu ? $pesanan->tenggat_waktu : '-' }}
                                    </div>
                                </div>
                            </div>
                            <div class="flex">
                                <div class="flex-1"></div>
                                <div class="flex-none">
                                    <a href="{{ route('customer.menu.penyerahan-pesanan.review', ['id' => $pesanan->id_pemesanan]) }}"
                                        class="space-x-3 rtl:space-x-reverse text-sm capitalize bg-success-500 rounded-full text-white p-2 font-medium
                                              dark:text-slate-800">
                                        <span>Lihat Detail</span>
                                        <iconify-icon icon="heroicons:arrow-right"></iconify-icon>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <div class="flex max-w-[300px] py-28 mx-auto mt-20">
            <img src="{{ url('assets/images/img-state/no-records.svg') }}">
        </div>
    @endif
@endsection

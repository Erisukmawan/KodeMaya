@extends('financial/template')
@section('main-content')
<button onclick="getPDF()"
    class=" px-4 py-2 hover:bg-slate-600 dark:hover:bg-slate-600 bg-info-600 dark:hover:text-white font-inter text-sm w-2/4   text-white dark:text-white font-normal">
    <iconify-icon icon="line-md:download-loop"></iconify-icon>
    <span class="font-Inter items-center justify-center" style="text-align:'center'; color:white">Download</span>
</button>
<button id="export"
    class=" px-4 py-2 hover:bg-slate-600 dark:hover:bg-slate-600 bg-info-800 dark:hover:text-white font-inter text-sm w-2/4   text-white dark:text-white font-normal">
    <iconify-icon icon="teenyicons:csv-outline"></iconify-icon>Export CSV</button>
<div class=" space-y-5 canvas_div_pdf" id='printable_div_id'>
    <div class="card">
        <header class=" card-header noborder justify-center items-center">
            <img src="{{ url('assets/images/logo/logo.svg') }}" alt="" class="">
        </header>
        <div class="card-body px-6 pb-6">
            <h4 class="card-title mb-8">Data Transaksi Keuangan</h4>
            <p class="ml-8 mb-3">Nama Pegawai: <span>{{ Auth::guard('webfinance')->user()->nama }}</span></p>
            <p class="ml-8 ">Tanggal: <span id="tanggalwaktu"></span></p>
            <div class="overflow-x-auto -mx-6 mt-8 dashcode-data-table">
                <!-- <span class=" col-span-8 ">per hari ini</span> -->
                <span class="  col-span-4 hidden"></span>
                <div class="inline-block min-w-full align-middle">
                    <div class="overflow-hidden ">
                        <table id="exportMe"
                            class="table min-w-full divide-y divide-slate-100 table-fixed dark:divide-slate-700">
                            <thead class=" border-t border-slate-100 dark:border-slate-800">
                                <tr>
                                    <th scope="col" class=" table-th text-center">Nomor</th>
                                    <th scope="col" class=" table-th text-center">Nama Pelanggan</th>
                                    <th scope="col" class=" table-th text-center">Nama Mentor</th>
                                    <th scope="col" class=" table-th text-center">Judul projek</th>
                                    <th scope="col" class=" table-th text-center">Status Pembayaran</th>
                                    <th scope="col" class=" table-th text-center">Status Pemesanan</th>
                                    <th scope="col" class=" table-th text-center">Harga</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-slate-100 dark:bg-slate-800 dark:divide-slate-700">
                                @foreach ($list_pesanan as $pesanan)
                                <tr>
                                    <td class="table-td "><span id="isitable">{{ $pesanan->id_pemesanan }}</span></td>
                                    <td class="table-td "><span id="isitable">{{ $pesanan->nama_pelanggan }}</span></td>
                                    <td class="table-td  "><span id="isitable">{{ $pesanan->nama_mentor }}</span></td>
                                    <td class="table-td  "><span id="isitable">{{ $pesanan->nama_projek }}</span></td>
                                    <td class="table-td "><span class="block min-w-[140px] text-left">
                                            <span class="inline-block text-center mx-auto py-1">
                                                <span class="flex items-center space-x-3 rtl:space-x-reverse">
                                                    @if ($pesanan->status_pembayaran == 'TERBAYAR')
                                                    <div
                                                        class="inline-block px-3 min-w-[90px] text-center mx-auto py-1 rounded-[999px] bg-opacity-25 text-success-500 bg-success-500">
                                                        <span id="isitable">{{ $pesanan->status_pembayaran }}</span>
                                                    </div>
                                                    @elseif ($pesanan->status_pembayaran == 'KADALUARSA')
                                                    <div
                                                        class="inline-block px-3 min-w-[90px] text-center mx-auto py-1 rounded-[999px] bg-opacity-25 text-secondary-500 bg-secondary-500">
                                                        <span id="isitable">{{ $pesanan->status_pembayaran }}</span>
                                                    </div>
                                                    @elseif ($pesanan->status_pembayaran == 'GAGAL')
                                                    <div
                                                        class="inline-block px-3 min-w-[90px] text-center mx-auto py-1 rounded-[999px] bg-opacity-25 text-danger-500 bg-danger-500">
                                                        <span id="isitable">{{ $pesanan->status_pembayaran }}</span>
                                                    </div>
                                                    @else
                                                    <div
                                                        class="inline-block px-3 min-w-[90px] text-center mx-auto py-1 rounded-[999px] bg-opacity-25 text-danger-500 bg-danger-500">
                                                        <span id="isitable">BELUM DIBUAT</span>
                                                    </div>
                                                    @endif
                                                </span>
                                            </span>
                                        </span></td>
                                    <td class="table-td "><span class="block min-w-[140px] text-left">
                                            <span class="inline-block text-center mx-auto py-1">
                                                <span class="flex items-center space-x-3 rtl:space-x-reverse">
                                                    @if ($pesanan->status_pesanan == 'MENUNGGU')
                                                    <span
                                                        class="block font-normal px-4 w-full rounded-2xl bg-warning-500 text-white dark:text-slate-800 text-sm p-1"><span id="isitable">{{ $pesanan->status_pesanan }}</span></span>
                                                    @elseif ($pesanan->status_pesanan == 'DIPROSES')
                                                    <span
                                                        class="block font-normal px-4 w-full rounded-2xl bg-primary-500 text-white dark:text-slate-800 text-sm p-1"><span id="isitable">{{ $pesanan->status_pesanan }}</span></span>
                                                    @elseif ($pesanan->status_pesanan == 'DIPERIKSA')
                                                    <span
                                                        class="block font-normal px-4 w-full rounded-2xl bg-info-500 text-white dark:text-slate-800 text-sm p-1"><span id="isitable">{{ $pesanan->status_pesanan }}</span></span>
                                                    @elseif ($pesanan->status_pesanan == 'SELESAI')
                                                    <span
                                                        class="block font-normal px-4 w-full rounded-2xl bg-success-500 text-white dark:text-slate-800 text-sm p-1"><span id="isitable">{{ $pesanan->status_pesanan }}</span></span>
                                                    @elseif ($pesanan->status_pesanan == 'DIBATALKAN')
                                                    <span
                                                        class="block font-normal px-4 w-full rounded-2xl bg-danger-500 text-white dark:text-slate-800 text-sm p-1"><span id="isitable">{{ $pesanan->status_pesanan }}</span></span>
                                                    @endif
                                                </span>
                                            </span>
                                            </td>
                                    <td id="harga-{{ $pesanan->id_pemesanan }}" class="table-td "><span id="isitable">{{
                                            $pesanan->total_harga ? $pesanan->total_harga : '-' }}</span></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        @foreach($list_pesanan as $pesanan)
        var total_harga = "{{ $pesanan->total_harga }}"
        if (total_harga) {
            $('#harga-{{ $pesanan->id_pemesanan }}').text(currency.format(parseInt($(
                '#harga-{{ $pesanan->id_pemesanan }}').text())))
        }
        @endforeach

        $('#tanggalwaktu').text(new Date().toISOString().split('T')[0])
    })
</script>
@endsection
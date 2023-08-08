@extends('financial/template')
@section('main-content')
    <button onclick="getPDF()"
        class=" px-4 py-2 hover:bg-slate-600 dark:hover:bg-slate-600 bg-info-600 dark:hover:text-white font-inter text-sm w-2/4   text-white dark:text-white font-normal">
        <iconify-icon icon="line-md:download-loop"></iconify-icon>
        <span class="font-Inter items-center justify-center" style="text-align:'center'; color:white">Download</span>
    </button>
    <button
        id="export"class=" px-4 py-2 hover:bg-slate-600 dark:hover:bg-slate-600 bg-info-800 dark:hover:text-white font-inter text-sm w-2/4   text-white dark:text-white font-normal">
        <iconify-icon icon="teenyicons:csv-outline"></iconify-icon>Export CSV</button>
    <div class=" space-y-5 canvas_div_pdf"id='printable_div_id'>
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
                                        <th scope="col" class=" table-th ">Nomor</th>
                                        <th scope="col" class=" table-th ">Nama Customer</th>
                                        <th scope="col" class=" table-th ">Nama Mentor</th>
                                        <th scope="col" class=" table-th ">Judul projek</th>
                                        <th scope="col" class=" table-th ">Status Pembayaran</th>
                                        <th scope="col" class=" table-th ">Status Pemesanan</th>
                                        <th scope="col" class=" table-th ">Harga</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-slate-100 dark:bg-slate-800 dark:divide-slate-700">
                                    @foreach ($list_pesanan as $pesanan)
                                        <tr>
                                            <td class="table-td">#{{ $pesanan->id_pemesanan }}</td>
                                            <td class="table-td">{{ $pesanan->nama_pelanggan }}</td>
                                            <td class="table-td ">{{ $pesanan->nama_mentor }}</td>
                                            <td class="table-td ">{{ $pesanan->nama_projek }}</td>

                                            <td class="table-td ">
                                                {{ $pesanan->status_pembayaran ? $pesanan->status_pembayaran : 'BELUM DIBUAT' }}

                                            </td>
                                            <td class="table-td ">{{ $pesanan->status_pesanan }}</td>
                                            <td id="harga-{{ $pesanan->id_pemesanan }}" class="table-td text-center">
                                                {{ $pesanan->total_harga ? $pesanan->total_harga : '-' }}</td>
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
        $(document).ready(function() {
            @foreach ($list_pesanan as $pesanan)
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
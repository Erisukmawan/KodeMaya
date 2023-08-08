@extends('mentor/template')
@section('main-content')
    <div class="flex lg:justify-end items-center flex-wrap space-xy-5 ">
        <a href="{{ route('mentor.menu.penyerahan-pesanan.pengerjaan_pemesanan') }}"><button type="button"
                class="invocie-btn inline-flex btn btn-sm whitespace-nowrap space-x-2 cursor-pointer bg-primary-400
                    dark:text-white btn-md h-min text-sm font-normal text-white">
                <span class="text-lg">
                    <iconify-icon icon="line-md:upload-loop"></iconify-icon>
                </span>
                <span class="text-lg">Upload projek</span>
            </button></a>
    </div>
    <div class="card">
        <header class=" card-header noborder">
            <h4 class="card-title">pesanan projek Selesai
            </h4>
        </header>
        <div class="card-body px-6 pb-6">
            <div class="overflow-x-auto -mx-6 dashcode-data-table">
                <span class=" col-span-8  hidden"></span>
                <span class="  col-span-4 hidden"></span>
                <div class="inline-block min-w-full align-middle">
                    <div class="overflow-hidden ">
                        <table class="min-w-full divide-y divide-slate-100 table-fixed dark:divide-slate-700"
                            id="data-table">
                            <thead class=" border-t border-slate-100 dark:border-slate-800">
                                <tr>
                                    <th scope="col" class=" table-th ">ID</th>
                                    <th scope="col" class=" table-th ">Nama Projek</th>
                                    <th scope="col" class=" table-th ">Pelanggan</th>
                                    <th scope="col" class=" table-th ">Tenggat Waktu</th>
                                    <th scope="col" class=" table-th ">Total</th>
                                    <th scope="col" class=" table-th ">Status Pemesanan</th>
                                    <th scope="col" class=" table-th ">Status Pembayaran</th>
                                    <th scope="col" class=" table-th "></th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-slate-100 dark:bg-slate-800 dark:divide-slate-700">
                                @foreach ($list_pesanan as $pesanan)
                                    <tr>
                                        <td class="table-td">#{{ $pesanan->id_pemesanan }}</td>
                                        <td class="table-td ">{{ $pesanan->nama_projek }}</td>
                                        <td class="table-td">{{ $pesanan->nama_pelanggan }}</td>
                                        <td class="table-td ">{{ explode(' ', $pesanan->tenggat_waktu)[0] }}</td>
                                        <td id="total_harga-{{ $pesanan->id_pemesanan }}" class="table-td ">
                                            {{ $pesanan->total_harga }}</td>
                                        <td class="table-td ">
                                            @if ($pesanan->status_pesanan == 'MENUNGGU')
                                                <span
                                                    class="inline-block text-center font-normal w-full rounded-2xl bg-warning-500 text-white dark:text-slate-800 text-sm p-1">Menunggu</span>
                                            @elseif ($pesanan->status_pesanan == 'DIPROSES')
                                                <span
                                                    class="inline-block text-center font-normal w-full rounded-2xl bg-primary-500 text-white dark:text-slate-800 text-sm p-1">Diproses</span>
                                            @elseif ($pesanan->status_pesanan == 'DIPERIKSA')
                                                <span
                                                    class="inline-block text-center font-normal w-full rounded-2xl bg-info-500 text-white dark:text-slate-800 text-sm p-1">Diperiksa</span>
                                            @elseif ($pesanan->status_pesanan == 'SELESAI')
                                                <span
                                                    class="inline-block text-center font-normal w-full rounded-2xl bg-success-500 text-white dark:text-slate-800 text-sm p-1">Selesai</span>
                                            @elseif ($pesanan->status_pesanan == 'DIBATALKAN')
                                                <span
                                                    class="inline-block text-center font-normal w-full rounded-2xl bg-danger-500 text-white dark:text-slate-800 text-sm p-1">Dibatalkan</span>
                                            @endif
                                        </td>
                                        <td class="table-td ">
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
                                            @endif
                                        </td>
                                        <td class="table-td ">
                                            @if ($pesanan->status_pesanan == 'DIPROSES')
                                                <div class="flex space-x-2">
                                                    <a
                                                        href="{{ route('mentor.menu.penyerahan-pesanan.pengerjaan_pemesanan', ['id' => $pesanan->id_pemesanan]) }}">
                                                        <span data-tippy-content="Submit Pengerjaan"
                                                            class="toolTip onTop text-2xl rounded-md pt-2 p-1 hover:bg-slate-900 bg-warning-600 text-white">
                                                            <iconify-icon icon="heroicons:pencil"></iconify-icon>
                                                        </span>
                                                </div>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('custom-script')
    <script>
        @foreach ($list_pesanan as $pesanan)
            $('#total_harga-{{ $pesanan->id_pemesanan }}').text(currency.format(parseInt($(
                '#total_harga-{{ $pesanan->id_pemesanan }}').text())))
        @endforeach
    </script>
@endsection

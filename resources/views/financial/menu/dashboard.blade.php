@extends('financial/template')


@section('main-content')
    <div class="card p-6">
        <div class="grid grid-cols-8 gap-5">
            <div class="xl:col-span-12 col-span-12">
                <div class="grid md:grid-cols-4 sm:grid-cols-2 grid-cols-1 gap-4">
                    <!-- BEGIN: Group Chart5 -->
                    <div class=" bg-info-500 rounded-md p-4 bg-opacity-[0.15] dark:bg-opacity-50 text-center">
                        <div
                            class="text-info-500 mx-auto h-10 w-10 flex flex-col items-center justify-center rounded-full bg-white text-2xl mb-4">
                            <iconify-icon icon=heroicons-outline:menu-alt-1></iconify-icon>
                        </div>
                        <span class="block text-sm text-slate-600 font-medium dark:text-white mb-1">
                            Total Pembayaran
                        </span>
                        <span class="block mb- text-slate-900 dark:text-white font-medium">
                            {{ $total_pembayaran }}
                        </span>
                    </div>

                    <div class=" bg-success-500 rounded-md p-4 bg-opacity-[0.15] dark:bg-opacity-50 text-center">
                        <div
                            class="text-success-500 mx-auto h-10 w-10 flex flex-col items-center justify-center rounded-full bg-white text-2xl mb-4">
                            <iconify-icon icon=heroicons-outline:chart-pie></iconify-icon>
                        </div>
                        <span class="block text-sm text-slate-600 font-medium dark:text-white mb-1">
                            Total Sudah Bayar
                        </span>
                        <span class="block mb- text-slate-900 dark:text-white font-medium">
                            {{ $total_sudah_bayar }}
                        </span>
                    </div>


                    <div class=" bg-danger-600 rounded-md p-4 bg-opacity-[0.15] dark:bg-opacity-50 text-center">
                        <div
                            class="text-danger-600 mx-auto h-10 w-10 flex flex-col items-center justify-center rounded-full bg-white text-2xl mb-4">

                            <iconify-icon icon=heroicons-outline:clock></iconify-icon>
                        </div>
                        <span class="block text-sm text-slate-600 font-medium dark:text-white mb-1">
                            Belum Bayar
                        </span>
                        <span class="block mb- text-slate-900 dark:text-white font-medium">
                            {{ $total_belum_bayar }}
                        </span>
                    </div>
                    <div class=" bg-primary-600 rounded-md p-4 bg-opacity-[0.15] dark:bg-opacity-50 text-center">
                        <div
                            class="text-primary-600 mx-auto h-10 w-10 flex flex-col items-center justify-center rounded-full bg-white text-2xl mb-4">
                            <iconify-icon icon=fluent:payment-16-regular></iconify-icon>
                        </div>
                        <span class="block text-sm text-slate-600 font-medium dark:text-white mb-1">
                            Total Keuangan
                        </span>
                        <span id="idr-curr" class="block mb- text-slate-900 dark:text-white font-medium">
                            {{ $total_keuangan }}
                        </span>
                    </div>
                    <!-- END: Group Chart5 -->
                </div>
            </div>
        </div>
    </div>

    <div class=" space-y-5">
        <div class="card">
            <header class=" card-header noborder">
                <h4 class="card-title">Daftar Semua Pemesanan
                </h4>
            </header>
            <div class="card-body px-6 pb-6">
                <div class="overflow-x-auto -mx-6 dashcode-data-table">
                    <span class=" col-span-8  hidden"></span>
                    <span class="  col-span-4 hidden"></span>
                    <div class="inline-block min-w-full align-middle">
                        <div class="overflow-hidden ">
                            <table class="min-w-full divide-y divide-slate-100 table-fixed dark:divide-slate-700">
                                <thead class=" border-t border-slate-100 dark:border-slate-800">
                                    <tr>
                                        <th scope="col" class=" table-th ">ID</th>
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
                                            <td class="table-td">
                                                <span class="flex">
                                                    <span class="text-sm text-slate-600 dark:text-slate-300 capitalize">
                                                        {{ $pesanan->nama_pelanggan }}
                                                    </span>
                                                </span>
                                            </td>
                                            <td class="table-td ">{{ $pesanan->nama_mentor }}</td>
                                            <td class="table-td ">{{ $pesanan->nama_projek }}</td>

                                            <td class="table-td ">
                                                <span class="block min-w-[140px] text-left">
                                                    <span class="inline-block text-center mx-auto py-1">
                                                        <span class="flex items-center space-x-3 rtl:space-x-reverse">
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
                                                        </span>
                                                    </span>
                                                </span>
                                            </td>
                                            <td class="table-td ">
                                                <span class="block min-w-[140px] text-left">
                                                    <span class="inline-block text-center mx-auto py-1">
                                                        <span class="flex items-center space-x-3 rtl:space-x-reverse">
                                                            @if ($pesanan->status_pesanan == 'MENUNGGU')
                                                                <span
                                                                    class="block font-normal px-4 w-full rounded-2xl bg-warning-500 text-white dark:text-slate-800 text-sm p-1">{{ $pesanan->status_pesanan }}</span>
                                                            @elseif ($pesanan->status_pesanan == 'DIPROSES')
                                                                <span
                                                                    class="block font-normal px-4 w-full rounded-2xl bg-primary-500 text-white dark:text-slate-800 text-sm p-1">{{ $pesanan->status_pesanan }}</span>
                                                            @elseif ($pesanan->status_pesanan == 'DIPERIKSA')
                                                                <span
                                                                    class="block font-normal px-4 w-full rounded-2xl bg-info-500 text-white dark:text-slate-800 text-sm p-1">{{ $pesanan->status_pesanan }}</span>
                                                            @elseif ($pesanan->status_pesanan == 'SELESAI')
                                                                <span
                                                                    class="block font-normal px-4 w-full rounded-2xl bg-success-500 text-white dark:text-slate-800 text-sm p-1">{{ $pesanan->status_pesanan }}</span>
                                                            @elseif ($pesanan->status_pesanan == 'DIBATALKAN')
                                                                <span
                                                                    class="block font-normal px-4 w-full rounded-2xl bg-danger-500 text-white dark:text-slate-800 text-sm p-1">{{ $pesanan->status_pesanan }}</span>
                                                            @endif
                                                        </span>
                                                    </span>
                                                </span>
                                            </td>
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
@endsection

@section('custom-script')
    <script>
        $(document).ready(function() {
            @foreach ($list_pesanan as $pesanan)
                var total_harga = "{{ $pesanan->total_harga }}"
                if (total_harga) {
                    $('#harga-{{ $pesanan->id_pemesanan }}').text(currency.format(parseInt($(
                        '#harga-{{ $pesanan->id_pemesanan }}').text())))
                }
            @endforeach
            $('#idr-curr').text(currency.format(parseInt($(
                '#idr-curr').text())))

            $('#tanggalwaktu').text(new Date().toISOString().split('T')[0])
        })
    </script>
@endsection

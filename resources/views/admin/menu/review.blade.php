@extends('admin/template')
@section('main-content')
    <div class=" space-y-5">
        <div class="card">
            <header class=" card-header noborder">
                <h4 class="card-title">Review Pesanan
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
                                        <th scope="col" class=" table-th ">Tenggat Waktu</th>
                                        <th scope="col" class=" table-th ">Pelanggan</th>
                                        <th scope="col" class=" table-th ">Judul Project</th>
                                        <th scope="col" class=" table-th ">Status Pemesanan</th>
                                        <th scope="col" class=" table-th ">Harga</th>
                                        <th scope="col" class=" table-th ">Action</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-slate-100 dark:bg-slate-800 dark:divide-slate-700">
                                    @foreach ($pemesanan_review as $pesanan)
                                        <tr>
                                            <td class="table-td">{{ $pesanan->tenggat_waktu }}</td>
                                            <td class="table-td">
                                                <span class="flex">
                                                    <span class="w-7 h-7 rounded-full ltr:mr-3 rtl:ml-3 flex-none">
                                                        <img src="{{ $pesanan->foto_profil_pelanggan ? $pesanan->foto_profil_pelanggan : url('assets/images/avatar/av-1.svg') }}"
                                                            alt="1" class="object-cover w-full h-full rounded-full">
                                                    </span>
                                                    <span class="text-sm text-slate-600 dark:text-slate-300 capitalize">
                                                        {{ $pesanan->nama_pelanggan }}
                                                    </span>
                                                </span>
                                            </td>
                                            <td class="table-td ">{{ $pesanan->nama_projek }}</td>
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
                                            <td id="harga-{{ $pesanan->id_pemesanan }}" class="table-td ">
                                                {{ $pesanan->total_harga }}</td>
                                            <td class="table-td ">
                                                <div>
                                                    <div class="relative">
                                                        <div class="dropdown relative">
                                                            <form action="" method="post"></form>
                                                            <a
                                                                href="{{ route('admin.menu.review.detail_pemesanan', ['id' => $pesanan->id_pemesanan]) }}">
                                                                <span
                                                                    class="toolTip onTop text-2xl rounded-sm pt-2 p-1 hover:bg-slate-900 bg-primary-600 text-white "
                                                                    data-tippy-content="Lihat dan Serahkan">
                                                                    <iconify-icon icon="ic:baseline-rate-review">
                                                                    </iconify-icon>
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
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
    </div>
@endsection

@section('custom-script')
    <script>
        $(document).ready(function() {
            @foreach ($pemesanan_review as $pesanan)
                var total_harga = "{{ $pesanan->total_harga }}"
                if (total_harga) {
                    $('#harga-{{ $pesanan->id_pemesanan }}').text(currency.format(parseInt($(
                        '#harga-{{ $pesanan->id_pemesanan }}').text())))
                }
            @endforeach
        })
    </script>
@endsection

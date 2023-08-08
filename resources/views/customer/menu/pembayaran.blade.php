@extends('customer/template')
@section('main-content')
    <div class="mb-2 mt-7 p-4 relative text-center rounded-2xl">
        @if ($pesanan_belum_bayar)
            <div class="flex max-w-[500px] mx-auto">
                <img src="{{ url('assets/images/svg/Sapa.svg') }}" alt="" class="flex-1 w-8 relative mt-[73px]">
                <div class="mt-2">
                    <div class="widget-title dark:text-white">No Pembayaran #{{ $pesanan_belum_bayar->getReferenceCode() }}
                    </div>
                    <div class="text-sm font-bold dark:text-white">
                        Belum Kamu Bayar
                    </div>
                </div>
            </div>
            <div class=" bg-danger-500 rounded-2xl mb-10 p-4">
                <a
                    href="{{ route('customer.menu.pembayaran.checkout', ['code' => $pesanan_belum_bayar->getReferenceCode()]) }}"><button
                        class="btn bg-white hover:bg-opacity-80 text-slate-900 btn-sm w-full block">
                        <span>Bayar Sekarang </span>
                        <iconify-icon icon="heroicons:arrow-right"></iconify-icon>
                    </button>
                </a>
            </div>
        @endif
    </div>
    <div class="card">
        <header class=" card-header noborder">
            <h4 class="card-title">Riwayat Pembayaran
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
                                    <th scope="col" class=" table-th ">Kode Referensi</th>
                                    <th scope="col" class=" table-th ">Nama Projek</th>
                                    <th scope="col" class=" table-th ">Mentor</th>
                                    <th scope="col" class=" table-th ">Waktu Pembuatan</th>
                                    <th scope="col" class=" table-th ">Total</th>
                                    <th scope="col" class=" table-th ">Status Pembayaran</th>
                                    <th scope="col" class=" table-th ">Action</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-slate-100 dark:bg-slate-800 dark:divide-slate-700">
                                @foreach ($riwayat_pembayaran as $riwayat)
                                    <tr>
                                        <td class="table-td">{{ $riwayat->kode_referensi }}</td>
                                        <td class="table-td ">{{ $riwayat->nama_projek }}</td>
                                        <td class="table-td">{{ $riwayat->nama_mentor }}</td>
                                        <td class="table-td ">{{ explode(' ', $riwayat->waktu_kontrak)[0] }}</td>
                                        <td id="total-{{ $riwayat->kode_referensi }}" class="table-td ">
                                            {{ $riwayat->total_harga }}</td>
                                        <td class="table-td ">
                                            @if ($riwayat->status_pembayaran == 'TERBAYAR')
                                                <div
                                                    class="inline-block px-3 min-w-[90px] text-center mx-auto py-1 rounded-[999px] bg-opacity-25 text-success-500 bg-success-500">
                                                    {{ $riwayat->status_pembayaran }}
                                                </div>
                                            @elseif ($riwayat->status_pembayaran == 'KADALUARSA')
                                                <div
                                                    class="inline-block px-3 min-w-[90px] text-center mx-auto py-1 rounded-[999px] bg-opacity-25 text-secondary-500 bg-secondary-500">
                                                    {{ $riwayat->status_pembayaran }}
                                                </div>
                                            @elseif ($riwayat->status_pembayaran == 'GAGAL')
                                                <div
                                                    class="inline-block px-3 min-w-[90px] text-center mx-auto py-1 rounded-[999px] bg-opacity-25 text-danger-500 bg-danger-500">
                                                    {{ $riwayat->status_pembayaran }}
                                                </div>
                                            @else
                                                <div
                                                    class="inline-block px-3 min-w-[90px] text-center mx-auto py-1 rounded-[999px] bg-opacity-25 text-danger-500 bg-danger-500">
                                                    BELUM DIBUAT
                                                </div>
                                            @endif
                                        </td>
                                        <td class="table-td ">
                                            <div class="flex space-x-2">
                                                <a
                                                    href="{{ route('customer.menu.pembayaran.bukti_pembayaran', ['code' => $riwayat->getReferenceCode()]) }}">
                                                    <span
                                                        class="text-2xl rounded-sm pt-2 p-1 hover:bg-slate-900 bg-info-600 text-white">
                                                        <iconify-icon icon="solar:bill-check-linear"></iconify-icon>
                                                    </span>
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
@endsection

@section('custom-script')
    <script>
        $(document).ready(function() {
            @foreach ($riwayat_pembayaran as $riwayat)
                var elTotal = $(`#total-{{ $riwayat->kode_referensi }}`)
                elTotal.text(currency.format(elTotal.text()))
            @endforeach
        })
    </script>
@endsection

@extends('mentor/template')


@section('main-content')
    <div class="card p-6">
        <div class="grid grid-cols-8 gap-5">
            <div class="xl:col-span-6 col-span-12">
                <div class="grid md:grid-cols-3 sm:grid-cols-2 grid-cols-1 gap-4">

                    <!-- BEGIN: Group Chart5 -->


                    <div class=" bg-info-500 rounded-md p-4 bg-opacity-[0.15] dark:bg-opacity-50 text-center">
                        <div
                            class="text-info-500 mx-auto h-10 w-10 flex flex-col items-center justify-center rounded-full bg-white text-2xl mb-4">
                            <iconify-icon icon=heroicons-outline:menu-alt-1></iconify-icon>
                        </div>
                        <span class="block text-sm text-slate-600 font-medium dark:text-white mb-1">
                            Total projek
                        </span>
                        <span class="block mb- text-2xl text-slate-900 dark:text-white font-medium">
                            {{ $total_projek }}
                        </span>
                    </div>

                    <div class=" bg-success-500 rounded-md p-4 bg-opacity-[0.15] dark:bg-opacity-50 text-center">
                        <div
                            class="text-success-500 mx-auto h-10 w-10 flex flex-col items-center justify-center rounded-full bg-white text-2xl mb-4">
                            <iconify-icon icon=heroicons-outline:chart-pie></iconify-icon>
                        </div>
                        <span class="block text-sm text-slate-600 font-medium dark:text-white mb-1">
                            projek Selesai
                        </span>
                        <span class="block mb- text-2xl text-slate-900 dark:text-white font-medium">
                            {{ $projek_selesai }}
                        </span>
                    </div>

                    <div class=" bg-warning-500 rounded-md p-4 bg-opacity-[0.15] dark:bg-opacity-50 text-center">
                        <div
                            class="text-warning-500 mx-auto h-10 w-10 flex flex-col items-center justify-center rounded-full bg-white text-2xl mb-4">
                            <iconify-icon icon=heroicons-outline:clock></iconify-icon>
                        </div>
                        <span class="block text-sm text-slate-600 font-medium dark:text-white mb-1">
                            projek Di Proses
                        </span>
                        <span class="block mb- text-2xl text-slate-900 dark:text-white font-medium">
                            {{ $projek_diproses }}
                        </span>
                    </div>

                    <!-- END: Group Chart5 -->
                </div>
            </div>
        </div>
    </div>


    <div class=" space-y-5">
        @if ($pemesanan->count())
            <div class="card">
                <header class=" card-header noborder">
                    <h4 class="card-title">Ringkasan Pengerjaan projek
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
                                            <th scope="col" class=" table-th ">Nomor</th>
                                            <th scope="col" class=" table-th ">Nama Customer</th>
                                            <th scope="col" class=" table-th ">Judul projek</th>
                                            <th scope="col" class=" table-th ">Status</th>
                                            <th scope="col" class=" table-th ">Harga</th>
                                            <th scope="col" class=" table-th ">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody
                                        class="bg-white divide-y divide-slate-100 dark:bg-slate-800 dark:divide-slate-700">
                                        @foreach ($pemesanan as $pesanan)
                                            <tr>
                                                <td class="table-td">#{{ $pesanan->id_pemesanan }}</td>
                                                <td class="table-td">
                                                    <span class="flex">
                                                        <span class="w-7 h-7 rounded-full ltr:mr-3 rtl:ml-3 flex-none">
                                                            <img src="{{ $pesanan->foto_profil_pelanggan ? $pesanan->foto_profil_pelanggan : url('assets/images/avatar/av-1.svg') }}" alt="1"
                                                                class="object-cover w-full h-full rounded-full">
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
                                                    {{ $pesanan->harga == '0' ? '-' : $pesanan->harga }}</td>
                                                <td class="table-td ">
                                                    <div>
                                                        <div class="relative">
                                                            <div class="dropdown relative">
                                                                <button class="text-xl text-center block w-full "
                                                                    type="button" id="tableDropdownMenuButton1"
                                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                                    <iconify-icon icon="heroicons-outline:dots-vertical">
                                                                    </iconify-icon>
                                                                </button>
                                                                <ul
                                                                    class=" dropdown-menu min-w-[120px] absolute text-sm text-slate-700 dark:text-white hidden bg-white dark:bg-slate-700 shadow z-[2] float-left overflow-hidden list-none text-left rounded-lg mt-1 m-0 bg-clip-padding border-none">
                                                                    <li>
                                                                        <a href="{{ route('mentor.menu.pemesanan.detail_pemesanan', ['id' => $pesanan->id_pemesanan]) }}"
                                                                            class="text-slate-600 dark:text-white block font-Inter font-normal px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-600 dark:hover:text-white">View</a>
                                                                    </li>
                                                                </ul>
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
        @else
            <div class="flex max-w-[300px] mx-auto">
                <img src="{{ url('assets/images/img-state/empty-cart.svg') }}">
            </div>
        @endif
    </div>
@endsection

@section('custom-script')
    <script>
        @foreach ($pemesanan as $pesanan)
            $('#harga-{{ $pesanan->id_pemesanan }}').text(currency.format(parseInt($(
                '#harga-{{ $pesanan->id_pemesanan }}').text())))
        @endforeach
    </script>
@endsection

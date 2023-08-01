@extends('financial/template')
@section('main-content')
<button onclick="getPDF()"
                            class=" px-4 py-2 hover:bg-slate-600 dark:hover:bg-slate-600 bg-info-800 dark:hover:text-white font-inter text-sm w-2/4   text-white dark:text-white font-normal">
                            <iconify-icon icon="line-md:download-loop"></iconify-icon> 
                            <span class="font-Inter items-center justify-center"
                                style="text-align:'center'; color:white">Download</span>
                        </button>
    <div class=" space-y-5 canvas_div_pdf"id='printable_div_id' >
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
                            <table class="min-w-full divide-y divide-slate-100 table-fixed dark:divide-slate-700"
                                >
                                <thead class=" border-t border-slate-100 dark:border-slate-800">
                                    <tr>
                                        <th scope="col" class=" table-th ">Nomor</th>
                                        <th scope="col" class=" table-th ">Nama Customer</th>
                                        <th scope="col" class=" table-th ">Nama Mentor</th>
                                        <th scope="col" class=" table-th ">Judul Project</th>
                                        <th scope="col" class=" table-th ">Status Pembayaran</th>
                                        <th scope="col" class=" table-th ">Status Pemesanan</th>
                                        <th scope="col" class=" table-th ">Harga</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-slate-100 dark:bg-slate-800 dark:divide-slate-700">
                                    <tr>
                                        <td class="table-td">1</td>
                                        <td class="table-td">
                                            <span class="flex">
                                                <span class="w-7 h-7 rounded-full ltr:mr-3 rtl:ml-3 flex-none">
                                                    <img src="{{url('assets/images/all-img/customer_1.png')}}" alt="1"
                                                        class="object-cover w-full h-full rounded-full">
                                                </span>
                                                <span
                                                    class="text-sm text-slate-600 dark:text-slate-300 capitalize">Jenny
                                                    Wilson</span>
                                            </span>
                                        </td>
                                        <td class="table-td ">Jeje</td>
                                        <td class="table-td ">Aplikasi Kantin Sekolah</td>
                                        
                                        <td class="table-td ">
                                            <span class="block min-w-[140px] text-left">
                                                <span class="inline-block text-center mx-auto py-1">
                                                    <span class="flex items-center space-x-3 rtl:space-x-reverse">
                                                        <span class="h-[6px] w-[6px] bg-success-500 rounded-full inline-block ring-4 ring-opacity-30 ring-success-500"></span>
                                                        <span>Sudah Bayar</span>
                                                    </span>
                                                </span>
                                            </span>
                                        </td>
                                        <td class="table-td ">
                                            <span class="block min-w-[140px] text-left">
                                                <span class="inline-block text-center mx-auto py-1">
                                                    <span class="flex items-center space-x-3 rtl:space-x-reverse">
                                                        <span class="h-[6px] w-[6px] bg-warning-500 rounded-full inline-block ring-4 ring-opacity-30 ring-warning-500"></span>
                                                        <span>Diproses</span>
                                                    </span>
                                                </span>
                                            </span>
                                        </td>
                                        <td class="table-td "> Rp20.000.000</td>
                                    </tr>
                                    <tr>
                                        <td class="table-td">1</td>
                                        <td class="table-td">
                                            <span class="flex">
                                                <span class="w-7 h-7 rounded-full ltr:mr-3 rtl:ml-3 flex-none">
                                                    <img src="{{url('assets/images/all-img/customer_1.png')}}" alt="1"
                                                        class="object-cover w-full h-full rounded-full">
                                                </span>
                                                <span
                                                    class="text-sm text-slate-600 dark:text-slate-300 capitalize">Jenny
                                                    Wilson</span>
                                            </span>
                                        </td>
                                        <td class="table-td ">Jeje</td>
                                        <td class="table-td ">Aplikasi Kantin Sekolah</td>
                                        <td class="table-td ">
                                            <span class="block min-w-[140px] text-left">
                                                <span class="inline-block text-center mx-auto py-1">
                                                    <span class="flex items-center space-x-3 rtl:space-x-reverse">
                                                        <span class="h-[6px] w-[6px] bg-danger-500 rounded-full inline-block ring-4 ring-opacity-30 ring-danger-500"></span>
                                                        <span>Belum Bayar</span>
                                                    </span>
                                                </span>
                                            </span>
                                        </td>
                                        <td class="table-td ">
                                            <span class="block min-w-[140px] text-left">
                                                <span class="inline-block text-center mx-auto py-1">
                                                    <span class="flex items-center space-x-3 rtl:space-x-reverse">
                                                        <span class="h-[6px] w-[6px] bg-warning-500 rounded-full inline-block ring-4 ring-opacity-30 ring-warning-500"></span>
                                                        <span>Diproses</span>
                                                    </span>
                                                </span>
                                            </span>
                                        </td>
                                        <td class="table-td "> Rp20.000.000</td>
                                    </tr>
                                    <tr>
                                        <td class="table-td" colspan="6"><p class="text-right font-bold">Total Harga</p></td>
                                        <td class="table-td "> Rp20.000.000</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
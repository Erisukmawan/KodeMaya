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
                    <span class="block mb- text-2xl text-slate-900 dark:text-white font-medium">
                        64
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
                    <span class="block mb- text-2xl text-slate-900 dark:text-white font-medium">
                        45
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
                    <span class="block mb- text-2xl text-slate-900 dark:text-white font-medium">
                        190
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
                    <span class="block mb- text-2xl text-slate-900 dark:text-white font-medium">
                        Rp2.000.000
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
                            <table class="min-w-full divide-y divide-slate-100 table-fixed dark:divide-slate-700"
                                >
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
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
@extends('financial/template')
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
                                    <tr>
                                        <td class="table-td">28-10-2023</td>
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
                                        <td class="table-td ">Aplikasi Kantin Sekolah</td>
                                        <td class="table-td ">
                                            <span class="block min-w-[140px] text-left">
                                                <span class="inline-block text-center mx-auto py-1">
                                                    <span class="flex items-center space-x-3 rtl:space-x-reverse">
                                                        <span class="h-[6px] w-[6px] bg-danger-500 rounded-full inline-block ring-4 ring-opacity-30 ring-danger-500"></span>
                                                        <span>Di Periksa</span>
                                                    </span>
                                                </span>
                                            </span>
                                        </td>
                                        <td class="table-td "> Rp20.000.000</td>
                                        <td class="table-td ">
                                            <div>
                                                <div class="relative">
                                                    <div class="dropdown relative">
                                                        <button class="text-xl text-center block w-full " type="button"
                                                            id="tableDropdownMenuButton1" data-bs-toggle="dropdown"
                                                            aria-expanded="false">
                                                            <iconify-icon icon="heroicons-outline:dots-vertical">
                                                            </iconify-icon>
                                                        </button>
                                                        <ul class=" dropdown-menu min-w-[120px] absolute text-sm text-slate-700 dark:text-white hidden bg-white dark:bg-slate-700 shadow z-[2] float-left overflow-hidden list-none text-left rounded-lg mt-1 m-0 bg-clip-padding border-none">
                                                            <li>
                                                                <a href="{{route('financial.menu.review.detail_pemesanan')}}" class="text-slate-600 dark:text-white block font-Inter font-normal px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-600 dark:hover:text-white">Lihat dan Serahkan</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
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
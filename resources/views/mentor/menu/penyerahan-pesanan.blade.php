@extends('mentor/template')
@section('main-content')
<div class="flex lg:justify-end items-center flex-wrap space-xy-5 ">
    <a href="{{(route('mentor.menu.penyerahan-pesanan.pengerjaan_pemesanan'))}}"><button type="button" class="invocie-btn inline-flex btn btn-sm whitespace-nowrap space-x-2 cursor-pointer bg-primary-400
                    dark:text-white btn-md h-min text-sm font-normal text-white">
        <span class="text-lg">
            <iconify-icon icon="line-md:upload-loop"></iconify-icon>
        </span>
        <span class="text-lg">Upload projek</span>
    </button></a>
</div>
<div class="card">
    <header class=" card-header noborder">
        <h4 class="card-title">Riwayat projek Selesai
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
                                <th scope="col" class=" table-th ">Id</th>
                                <th scope="col" class=" table-th ">projek_name</th>
                                <th scope="col" class=" table-th ">Customer</th>
                                <th scope="col" class=" table-th ">Tenggat Waktu</th>
                                <th scope="col" class=" table-th ">Total</th>
                                <th scope="col" class=" table-th ">Status Pemesanan</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-slate-100 dark:bg-slate-800 dark:divide-slate-700">
                            <tr>
                                <td class="table-td">1</td>
                                <td class="table-td ">Aplikasi Kantin Sekolah</td>
                                <td class="table-td">Jenny Wilson</td>
                                <td class="table-td ">3/26/2022</td>
                                <td class="table-td ">Rp.779.953</td>
                                <td class="table-td ">
                                   <div class="inline-block px-3 min-w-[90px] text-center mx-auto py-1 rounded-[999px] bg-opacity-25 text-success-500 bg-success-500">
                                      Selesai
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


@endsection
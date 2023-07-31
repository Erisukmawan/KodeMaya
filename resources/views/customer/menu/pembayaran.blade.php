@extends('customer/template')
@section('main-content')
<div class="mb-2 mt-7 p-4 relative text-center rounded-2xl">
    <div class="flex max-w-[300px] mx-auto">
        <img src="{{url('assets/images/svg/Sapa.svg')}}" alt="" class="flex-1 w-8 relative mt-[73px]">
        <div class="mt-2">
            <div class="widget-title dark:text-white">No Pembayaran #200</div>
            <div class="text-sm font-bold dark:text-white">
                Belum Kamu Bayar
            </div>
        </div>
    </div>
    <div class=" bg-danger-500 rounded-2xl mb-10 p-4">
        <a href="{{route('customer.menu.pembayaran.checkout')}}" ><button
            class="btn bg-white hover:bg-opacity-80 text-slate-900 btn-sm w-full block">
            <span>Bayar Sekarang </span>
            <iconify-icon icon="heroicons:arrow-right"></iconify-icon>
        </button>
        </a>
    </div>
    
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
                            <table class="min-w-full divide-y divide-slate-100 table-fixed dark:divide-slate-700" id="data-table">
                              <thead class=" border-t border-slate-100 dark:border-slate-800">
                                <tr>
                                  <th scope="col" class=" table-th ">Id</th>
                                  <th scope="col" class=" table-th ">Project_name</th>
                                  <th scope="col" class=" table-th ">Mentor</th>
                                  <th scope="col" class=" table-th ">Date</th>
                                  <th scope="col" class=" table-th ">Total</th>
                                  <th scope="col" class=" table-th ">user_status</th>
                                  <th scope="col" class=" table-th ">Action</th>
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
                                      paid
                                    </div>
                                  </td>
                                  <td class="table-td ">
                                      <div class="flex space-x-2">
                                        <a href="{{route('customer.menu.pembayaran.bukti_pembayaran')}}">
                                                <span class="text-2xl rounded-sm pt-2 p-1 hover:bg-slate-900 bg-info-600 text-white">
                                                  <iconify-icon icon="solar:bill-check-linear"></iconify-icon>
                                                </span>
                                        </a>
                                              <a href="finvoive-preview.html">
                                                <span class="text-2xl rounded-sm pt-2 p-1 w-9 hover:bg-slate-900 bg-danger-600 text-white">
                                                  <iconify-icon icon="heroicons:trash"></iconify-icon>
                                                </span>
                                              </a>
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

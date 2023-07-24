@extends('customer/template')
@section('main-content')
<div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-6">
                    <div class="card">
                          <header class="card-header">
                              <div class="flex-1">
                          <div class="text-xl text-sm text-black dark:text-white mb-2">
                            <span class="block font-normal">Kode Pembayaran : #PB2112</span>
                          </div>
                      </div>
                      <div class="flex-none">
                                <span class="block font-normal w-full rounded-2xl bg-danger-500 text-white dark:text-slate-800 text-sm p-1">BELUM BAYAR</span>
                              </div>
                          </header>
                      <div class="card-body p-6">
                        <div class="space-y-6">
                          <div class="text-slate-600 space-y-2  text-sm">
                            <div class=" text-lg space-x-2">
                              <!-- <div class="flex-none h-6 w-6 rounded-full bg-info-500 dark:bg-info-100 text-black flex flex-col items-center justify-center text-sm">
                                <iconify-icon icon="heroicons:user"></iconify-icon>
                              </div> -->
                              <div class="flex-1 mx-8 text-sm dark:text-slate-100 text-black font-sm">
                                Project :
                              </div>
                              <div class="block  text-base dark:text-slate-100 text-black font-sm">
                              Aplikasi pencari jodoh
                              </div>
                            </div>

                            <div class="relative text-lg space-x-2 ">
                              <!-- <div class="flex-none h-6 w-6 rounded-full bg-info-500 dark:bg-info-100 text-black flex flex-col items-center justify-center text-sm">
                                <iconify-icon icon="heroicons:user"></iconify-icon>
                              </div> -->
                              <div class="flex-1 mx-8 text-sm dark:text-slate-100 text-black font-sm">
                                Total Tagihan :
                              </div>
                              <div class="block  text-base dark:text-slate-100 text-black font-sm">
                              Rp1.000.000
                              </div>
                            </div>

                          <div class="text-lg space-x-2 ">
                              <!-- <div class="flex-none h-6 w-6 rounded-full bg-info-500 dark:bg-info-100 text-black flex flex-col items-center justify-center text-sm">
                                <iconify-icon icon="heroicons:user"></iconify-icon>
                              </div> -->
                              <div class="flex-1 mx-8 text-sm dark:text-slate-100 text-black font-sm">
                                Batas Pembayaran :
                              </div>
                              <div class="block  text-base dark:text-slate-100 text-black font-sm">
                              20-06-03 12:09:12
                              </div>
                            </div>
                          
                          </div>
                          <a href="./#" class="inline-flex items-center space-x-3 rtl:space-x-reverse text-sm capitalize font-medium text-slate-600
                                dark:text-slate-300">
                            <span>Lanjutkan Pembayaran</span>
                            <iconify-icon icon="heroicons:arrow-right"></iconify-icon>
                          </a>
                        </div>
                      </div>
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
                                                  <iconify-icon icon="heroicons:eye"></iconify-icon>
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
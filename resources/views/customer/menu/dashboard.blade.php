@extends('customer/template')

@section('main-content')
    <div class="space-y-5 profile-page">
      <div class="bg-no-repeat bg-cover bg-center px-5 py-8 rounded-xl relative flex items-center" style="background-image: url({{url('assets/images/all-img/widget-bg-7.png')}})">
                      <div class="flex-1">
                        <div class="max-w-[180px]">
                          <div class="text-xl font-medium text-white dark:text-slate-800 mb-2">
                            <span class="block font-normal">Good evening,</span>
                            <span class="block">{{ Auth::user()->name }}</span>
                          </div>
                        </div>
                      </div>
                      <div class="flex-none">
                        <button class="flex space-x-1 btn-light bg-white btn-sm btn">
                          <div class="flex-none h-6 w-6  rounded-full bg-info-900 text-white flex flex-col items-center justify-center text-lg">
                                <iconify-icon icon="mingcute:add-fill"></iconify-icon>
                              </div>
                              <div class="flex-1 mx-8 text-base text-slate-900 text-black font-medium">
                                Tambah Pesanan
                              </div>
                        </button>
                      </div>
                    </div>
                    <!-- section pesanan  -->
                  <div class=" gap-6">
                    <div class="lg:col-span-8 col-span-12">
                      <div class="card">
                          <header class="card-header">
                              <div class="flex-1">
                          <div class="text-xl text-sm text-black dark:text-white mb-2">
                            <span class="block font-normal">No Pesanan : {id_pemesanan}</span>
                          </div>
                      </div>
                      <div class="flex-none">
                                <span class="block font-normal w-full rounded-2xl bg-success-500 text-white dark:text-slate-800 text-sm p-1">SEDANG DIPROSES</span>
                              </div>
                          </header>
                      <div class="card-body p-6">
                        <div class="space-y-6">
                          <div class="text-slate-600 space-y-1  text-sm">
                            <div class="flex text-lg space-x-2">
                              <div class="flex-none h-6 w-6 rounded-full bg-info-500 dark:bg-info-100 text-black flex flex-col items-center justify-center text-sm">
                                <iconify-icon icon="heroicons:user"></iconify-icon>
                              </div>
                              <div class="flex-1 mx-8 text-base dark:text-slate-100 text-black font-sm">
                                Nama Mentor
                              </div>
                            </div>

                            <div class="flex text-lg space-x-2 ">
                              <div class="flex-none h-6 w-6 rounded-full bg-info-500 dark:bg-info-100 text-black flex flex-col items-center justify-center text-sm">
                                <iconify-icon icon="heroicons:user"></iconify-icon>
                              </div>
                              <div class="flex-1 mx-8 text-base dark:text-slate-100 text-black font-sm">
                                Nama Mentor
                              </div>
                            </div>
                          </div>
                          <a href="./#" class="inline-flex items-center space-x-3 rtl:space-x-reverse text-sm capitalize font-medium text-slate-600
                                dark:text-slate-300">
                            <span>Lihat Detail</span>
                            <iconify-icon icon="heroicons:arrow-right"></iconify-icon>
                          </a>
                        </div>
                      </div>
                    </div>
                    </div>
                </div>
                 <div class=" gap-6">
                    <div class="lg:col-span-8 col-span-12">
                      <div class="card">
                          <header class="card-header">
                              <div class="flex-1">
                          <div class="text-xl text-sm text-black dark:text-white mb-2">
                            <span class="block font-normal">No Pesanan : {id_pemesanan}</span>
                          </div>
                      </div>
                      <div class="flex-none">
                                <span class="block font-normal w-full rounded-2xl bg-success-500 text-white dark:text-slate-800 text-sm p-1">SEDANG DIPROSES</span>
                              </div>
                          </header>
                      <div class="card-body p-6">
                        <div class="space-y-6">
                          <div class="text-slate-600 space-y-1  text-sm">
                            <div class="flex text-lg space-x-2">
                              <div class="flex-none h-6 w-6 rounded-full bg-info-500 dark:bg-info-100 text-black flex flex-col items-center justify-center text-sm">
                                <iconify-icon icon="heroicons:user"></iconify-icon>
                              </div>
                              <div class="flex-1 mx-8 text-base dark:text-slate-100 text-black font-sm">
                                Nama Mentor
                              </div>
                            </div>

                            <div class="flex text-lg space-x-2 ">
                              <div class="flex-none h-6 w-6 rounded-full bg-info-500 dark:bg-info-100 text-black flex flex-col items-center justify-center text-sm">
                                <iconify-icon icon="heroicons:user"></iconify-icon>
                              </div>
                              <div class="flex-1 mx-8 text-base dark:text-slate-100 text-black font-sm">
                                Nama Mentor
                              </div>
                            </div>
                          </div>
                          <a href="./#" class="inline-flex items-center space-x-3 rtl:space-x-reverse text-sm capitalize font-medium text-slate-600
                                dark:text-slate-300">
                            <span>Lihat Detail</span>
                            <iconify-icon icon="heroicons:arrow-right"></iconify-icon>
                          </a>
                        </div>
                      </div>
                    </div>
                    </div>
                  </div>
                </div>
@endsection
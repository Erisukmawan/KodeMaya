@extends('mentor/template')


@section('main-content')
    <div class="space-y-5 profile-page">
      <div class="bg-no-repeat bg-cover bg-center px-5 py-8 rounded-xl relative flex items-center" style="background-image: url({{url('assets/images/all-img/widget-bg-7.png')}})">
                      <div class="flex-1">
                        <div class="max-w-[180px]">
                          <div class="text-xl font-medium text-white dark:text-slate-800 mb-2">
                            <span class="block font-normal">Good evening,</span>
                            <span class="block">Mr. Dianne Russell</span>
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
                  <div class=" gap-6">
                    <div class="lg:col-span-8 col-span-12">
                      <div class="card">
                          <header class="card-header">
                              <div class="flex space-x-3 items-center rtl:space-x-reverse">
                              <div class="flex-none h-8 w-8 rounded-full bg-success-500 text-white flex flex-col items-center justify-center text-lg">
                                <iconify-icon icon="heroicons:user"></iconify-icon>
                              </div>
                              <div class="flex-1 text-base text-slate-900 dark:text-white font-medium">
                                Profile Settings
                              </div>
                            </div>
                          </header>
                      <div class="card-body p-6">
                        <div class="space-y-6">
                          <div class="text-slate-600 dark:text-slate-300 text-sm">
                            Connect your bank account to your company profile, and more
                          </div>
                          <a href="./#" class="inline-flex items-center space-x-3 rtl:space-x-reverse text-sm capitalize font-medium text-slate-600
                                dark:text-slate-300">
                            <span>Chnage Settings</span>
                            <iconify-icon icon="heroicons:arrow-right"></iconify-icon>
                          </a>
                        </div>
                      </div>
                    </div>
                    </div>
                  </div>
                </div>

                <div class=" space-y-5">
                  <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-6">
                    <div class="card">
                      <div class="card-body p-6">
                        <div class="space-y-6">
                          <div class="flex space-x-3 items-center rtl:space-x-reverse">
                            <div class="flex-none h-8 w-8 rounded-full bg-slate-800 dark:bg-slate-700 text-slate-300 flex flex-col items-center
                                    justify-center text-lg">
                              <iconify-icon icon="heroicons:building-office-2"></iconify-icon>
                            </div>
                            <div class="flex-1 text-base text-slate-900 dark:text-white font-medium">
                              Company Settings
                            </div>
                          </div>
                          <div class="text-slate-600 dark:text-slate-300 text-sm">
                            Set up your company profile, add your company logo, and more
                          </div>
                          <a href="./#" class="inline-flex items-center space-x-3 rtl:space-x-reverse text-sm capitalize font-medium text-slate-600
                                dark:text-slate-300">
                            <span>Chnage Settings</span>
                            <iconify-icon icon="heroicons:arrow-right"></iconify-icon>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-body p-6">
                        <div class="space-y-6">
                          <div class="flex space-x-3 items-center rtl:space-x-reverse">
                            <div class="flex-none h-8 w-8 rounded-full bg-primary-500 text-slate-300 flex flex-col items-center justify-center text-lg">
                              <iconify-icon icon="heroicons:credit-card"></iconify-icon>
                            </div>
                            <div class="flex-1 text-base text-slate-900 dark:text-white font-medium">
                              Payment Settings
                            </div>
                          </div>
                          <div class="text-slate-600 dark:text-slate-300 text-sm">
                            Connect your bank account to your company profile, and more
                          </div>
                          <a href="./#" class="inline-flex items-center space-x-3 rtl:space-x-reverse text-sm capitalize font-medium text-slate-600
                                dark:text-slate-300">
                            <span>Chnage Settings</span>
                            <iconify-icon icon="heroicons:arrow-right"></iconify-icon>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-body p-6">
                        <div class="space-y-6">
                          <div class="flex space-x-3 rtl:space-x-reverse items-center">
                            <div class="flex-none h-8 w-8 rounded-full bg-danger-500 text-white flex flex-col items-center justify-center text-lg">
                              <iconify-icon icon="solar:logout-2-bold"></iconify-icon>
                            </div>
                            <div class="flex-1 text-base text-slate-900 dark:text-white font-medium">
                              Logout
                            </div>
                          </div>
                          <div class="text-slate-600 dark:text-slate-300 text-sm">
                            Yakin keluar ? pas balik harus masuk akun lagi, ya.
                          </div>
                          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="block px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-600 dark:hover:text-white font-inter text-sm text-slate-600 dark:text-white font-normal">
                            @csrf
                            <button type="submit">
                                <span class="font-Inter items-center justify-center" style="text-align:'center'; color:red">Logout</span>
                            </button>
                        </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
    @endsection
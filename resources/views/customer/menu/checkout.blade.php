@extends('customer.template')
@section('main-content')
<div class="card xl:col-span-3 rounded-md bg-white dark:bg-slate-800 lg:h-full shadow-base">
                    <div class="card-body flex flex-col p-6">
                      <div class="card-text h-full space-y-1">
                      <div class="grid lg:grid-cols-2 space-y-2 md:grid-cols-2 grid-cols-1 gap-4">
                        <div class="input-area mt-2 mb-2 space-y-1">
                            <div class="flex-1">
                                <div class="card-title text-slate-900 dark:text-white">Deskripsi Pesanan</div>
                            </div>
                          <div class="relative">
                            <table  style="b width:100%">
                            <tr>
                                <td style="width:28%">Penerima Jasa</td>
                                <td style="width:1%">:</td>
                                <td style="width:79%">DADANG KURNIA MEGA</td>
                            </tr>
                            <tr>
                                <td style="width:28%">Nama project</td>
                                <td style="width:1%">:</td>
                                <td style="width:79%">FASHION HITS</td>
                            </tr>
                            <tr>
                                <td style="width:28%">Deskripsi</td>
                                <td style="width:1%">:</td>
                                <td style="width:79%">Website CEO dan Responsive</td>
                            </tr>
                            <tr>
                                <td style=" width:28%">Tenggat Waktu</td>
                                <td style=" width:1%">:</td>
                                <td style=" width:79%">20-06-2023</td>
                            </tr>
                            </table>
                            </div>
                      </div>
                        <div class="input-area space-y-1">
                            <div class="flex-1">
                                <div class="card-title text-slate-900 dark:text-white">Ringkasan Harga</div>
                            </div>
                          <div class="relative">
                            <table  style="b width:100%">
                            <tr>
                                <td style="width:28%">Harga</td>
                                <td style="width:1%">:</td>
                                <td style="width:79%">Rp5,000,000</td>
                            </tr>
                            <tr>
                                <td style="width:28%">Biaya Admin (7%)</td>
                                <td style="width:1%">:</td>
                                <td style="width:79%">Rp90,000</td>
                            </tr>
                            <tr>
                                <td style="width:28%">Biaya Aplikasi</td>
                                <td style="width:1%">:</td>
                                <td style="width:79%">Rp3,000</td>
                            </tr>
                            <tr>
                                <td style=" width:28%" class="font-bold text-base">Total Harga</td>
                                <td style=" width:1%">:</td>
                                <td style=" width:79%" class="font-bold text-base">Rp5,093,000</td>
                            </tr>
                            </table>
                            </div>
                      </div>
                        </div>
                        </div>
                    </div>
                  </div>
                  
                  <!-- metode pembayaran -->
                  <div class="card xl:col-span-2 rounded-md bg-white dark:bg-slate-800 lg:h-full shadow-base">
                    <div class="card-body flex flex-col p-6">
                      <header class="flex mb-5 items-center border-b border-slate-100 dark:border-slate-700 pb-5 -mx-6 px-6">
                        <div class="flex-1">
                          <div class="card-title text-slate-900 dark:text-white">Pilih Metode Pembayaran</div>
                        </div>
                      </header>
                      <div class="card-text h-full space-y-4">
                        <div class="primary-radio">
                            <label class="flex items-center cursor-pointer ">
                                <img src="{{url('/assets/images/logo/BNI_logo.png')}}" alt="user" class="block w-20 h-auto object-cover pr-3 border hover:border-white border-transparent">
                                <span class="text-slate-900 w-full font-Inter font-normal text-base leading-6 capitalize dark:text-slate-300">BNI Virtual Account</span>
                                <input type="radio" class="hidden" name="arrayRadio[]" value="BNI">
                                <span class="flex-none bg-white dark:bg-slate-500 rounded-full border inline-flex relative transition-all
                                duration-150 h-[16px] w-[16px] border-slate-400 dark:border-slate-600 dark:ring-slate-700"></span>
                            </label>
                          </div>
                          <div class="primary-radio">
                            <label class="flex items-center cursor-pointer ">
                                <img src="{{url('/assets/images/logo/visa.svg')}}" alt="user" class="block w-20 h-auto object-cover pr-3 border hover:border-white border-transparent">
                                <span class="text-slate-900 w-full font-Inter font-normal text-base leading-6 capitalize dark:text-slate-300">Visa Virtual Account</span>
                              <input type="radio" class="hidden" name="arrayRadio[]" value="VISA">
                              <span class="flex-none bg-white dark:bg-slate-500 rounded-full border inline-flex  relative transition-all
                                                            duration-150 h-[16px] w-[16px] border-slate-400 dark:border-slate-600 dark:ring-slate-700"></span>
                            </label>
                          </div>
                          <div class="primary-radio">
                            <label class="flex items-center cursor-pointer  ">
                                <img src="{{url('/assets/images/logo/qris.png')}}" alt="user" class="block w-20 h-auto object-cover pr-3 border hover:border-white border-transparent">
                                <span class="text-slate-900 w-full font-Inter font-normal text-base leading-6 capitalize dark:text-slate-300">QRIS Code</span>
                              <input type="radio" class="hidden" name="arrayRadio[]" value="QRIS">
                              <span class="flex-none bg-white dark:bg-slate-500 rounded-full border inline-flex  relative transition-all duration-150 h-[16px] w-[16px] border-slate-400 dark:border-slate-600 dark:ring-slate-700"></span>
                            </label>
                          </div>
                        </div>
                    </div>
                  </div>

                  <!-- novirtual -->
                  <div class="card xl:col-span-2 rounded-md bg-white dark:bg-slate-800 lg:h-full shadow-base">
                    <div class="card-body flex flex-col p-6">
                      <header class="flex mb-5 pb-5 -mx-6 px-6 items-center  justify-center text-center border-b border-slate-100 dark:border-slate-700 ">
                        <div class="flex">
                          <img src="{{url('/assets/images/logo/BNI_logo.png')}}" alt="user" class="block w-20 h-auto pr-3 border hover:border-white border-transparent justify-center place-content-center">
                          <span class="text-slate-900 w-full font-Inter font-bold text-xl leading-6 capitalize dark:text-slate-300">BNI Virtual Account</span>
                        </div>
                      </header>
                      <span style="color: #c53030;" class="justify-center place-content-center text-center  bg-danger-300 text-slate-900 w-full font-Inter font-bold text-base rounded-xl space-y-8 dark:text-slate-300">Selesaikan Pembayaran Dalam 00:59:21</span>
                      <div class="card-text h-full text-center mt-4">
                          <div class="grid lg:grid-cols-3 space-y-1 md:grid-cols-3 grid-cols-1 gap-4">
                        <div class="input-area mt-2">
                          <label for="textFormatter" class="form-label">No Virtual Account</label>
                          <div class="relative">
                            <span class="text-base font-Inter font-bold dark:text-slate-200 text-slate-900 mt-2 inline-block">09723481723</span>  
                        </div>
                        </div>
                        <div class="input-area">
                          <label for="textFormatter" class="form-label">Nama Virtual Account</label>
                          <div class="relative">
                            <span class="text-base font-Inter font-bold dark:text-slate-200 text-slate-900 mt-2 inline-block">{{Auth::User()->name}}</span>
                          </div>
                        </div>
                        <div class="input-area">
                          <label for="textFormatter" class="form-label">Nominal yang akan dibayarkan</label>
                          <div class="relative">
                            <span class="text-base font-Inter font-bold dark:text-slate-200 text-slate-900 mt-2 inline-block">RP5,093,000</span>  
                        </div>
                        </div>
                    </div>
                    </div>
                  </div>
                </div>
                  <button class="flex w-full mt-5 items-center justify-center btn-primary bg-white btn-sm btn">
                        <div class="flex-1 mx-8 text-base text-slate-900 text-white font-medium">Konfirmasi 
                    </div>
                  </button>
<!-- </div> -->
@endsection
@extends('customer.template')
@section('main-content')
<div class="card xl:col-span-2 rounded-md bg-white dark:bg-slate-800 lg:h-full shadow-base">
                    <div class="card-body flex flex-col p-6">
                      <header class="flex space-x-3 mb-5 items-center border-b border-slate-100 dark:border-slate-700 pb-5 -mx-6 px-6">
                      <a href="{{route('customer.menu.pemesanan')}}" class="inline-flex items-center space-x-1 rtl:space-x-reverse text-sm capitalize font-medium text-slate-600
                                dark:text-slate-300">
                            <iconify-icon icon="heroicons:arrow-left"></iconify-icon>
                            <span class="">Kembali </span>
                          </a>  
                      <div class="flex-1">
                          <div class="card-title text-slate-900 dark:text-white">Formulir Pembuatan projek</div>
                        </div>
                      </header>
                      <div class="card-text h-full space-y-3 mb-3">
                        <div class="input-area">
                          <label for="textFormatter" class="form-label">Nama projek</label>
                          <div class="relative">
                            <input id="nama_projek" type="text" class="form-control" placeholder="Apa Nama projek Anda ?">
                            <!-- <span class="text-xs font-Inter font-normal text-slate-400 mt-2 inline-block">We will convert your text to lowercase instantly</span> -->
                            <span class="block"></span>  
                        </div>
                        </div>
                      </div>

                        <div class="card-text h-full space-y-8 mb-3">
                        <div class="input-area">
                          <label for="textFormatter" class="form-label">Kategori</label>
                          <div class="relative">
                            <select name="kategori" id="kategori" class="form-control w-full mt-2">
                              <option selected="Selected" disabled="disabled" value="none" class="py-1 inline-block font-Inter font-normal text-sm text-slate-600">Select an option</option>
                              <option value="WEBSITE" class="py-1 inline-block font-Inter font-normal text-sm text-slate-600">WEBSITE</option>
                              <option value="DESKTOP" class="py-1 inline-block font-Inter font-normal text-sm text-slate-600">DESKTOP</option>
                              <option value="MOBILE" class="py-1 inline-block font-Inter font-normal text-sm text-slate-600">MOBILE</option>
                              <option value="DS/ML/AI" class="py-1 inline-block font-Inter font-normal text-sm text-slate-600">DS/ML/AI</option>
                              <option value="UI/UX" class="py-1 inline-block font-Inter font-normal text-sm text-slate-600">UI/UX</option>
                            </select>   
                        </div>
                        </div>
                      </div>
                      <div class="py-[18px] px-6 font-normal space-y-8 font-Inter text-sm rounded-md bg-info-500 bg-opacity-[14%] text-info-800">
                            <div class="flex items-start space-x-3 rtl:space-x-reverse">
                              <div class="flex-1 text-left">
                                Harga Awal Akan Ditampilkan ketika anda memilih Kategori, harga bisa anda tentukan sendiri tapi harus diatas harga awal, anda bisa negosiasi harga dengan mentor nantinya
                              </div>
                            </div>
                          </div>
                      <div class="card-text h-full space-y-8 mb-3">
                        <div class="input-area">
                          <label for="textFormatter" class="form-label">harga</label>
                          <div class="relative">
                            <input id="harga" type="tel" min="" class="form-control !pl-9" step="0.01" placeholder="harga" >
                            <span class="absolute left-2 top-1/2 -translate-y-1/2 text-base text-slate-500">Rp</span>
                          </div>
                          <span id="harga-error" class="error" style="display: none;">Angka tidak boleh kurang dari harga yang telah ditentukan.</span>
                          </div>
                        </div>
                      <div class="card-text h-full space-y-8 mb-3">
                        <div class="input-area">
                          <label for="textFormatter" class="form-label">Deskripsi projek</label>
                          <div class="relative">
                            <!-- <input id="nama_projek" type="text" class="form-control" placeholder="Apa Nama projek Anda ?"> -->
                            <textarea id="DrowsTextarea" class="form-control" rows="5" placeholder="Text Area"></textarea>
                            <!-- <span class="text-xs font-Inter font-normal text-slate-400 mt-2 inline-block">We will convert your text to lowercase instantly</span> -->
                          </div>
                        </div>
                        </div>
                    <button class="flex w-full items-center justify-center btn-success bg-white btn-sm btn">
                              <div class="flex-1 mx-8 text-base text-slate-900 text-black font-medium">
                                Buat Pesanan
                              </div>
                        </button>
                    </div>
                  </div>
@endsection
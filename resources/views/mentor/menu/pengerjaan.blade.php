@extends('mentor.template')
@section('main-content')
<div class="card xl:col-span-2 rounded-md bg-white dark:bg-slate-800 lg:h-full shadow-base">
                    <div class="card-body flex flex-col p-6">
                      <header class="flex space-x-3 mb-5 items-center border-b border-slate-100 dark:border-slate-700 pb-5 -mx-6 px-6">
                      <a href="{{route('mentor.menu.pemesanan')}}" class="inline-flex items-center space-x-1 rtl:space-x-reverse text-sm capitalize font-medium text-slate-600
                                dark:text-slate-300">
                            <iconify-icon icon="heroicons:arrow-left"></iconify-icon>
                            <span class="">Kembali </span>
                          </a>  
                      <div class="flex-1">
                          <div class="card-title text-slate-900 dark:text-white">Upload Projek</div>
                        </div>
                      </header>

                      <div class="py-[18px] px-6 font-normal space-y-8 font-Inter text-sm rounded-md bg-warning-500 bg-opacity-[14%] text-warning-500">
                            <div class="flex items-start space-x-3 rtl:space-x-reverse">
                              <div class="flex-1 text-center">
                                Pesanan harus diselesaikan minimal 2 hari sebelum tenggat waktu untuk diperiksa oleh pegawai
                              </div>
                            </div>
                          </div>
                        <div class="card-text h-full mt-8 space-y-8 mb-3">
                        <div class="input-area">
                          <label for="textFormatter" class="form-label">Ubah Status</label>
                          <div class="relative">
                            <select name="basicSelect" id="basicSelect" class="form-control w-full mt-2">
                              <option selected="Selected" disabled="disabled" value="none" class="py-1 inline-block font-Inter font-normal text-sm text-slate-600">Select an option</option>
                              <option value="option1" class="py-1 inline-block font-Inter font-normal text-sm text-slate-600">Di Periksa</option>
                            </select>   
                        </div>
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
                      <div class="card-text h-full space-y-9 mb-8">
                        <div class="input-area ">
                          <label for="textFormatter" class="form-label">Lampiran</label>
                          <div class="relative">
                            <div class="card-text h-full space-y-6">
                                <div class="w-full  text-center border-dashed border border-secondary-500 rounded-md py-[52px] flex justify-center items-center">
                                <form action="/" role="presentation" tabindex="0" class="dropzone border-none dark:bg-slate-800" id="myUploader">
                                    <div class="dz-default dz-message">
                                    <button class="dz-button" type="button">
                                        <img src="assets/images/svg/upload.svg" alt="" class="mx-auto mb-4">
                                        <p class="text-sm text-slate-500 dark:text-slate-300">Drop files here or click to upload.</p>
                                    </button>
                                    </div>
                                </form>
                                </div>
                            </div>
                           </div>
                        </div>
                      </div>
                    <button class="flex w-full items-center justify-center btn-success bg-white btn-sm btn">
                              <div class="flex-1 mx-8 text-base text-slate-900 text-black font-medium">
                                Simpan
                              </div>
                        </button>
                    </div>
                  </div>
@endsection
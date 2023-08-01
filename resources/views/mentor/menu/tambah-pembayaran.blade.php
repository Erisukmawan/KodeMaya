@extends('mentor.template')
@section('main-content')
<div class="card xl:col-span-2 rounded-md bg-white dark:bg-slate-800 lg:h-full shadow-base">
    <div class="card-body flex flex-col p-6">
        <header
            class="flex space-x-3 mb-5 items-center border-b border-slate-100 dark:border-slate-700 pb-5 -mx-6 px-6">
            <a href="{{route('mentor.menu.pembayaran')}}" class="inline-flex items-center space-x-1 rtl:space-x-reverse text-sm capitalize font-medium text-slate-600
                                dark:text-slate-300">
                <iconify-icon icon="heroicons:arrow-left"></iconify-icon>
                <span class="">Kembali </span>
            </a>
            <div class="flex-1">
                <div class="card-title text-slate-900 dark:text-white">Tambah Pembayaran</div>
            </div>
        </header>

        <main class="card-body p-6">
            <h4 class="text-slate-900 dark:text-white text-xl mb-2">#IDPemesanan</h4>
            <div class="grid lg:grid-cols-2 grid-cols-1  gap-2">
                <div class="grid lg:grid-cols-2 grid-cols-1 gap-4">
                    
                    <div class="fromGroup">
                        <label class="block capitalize form-label  ">Nama Customer</label>
                        <div class="relative ">
                            <input type="text" class="form-control py-2 " placeholder="Add your name">
                            <div
                                class="flex text-xl absolute ltr:right-[14px] rtl:left-[14px] top-1/2 -translate-y-1/2  space-x-1 rtl:space-x-reverse">
                            </div>
                        </div>
                    </div>
                    <div class="fromGroup">
                        <label class="block capitalize form-label  ">Telephone</label>
                        <div class="relative ">
                            <input type="text" class="form-control py-2 " placeholder="Add your phone">
                            <div
                                class="flex text-xl absolute ltr:right-[14px] rtl:left-[14px] top-1/2 -translate-y-1/2  space-x-1 rtl:space-x-reverse">
                            </div>
                        </div>
                    </div>
                    <div class="lg:col-span-2 col-span-1">
                        <div class="fromGroup       ">
                            <label class="block capitalize form-label  ">Email</label>
                            <div class="relative ">
                                <input type="email" class="form-control py-2 " value="">
                                <div
                                    class="flex text-xl absolute ltr:right-[14px] rtl:left-[14px] top-1/2 -translate-y-1/2  space-x-1 rtl:space-x-reverse">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lg:col-span-2 col-span-1">
                        <div class="fromGroup       ">
                            <label class="block capitalize form-label  ">Alamat</label>
                            <div class="relative ">
                                <textarea class="  form-control py-2   " placeholder="alamat" rows="3"></textarea>
                                <div
                                    class="flex text-xl absolute ltr:right-[14px] rtl:left-[14px] top-1/2 -translate-y-1/2  space-x-1 rtl:space-x-reverse">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid lg:grid-col-2 grid-cols-1 gap-5">
                    <div class="lg:col-span-2 col-span-1 text-slate-900 text-base dark:text-slate-300 font-medium">Owner
                        info</div>
                    <div class="fromGroup       ">
                        <label class="block capitalize form-label  ">Nama Anda</label>
                        <div class="relative ">
                            <input type="text" class="form-control py-2 " value="{{ Auth::guard('webmentor')->user()->nama }}">
                            <div
                                class="flex text-xl absolute ltr:right-[14px] rtl:left-[14px] top-1/2 -translate-y-1/2  space-x-1 rtl:space-x-reverse">
                            </div>
                        </div>
                    </div>
                    <div class="fromGroup       ">
                        <label class="block capitalize form-label  ">Phone</label>
                        <div class="relative ">
                            <input type="text" class="form-control py-2 " placeholder="Add your phone">
                            <div
                                class="flex text-xl absolute ltr:right-[14px] rtl:left-[14px] top-1/2 -translate-y-1/2  space-x-1 rtl:space-x-reverse">
                            </div>
                        </div>
                    </div>
                    <div class="lg:col-span-2 col-span-1">
                        <div class="fromGroup       ">
                            <label class="block capitalize form-label  ">Email</label>
                            <div class="relative ">
                                <input type="email" class="form-control py-2 " value="{{ Auth::guard('webmentor')->user()->email }}">
                                <div
                                    class="flex text-xl absolute ltr:right-[14px] rtl:left-[14px] top-1/2 -translate-y-1/2  space-x-1 rtl:space-x-reverse">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lg:col-span-2 col-span-1">
                        <div class="fromGroup       ">
                            <label class="block capitalize form-label  ">Alamat</label>
                            <div class="relative ">
                                <textarea class="  form-control py-2   " placeholder="alamat" rows="3"></textarea>
                                <div
                                    class="flex text-xl absolute ltr:right-[14px] rtl:left-[14px] top-1/2 -translate-y-1/2  space-x-1 rtl:space-x-reverse">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="my-6">
                <div>
                    <div class="bg-slate-50 dark:bg-slate-800 -mx-6 px-6 py-6">
                        <div class="mb-6 text-slate-600 dark:text-slate-300 text-xs font-medium uppercase">Detail Pembayaran</div>
                        <div>
                                <div class="lg:grid-cols-3 md:grid-cols-2 grid-cols-1 grid gap-5 mb-5 last:mb-0">
                                    <div class="fromGroup       ">
                                        <label for="name0" class="block capitalize form-label  ">Nama projek</label>
                                        <div class="relative ">
                                            <input type="text" name="test[0].firstName" class="  form-control py-2   "
                                                placeholder="Nama projek" id="name0">
                                            <div
                                                class="flex text-xl absolute ltr:right-[14px] rtl:left-[14px] top-1/2 -translate-y-1/2  space-x-1 rtl:space-x-reverse">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="fromGroup       ">
                                        <label for="name20" class="block capitalize form-label  ">Deskripsi projek</label>
                                        <div class="relative ">
                                            <input type="text" name="test[0].lastName" class="  form-control py-2   "
                                                placeholder="Deskripsi projek" id="name20">
                                            <div
                                                class="flex text-xl absolute ltr:right-[14px] rtl:left-[14px] top-1/2 -translate-y-1/2  space-x-1 rtl:space-x-reverse">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex justify-between items-end space-x-5">
                                        <div class="flex-1">
                                            <div class="fromGroup       ">
                                                <label for="name30" class="block capitalize form-label  ">Tenggat Waktu</label>
                                                <div class="relative ">
                                                    <input type="date" name="test[0].phone"
                                                        class="  form-control py-2   " placeholder="Phone" id="name30">
                                                    <div
                                                        class="flex text-xl absolute ltr:right-[14px] rtl:left-[14px] top-1/2 -translate-y-1/2  space-x-1 rtl:space-x-reverse">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            <label for="textFormatter" class="form-label">Harga</label>
            <div class="relative space-y-6">
                <input id="nama_projek" type="number" class="form-control" placeholder="">
                <span class="block"></span>
            </div>
            <div class="ltr:text-right rtl:text-left space-x-3 rtl:space-x-reverse">
                <button type="button" class=" btn inline-flex justify-center btn-dark">
                    <span class="flex items-center">
                        <span>Save</span>
                    </span>
                </button>
            </div>
        </main>
    </div>
</div>
@endsection
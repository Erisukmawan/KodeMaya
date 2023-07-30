@extends('customer/template')
@section('content')
<div class="space-y-3 mb-2">
    <div class="bg-no-repeat  bg-cover bg-center px-5 py-8 rounded-xl relative flex items-center"
        style="background-image: url({{url('assets/images/all-img/widget-bg-7.png')}})">
        <div class="flex-1">
            <div class="text-xl font-medium text-white text-center justify-center  mb-2">
                <span class="block font-normal">Selamat Datang, {{ Auth::user()->name }}</span>
                <span class="block text-sm">Mari Buat Project Bersama Kami</span>
                <!-- </div> -->
            </div>
        </div>
    </div>
</div>
<div class="card p-6">
    <div class="grid grid-cols-8 gap-5">
        <div class="xl:col-span-6 col-span-12">
            <div class="grid md:grid-cols-3 sm:grid-cols-2 grid-cols-1 gap-4">

                <!-- BEGIN: Group Chart5 -->


                <div class=" bg-info-500 rounded-md p-4 bg-opacity-[0.15] dark:bg-opacity-50 text-center">
                    <div
                        class="text-info-500 mx-auto h-10 w-10 flex flex-col items-center justify-center rounded-full bg-white text-2xl mb-4">
                        <iconify-icon icon=heroicons-outline:menu-alt-1></iconify-icon>
                    </div>
                    <span class="block text-sm text-slate-600 font-medium dark:text-white mb-1">
                        Total Pemesanan
                    </span>
                    <span class="block mb- text-2xl text-slate-900 dark:text-white font-medium">
                        64
                    </span>
                </div>

                <div class=" bg-success-500 rounded-md p-4 bg-opacity-[0.15] dark:bg-opacity-50 text-center">
                    <div
                        class="text-success-500 mx-auto h-10 w-10 flex flex-col items-center justify-center rounded-full bg-white text-2xl mb-4">
                        <iconify-icon icon=heroicons-outline:chart-pie></iconify-icon>
                    </div>
                    <span class="block text-sm text-slate-600 font-medium dark:text-white mb-1">
                        Project Selesai
                    </span>
                    <span class="block mb- text-2xl text-slate-900 dark:text-white font-medium">
                        45
                    </span>
                </div>

                <div class=" bg-warning-500 rounded-md p-4 bg-opacity-[0.15] dark:bg-opacity-50 text-center">
                    <div
                        class="text-warning-500 mx-auto h-10 w-10 flex flex-col items-center justify-center rounded-full bg-white text-2xl mb-4">
                        <iconify-icon icon=heroicons-outline:clock></iconify-icon>
                    </div>
                    <span class="block text-sm text-slate-600 font-medium dark:text-white mb-1">
                        Project Di Proses
                    </span>
                    <span class="block mb- text-2xl text-slate-900 dark:text-white font-medium">
                        190
                    </span>
                </div>

                <!-- END: Group Chart5 -->
            </div>
        </div>
    </div>
</div>
<div class="mb-10 mt-7 p-4 relative text-center rounded-2xl">
    <div class="flex max-w-[300px] mx-auto">
        <img src="{{url('assets/images/svg/sapa.svg')}}" alt="" class="flex-1 w-8 relative mt-[73px]">
        <div class="mt-2">
            <div class="widget-title">No Pembayaran #200</div>
            <div class="text-sm font-bold">
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
</div>
@endsection
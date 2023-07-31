@extends('financial.template')
@section('main-content')
<div class="card xl:col-span-2 rounded-md bg-white dark:bg-slate-800 lg:h-full shadow-base">
    <div class="card-body flex flex-col p-6">
        <header
            class="flex space-x-3 mb-5 items-center border-b border-slate-100 dark:border-slate-700 pb-5 -mx-6 px-6">
            <a href="{{route('financial.menu.review')}}" class="inline-flex items-center space-x-1 rtl:space-x-reverse text-sm capitalize font-medium text-slate-600
                                dark:text-slate-300">
                <iconify-icon icon="heroicons:arrow-left"></iconify-icon>
                <span class="">Kembali </span>
            </a>
            <div class="flex-1">
                <div class="card-title text-slate-900 dark:text-white">Review Pesanan</div>
            </div>
            <div class="flex-none">
                <a href="{{route('customer.menu.nego')}}"><button class="rounded-xl p-2 hover:bg-primary-600 w-30 bg-success-600 text-white dark:text-white">
                    <iconify-icon icon="pajamas:review-checkmark"></iconify-icon>
                    <span class="font-normal text-sm p-1">Pengiriman Pesanan</span>
                </button>
                </a>
            </div>
        </header>
        <div class="card-text h-full space-y-">
            <div class="grid lg:grid-cols-2 space-y-2 md:grid-cols-2 grid-cols-2 gap-4">
                <!-- <div class="flex card-text h-full space-y-4"> -->
                <div class="input-area space-y-1">
                    <label for="textFormatter" class="form-label text-slate-400">Nama Project</label>
                    <div class="relative">
                        <span
                            class="text-normal font-Inter font-normal text-slate-800 mt-2 dark:text-white inline-block">Aplikasi
                            Penjualan Barang</span>
                    </div>
                </div>
                <!-- <div class="flex-1"> -->
                <div class="input-area relative">
                    <label for="textFormatter" class="form-label text-slate-400">Status Pesanan</label>
                    <div class="relative">
                        <span
                            class="text-normal font-Inter font-normal text-slate-800 mt-2 dark:text-white inline-block">Di Periksa</span>
                    </div>
                </div>
                <div class="flex-none input-area space-y-1">
                    <label for="textFormatter" class="form-label text-slate-400">Nama Mentor</label>
                    <div class="relative">
                        <span
                            class="text-normal font-Inter font-normal text-slate-800 mt-2 dark:text-white inline-block">Bapaknya
                            dimana</span>
                    </div>
                </div>
                <div class="flex-none input-area space-y-1">
                    <label for="textFormatter" class="form-label text-slate-400">Tenggat Project</label>
                    <div class="relative">
                        <span
                            class="text-normal font-Inter font-normal text-slate-800 mt-2 dark:text-white inline-block">20-08-2023</span>
                    </div>
                </div>
                <div class="input-area space-y-1">
                    <label for="textFormatter" class="form-label text-slate-400">Tipe Project</label>
                    <div class="relative">
                        <span
                            class="text-normal font-Inter font-normal text-slate-800 mt-2 dark:text-white inline-block">Website</span>
                    </div>
                </div>
                <div class="input-area space-y-1">
                    <label for="textFormatter" class="form-label text-slate-400">Tanggal Pembuatan</label>
                    <div class="relative">
                        <span
                            class="text-normal font-Inter font-normal text-slate-800 mt-2 dark:text-white inline-block">20-08-2023</span>
                    </div>
                </div>
                <div class="input-area space-y-1">
                    <label for="textFormatter" class="form-label text-slate-400">Total Harga</label>
                    <div class="relative">
                        <span
                            class="text-normal font-Inter font-normal text-slate-800 mt-2 dark:text-white inline-block">RP2000000</span>
                    </div>
                </div>
                <div class="input-area space-y-1">
                    <label for="textFormatter" class="form-label text-slate-400">Status Kontrak</label>
                    <div class="relative">
                        <span
                            class="text-normal font-Inter font-normal text-slate-800 mt-2 dark:text-white inline-block">Disetujui</span>
                    </div>
                </div>
                <div class="input-area space-y-1">
                    <label for="textFormatter" class="form-label text-slate-400">Status Pembayaran</label>
                    <div class="relative">
                        <span
                            class="text-normal font-Inter font-normal text-slate-800 mt-2 dark:text-white inline-block">Paid</span>
                    </div>
                </div>
            </div>
            <div class="input-area mt-5">
                <label for="textFormatter" class="form-label text-slate-400">Deskripsi project</label>
                <div class="relative">
                    <span
                        class="text-normal font-Inter font-normal text-slate-800 mt-2  dark:text-white inline-block">Lorem
                        ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,
                        molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum
                        numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium
                        optio, eaque rerum! Provident similique accusantium nemo autem. Veritatis
                        obcaecati tenetur iure eius earum ut molestias architecto voluptate aliquam
                        nihil, eveniet aliquid culpa officia aut! Impedit sit sunt quaerat, odit,
                        tenetur error, harum nesciunt ipsum debitis quas aliquid. Reprehenderit,
                        quia. Quo neque error repudiandae fuga? Ipsa laudantium molestias eos
                        sapiente officiis modi at sunt excepturi expedita sint? Sed quibusdam
                        recusandae alias error harum maxime adipisci amet laborum. Perspiciatis
                        minima nesciunt dolorem! Officiis iure rerum voluptates a cumque velit
                        quibusdam sed amet tempora. Sit laborum ab, eius fugit doloribus tenetur
                        fugiat, temporibus enim commodi iusto libero magni deleniti quod quam
                        consequuntur! Commodi minima excepturi repudiandae velit hic maxime
                        doloremque. Quaerat provident commodi consectetur veniam similique ad
                        earum omnis ipsum saepe, voluptas</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- </div> -->
@endsection
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
                          <div class="card-title text-slate-900 dark:text-white">Detail Kontrak #KT2112</div>
                        </div>
                      </header>
                      <div class="card-text h-full space-y-">
                      <div class="grid lg:grid-cols-2 space-y-2 md:grid-cols-2 grid-cols-2 gap-4">
                      <!-- <div class="flex card-text h-full space-y-4"> -->
                        <div class="input-area space-y-1">
                          <label for="textFormatter" class="form-label text-slate-400">Nama Project</label>
                          <div class="relative">
                            <span class="text-normal font-Inter font-normal text-slate-800 mt-2 dark:text-white inline-block">Aplikasi Penjualan Barang</span>
                          </div>
                        </div>
                            <!-- <div class="flex-1"> -->
                        <div class="input-area relative">
                          <label for="textFormatter" class="form-label text-slate-400">Status Project</label>
                          <div class="relative">
                            <span class="text-normal font-Inter font-normal text-slate-800 mt-2 dark:text-white inline-block">BELUM DISETUJUI</span>
                          </div>
                        </div>
                        <div class="flex-none input-area space-y-1">
                          <label for="textFormatter" class="form-label text-slate-400">Nama Mentor</label>
                          <div class="relative">
                            <span class="text-normal font-Inter font-normal text-slate-800 mt-2 dark:text-white inline-block">Bapaknya dimana</span>
                          </div>
                        </div>
                        <div class="flex-none input-area space-y-1">
                          <label for="textFormatter" class="form-label text-slate-400">Tenggat Project</label>
                          <div class="relative">
                            <span class="text-normal font-Inter font-normal text-slate-800 mt-2 dark:text-white inline-block">20-08-2023</span>
                          </div>
                        </div>
                        <div class="input-area space-y-1">
                          <label for="textFormatter" class="form-label text-slate-400">Tipe Project</label>
                          <div class="relative">
                            <span class="text-normal font-Inter font-normal text-slate-800 mt-2 dark:text-white inline-block">Website</span>
                          </div>
                        </div>
                        <div class="input-area space-y-1">
                          <label for="textFormatter" class="form-label text-slate-400">Tanggal Pembuatan</label>
                          <div class="relative">
                            <span class="text-normal font-Inter font-normal text-slate-800 mt-2 dark:text-white inline-block">20-08-2023</span>
                          </div>
                        </div>
                      </div>
                      <div class="input-area mt-5">
                          <label for="textFormatter" class="form-label text-slate-400">Deskripsi Project</label>
                          <div class="relative">
                            <span class="text-normal dark:text-white font-Inter font-normal text-slate-800 mt-2 inline-block">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,
                                molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum
                                numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium
                                optio, eaque rerum! Provident similique accusantium nemo autem. Veritatis
                                obcaecati tenetur iure eius earum ut molestias architecto voluptate aliquam
                                nihil, eveniet aliquid culpa officia aut! Impedit sit sunt quaerat, odit,
                                tenetur error, harum nesciunt ipsum debitis quas aliquid. Reprehenderit,
                                quia.</span>
                          </div>
                        </div>
                        <div class="input-area mt-5">
                          <label for="textFormatter" class="form-label text-slate-400">Syarat dan Ketentuan</label>
                          <div class="relative">
                            <span class="text-normal pl-8 dark:text-white font-Inter font-normal text-slate-800 mt-1 inline-block">
                                <ol type="1" >
                                    <li type="1">Deskripsi Layanan <span class="text-normal pl-1 dark:text-white font-Inter font-normal text-slate-800 mb-2 block">Kami adalah penyedia jasa pembuatan projek yang ditujukan untuk memenuhi kebutuhan bisnis Anda.</span></li>
                                    <li type="1">Harga dan Pembayaran <span class="text-normal pl-1 dark:text-white font-Inter font-normal text-slate-800 mb-2 block">Harga yang tertera di website kami belum termasuk pajak dan biaya tambahan lainnya. Pembayaran harus dilakukan sebelum layanan kami diberikan.</span></li>
                                    <li type="1">Kebijakan Pengembalian Dana <span class="text-normal pl-1 dark:text-white font-Inter font-normal text-slate-800 mb-2 block">Kami tidak dapat menerima pengembalian dana setelah layanan kami diberikan, kecuali terdapat kesalahan atau ketidaksesuaian mendasar dengan kesepakatan awal.</span></li>
                                    <li type="1">Kebijakan Privasi <span class="text-normal pl-1 dark:text-white font-Inter font-normal text-slate-800 mb-2 block">Kami sangat menghargai dan menjaga kerahasiaan data pribadi Anda. Informasi yang Anda berikan kepada kami akan kami perlakukan dengan ketat sesuai dengan Kebijakan Privasi kami yang terpisah.</span></li>
                                    <li type="1">Kebijakan Penggunaan Situs Web <span class="text-normal pl-1 dark:text-white font-Inter font-normal text-slate-800 mb-2 block">Anda tidak diperbolehkan menggunakan situs web kami untuk tujuan ilegal atau melanggar hukum. Anda bertanggung jawab penuh atas setiap konten yang Anda unggah atau bagikan melalui platform kami.</span></li>
                                    <li type="1">Kebijakan Konten <span class="text-normal pl-1 dark:text-white font-Inter font-normal text-slate-800 mb-2 block">Konten yang Anda berikan harus sesuai dengan hukum dan tidak boleh melanggar hak cipta atau hak milik intelektual milik orang lain. Kami berhak untuk menghapus konten yang melanggar Kebijakan Konten kami.</span></li>
                                    <li type="1">Kebijakan Keamanan <span class="text-normal pl-1 dark:text-white font-Inter font-normal text-slate-800 mb-2 block">Kami akan menjaga keamanan data Anda dan mengambil langkah-langkah yang wajar untuk melindunginya dari akses atau penggunaan yang tidak sah.</span></li>
                                    <li type="1">Perubahan pada Syarat dan Ketentuan <span class="text-normal pl-1 dark:text-white font-Inter font-normal text-slate-800 mb-2 block">Kami berhak untuk mengubah Syarat dan Ketentuan ini dari waktu ke waktu tanpa pemberitahuan sebelumnya. Perubahan akan berlaku segera setelah dipublikasikan di situs web kami.<span></li>
                                </ol>
                            </span>
                            <span class="text-normal pl-1 dark:text-white font-Inter font-normal text-slate-800 mb-4 block">Dengan menggunakan layanan kami, Anda dianggap telah membaca, memahami, dan menyetujui semua ketentuan dalam Syarat dan Ketentuan ini. Jika Anda tidak setuju dengan salah satu bagian dari ketentuan ini, maka Anda tidak diperkenankan menggunakan layanan kami.</span>
                          </div>
                        </div>
                        <button class="flex w-full mt-5 items-center justify-center btn-success bg-white btn-sm btn">
                              <div class="flex-1 mx-8 text-base text-slate-900 text-white font-medium">Setujui Kontrak
                              </div>
                        </button>
                        <button class="flex w-full mt-5 items-center justify-center btn-danger bg-white btn-sm btn">
                              <div class="flex-1 mx-8 text-base text-slate-900 text-white font-medium">Tolak Kontrak 
                              </div>
                        </button>
                    </div>
                  </div>
                  </div>
                  <!-- </div> -->
@endsection
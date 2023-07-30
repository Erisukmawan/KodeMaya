@extends('landingpage.header')
@section('content')

<main class="p-5 bg-light-blue">
      <div class="flex justify-center items-start my-2">
        <div class="w-full sm:w-10/12 md:w-1/2 my-1">
          <h2 class="text-xl font-semibold text-vnet-blue mb-2">Syarat dan Ketentuan Kodemaya</h2>
          <ul class="flex flex-col">
            <li class="bg-white my-2 shadow-lg" x-data="accordion(1)">
              <h2
                @click="handleClick()"
                class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer"
              >
                <p class="p-3 text-gray-900 dark:text-black">Kebijakan Akun</p>
                <svg
                  :class="handleRotate()"
                  class="fill-current text-blue-700 h-6 w-6 transform transition-transform duration-500"
                  viewBox="0 0 20 20"
                >
                  <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path>
                </svg>
              </h2>
              <div
                x-ref="tab"
                :style="handleToggle()"
                class="border-l-2 border-blue-600 overflow-hidden max-h-0 duration-500 transition-all"
              >
                <ol class="list-decimal pl-8 text-gray-900 dark:text-black">
                    <li>Anda harus berusia minimal 18 tahun untuk menggunakan aplikasi KodeMaya.</li>
                    <li>Informasi yang Anda berikan saat mendaftar harus akurat, lengkap, dan mutakhir. Anda bertanggung jawab untuk memperbarui informasi pribadi Anda jika ada perubahan.</li>
                    <li>Setiap akun pengguna hanya boleh digunakan oleh satu orang. Anda tidak diizinkan untuk berbagi akun dengan orang lain.</li>
                    <li>Anda bertanggung jawab penuh atas keamanan akun Anda, termasuk kata sandi dan informasi keamanan lainnya. Jangan memberikan informasi ini kepada orang lain.</li>
                    <li>Jika ada aktivitas yang mencurigakan atau penggunaan yang tidak sah pada akun Anda, Anda harus segera memberi tahu kami.</li>
                </ol>
              </div>
            </li>
            <li class="bg-white my-2 shadow-lg" x-data="accordion(2)">
              <h2
                @click="handleClick()"
                class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer"
              >
                <p class="p-3 text-gray-900 dark:text-black">Pemesanan Aplikasi</p>
                <svg
                  :class="handleRotate()"
                  class="fill-current text-blue-700 h-6 w-6 transform transition-transform duration-500"
                  viewBox="0 0 20 20"
                >
                  <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path>
                </svg>
              </h2>
              <div
                class="border-l-2 border-blue-600 overflow-hidden max-h-0 duration-500 transition-all"
                x-ref="tab"
                :style="handleToggle()"
              >
                <ol class="list-decimal pl-8 text-gray-900 dark:text-black">
                    <li>Proses pemesanan melalui aplikasi KodeMaya harus dilakukan secara lengkap dan akurat. Pastikan Anda memberikan detail proyek yang jelas dan sesuai agar kami dapat memberikan layanan dengan baik.</li>
                    <li> Kami berhak menolak pemesanan apapun yang kami anggap melanggar hukum, melanggar etika, atau melanggar hak kekayaan intelektual pihak ketiga.</li>
                    <li>Biaya pemesanan akan disesuaikan berdasarkan skala dan kompleksitas proyek yang dipesan. Detail biaya akan dijelaskan lebih lanjut selama proses pemesanan.</li>
                </ol>
              </div>
            </li>
            <li class="bg-white my-2 shadow-lg" x-data="accordion(3)">
              <h2
                @click="handleClick()"
                class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer"
              >
                <p class="p-3 text-gray-900 dark:text-black">Pembayaran Aplikasi</p>
                <svg
                  :class="handleRotate()"
                  class="fill-current text-blue-700 h-6 w-6 transform transition-transform duration-500"
                  viewBox="0 0 20 20"
                >
                  <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path>
                </svg>
              </h2>
              <div
                class="border-l-2 border-blue-600 overflow-hidden max-h-0 duration-500 transition-all"
                x-ref="tab"
                :style="handleToggle()"
              >
                <ol class="list-decimal pl-8 text-gray-900 dark:text-black">
                    <li>Pembayaran pemesanan harus dilakukan sesuai dengan ketentuan yang tercantum dalam aplikasi KodeMaya.</li>
                    <li>Jika Anda membatalkan pemesanan, Anda mungkin dikenakan biaya pembatalan sesuai dengan kebijakan pembatalan yang berlaku.</li>
                    <li>Pembayaran harus dilakukan dalam mata uang yang ditentukan oleh KodeMaya. Biaya konversi mata uang akan menjadi tanggung jawab Anda.</li>
                    <li>KodeMaya berhak menahan layanan atau produk hingga pembayaran penuh diterima.</li>
                </ol>
              </div>
            </li>
            <li class="bg-white my-2 shadow-lg" x-data="accordion(4)">
              <h2
                @click="handleClick()"
                class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer"
              >
                <p class="p-3 text-gray-900 dark:text-black">Kebijakan Privasi</p>
                <svg
                  :class="handleRotate()"
                  class="fill-current text-blue-700 h-6 w-6 transform transition-transform duration-500"
                  viewBox="0 0 20 20"
                >
                  <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path>
                </svg>
              </h2>
              <div
                class="border-l-2 border-blue-600 overflow-hidden max-h-0 duration-500 transition-all"
                x-ref="tab"
                :style="handleToggle()"
              >
                <p class="p-3 text-gray-900 dark:text-black">
                  Penggunaan informasi pribadi Anda diatur oleh Kebijakan Privasi KodeMaya. Mohon untuk membaca dan memahami kebijakan tersebut.
                </p>
                <p class="p-3 text-gray-900 dark:text-black">Dengan mengikuti langkah-langkah di atas, Anda dapat memulai perjalanan sebagai mentor di "KodeMaya" dan menawarkan keahlian Anda kepada pengguna lain yang membutuhkan bantuan dalam proyek digital.</p>
              </div>
            </li>
            <li class="bg-white my-2 shadow-lg" x-data="accordion(5)">
              <h2
                @click="handleClick()"
                class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer"
              >
                <p class="p-3 text-gray-900 dark:text-black">Hak Kekayaan Intelektual</p>
                <svg
                  :class="handleRotate()"
                  class="fill-current text-blue-700 h-6 w-6 transform transition-transform duration-500"
                  viewBox="0 0 20 20"
                >
                  <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path>
                </svg>
              </h2>
              <div
                class="border-l-2 border-blue-600 overflow-hidden max-h-0 duration-500 transition-all"
                x-ref="tab"
                :style="handleToggle()"
              >
                <ol class="list-decimal pl-8 text-gray-900 dark:text-black">
                    <li>Setiap hak kekayaan intelektual yang terkait dengan layanan atau produk KodeMaya tetap menjadi milik perusahaan kami.</li>
                    <li>Anda tidak diperkenankan untuk menggunakan, mereproduksi, atau mendistribusikan konten atau karya dari KodeMaya tanpa izin tertulis sebelumnya.</li>
                </ol>
              </div>
            </li>
            <li class="bg-white my-2 shadow-lg" x-data="accordion(6)">
              <h2
                @click="handleClick()"
                class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer"
              >
                <p class="pl-3 text-gray-900 dark:text-black">Perubahan pada Syarat dan Ketentuan</p>
                <svg
                  :class="handleRotate()"
                  class="fill-current text-blue-700 h-6 w-6 transform transition-transform duration-500"
                  viewBox="0 0 20 20"
                >
                  <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path>
                </svg>
              </h2>
              <div
                class="border-l-2 border-blue-600 overflow-hidden max-h-0 duration-500 transition-all"
                x-ref="tab"
                :style="handleToggle()"
              >
                <ol class="list-decimal pl-8 text-gray-900 dark:text-black">
                    <li>KodeMaya berhak untuk memperbarui dan mengubah syarat dan ketentuan ini dari waktu ke waktu tanpa pemberitahuan sebelumnya.</li>
                    <li>Anda disarankan untuk secara berkala memeriksa halaman syarat dan ketentuan kami agar tetap mendapat informasi terbaru.</li>
                </ol>
              </div>
            </li>
            <li class="bg-white my-2 shadow-lg" x-data="accordion(4)">
              
                <p class="p-3 text-gray-600 dark:text-black">Dengan menggunakan aplikasi KodeMaya, Anda dianggap telah membaca, memahami, dan menyetujui seluruh syarat dan ketentuan yang berlaku. Jika Anda tidak setuju dengan syarat dan ketentuan ini, harap berhenti menggunakan aplikasi KodeMaya.</p>
                  <button onclick="history.go(-1)" class="inline-block px-4 py-2 hover:bg-slate-600 dark:hover:bg-slate-600 bg-success-500 dark:hover:text-white font-inter text-sm w-full text-white dark:text-white font-normal">
                    <span class="font-Inter items-center justify-center" style="text-align:'center'; color:white">Saya Setuju</span>
                  </button>
            </li>
          </ul>
        </div>
      </div>
</main>
@endsection
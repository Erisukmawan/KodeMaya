@extends('landingpage.header')
@section('content')

<main class="p-5 bg-light-blue">
      <div class="flex justify-center items-start my-2">
        <div class="w-full sm:w-10/12 md:w-1/2 my-1">
          <h2 class="text-xl font-semibold text-vnet-blue mb-2">FAQ</h2>
          <ul class="flex flex-col">
            <li class="bg-white my-2 shadow-lg" x-data="accordion(1)">
              <h2
                @click="handleClick()"
                class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer"
              >
                <p class="p-3 text-gray-900 dark:text-black">Apa itu Kodemaya?</p>
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
                <p class="p-3 text-gray-900 dark:text-black">
                  "Kodemaya" adalah sebuah platform inovatif dan terpercaya yang menyediakan wadah bagi para profesional di bidang digital untuk menawarkan jasa seperti pembuatan website, aplikasi Android, desain UI/UX, aplikasi desktop, dan model machine learning/pengolahan data science. Platform ini bertujuan untuk memfasilitasi kolaborasi antara pengguna dan para ahli dalam merancang dan mengembangkan proyek digital yang menakjubkan.
                </p>
                <p class="p-3 text-gray-900 dark:text-black">
                    Logo "Kodemaya" menggunakan kombinasi warna biru tua dan biru muda. Warna biru tua melambangkan kedalaman dan misteri alam yang tak terbatas, sementara warna biru muda mencerminkan kehidupan yang lebih mudah dipahami. Bentuk kotak yang saling terkait pada logo menggambarkan hubungan yang saling berhubungan antara pengguna dan mentor, mencerminkan adanya pertukaran pikiran dan ide di dalam platform ini. Selain itu, warna biru tua dalam bentuk sintaks program menunjukkan bahwa platform ini ditujukan untuk masyarakat umum yang tertarik dengan pemrograman.
                </p>
                <p class="p-3 text-gray-900 dark:text-black">
                    Nama "Kodemaya" berasal dari singkatan bahasa Sanskerta, di mana "mathem" berarti puas atau senang sekali, dan "satya" berarti kebenaran. Artinya, platform ini bertujuan memberikan solusi yang benar-benar membantu pengguna agar merasa puas dan senang dengan hasil proyek yang mereka dapatkan tanpa kekhawatiran.
                </p>
                <p class="p-3 text-gray-900 dark:text-black">
                    Dengan berbagai fitur dan layanannya, "Kodemaya" diharapkan dapat menjadi tempat yang ideal bagi para profesional digital untuk menawarkan keahlian mereka serta memenuhi kebutuhan dan harapan pengguna dalam menciptakan proyek digital yang berkualitas tinggi.
                </p>
              </div>
            </li>
            <li class="bg-white my-2 shadow-lg" x-data="accordion(2)">
              <h2
                @click="handleClick()"
                class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer"
              >
                <p class="p-3 text-gray-900 dark:text-black">Bagaimana cara melakukan pemesanan "Tulung" sebagai pengguna?</p>
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
                  Sebagai pengguna, Anda dapat mengikuti langkah-langkah berikut:
                </p>
                <ol class="list-decimal pl-8 text-gray-900 dark:text-black">
                    <li>Daftar atau masuk ke akun "KodeMaya" Anda.</li>
                    <li>Pilih menu pemesanan dan buat proyek</li>
                    <li>Tunggu hingga mentor menyetujui pesanan Anda.</li>
                    <li>Setelah disetujui, Lihat Detail dan klik tombol negoisasi untuk berkomunikasi bersama mentor.</li>
                    <li>Jika kedua pihak telah sepakat dan menyetujui kontrak, maka dilanjutkan ke halaman pembayaran yang telah dikirimkan oleh mentor.</li>
                    <li>Pesanan akan dikerjakan oleh mentor sesuai kesepakatan.</li>
                </ol>
              </div>
            </li>
            <li class="bg-white my-2 shadow-lg" x-data="accordion(3)">
              <h2
                @click="handleClick()"
                class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer"
              >
                <p class="p-3 text-gray-900 dark:text-black">Bagaimana cara melakukan pembayaran pesanan dengan aman?</p>
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
                  "KodeMaya" bekerja sama dengan metode pembayaran yang terpercaya dan aman. Anda dapat menggunakan kartu kredit/debit atau opsi pembayaran elektronik lainnya untuk melakukan pembayaran pesanan Anda.
                </p>
              </div>
            </li>
            <li class="bg-white my-2 shadow-lg" x-data="accordion(4)">
              <h2
                @click="handleClick()"
                class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer"
              >
                <p class="p-3 text-gray-900 dark:text-black">Bagaimana saya bisa menjadi seorang mentor di "KodeMaya"?</p>
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
                  Sebagai seorang pengguna, Anda dapat bergabung menjadi bagian dari Mentor di "KodeMaya" dengan langkah-langkah berikut:
                </p>
                <ol class="list-decimal pl-8 text-gray-900 dark:text-black">
                    <li>Pada menu login, pilih opsi "Daftar sebagai mentor".</li>
                    <li>Isilah data diri Anda dengan lengkap dan pastikan semua informasi terisi dengan benar.</li>
                    <li>Unggah keahlian Anda, seperti pembuatan aplikasi atau desain, agar konsumen dapat tertarik dengan penawaran yang Anda berikan.</li>
                </ol>
                <p class="p-3 text-gray-900 dark:text-black">Dengan mengikuti langkah-langkah di atas, Anda dapat memulai perjalanan sebagai mentor di "KodeMaya" dan menawarkan keahlian Anda kepada pengguna lain yang membutuhkan bantuan dalam proyek digital.</p>
              </div>
            </li>
            <li class="bg-white my-2 shadow-lg" x-data="accordion(5)">
              <h2
                @click="handleClick()"
                class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer"
              >
                <p class="p-3 text-gray-900 dark:text-black">Bagaimana "KodeMaya" menjamin pesanan saya selesai tepat waktu?</p>
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
                  "KodeMaya" berusaha untuk mempertemukan pengguna dengan penyedia jasa yang dapat menyelesaikan pesanan dengan tepat waktu. Namun, sebagai platform penyedia jasa, kami tidak dapat memberikan jaminan mutlak. Namun, kami akan berusaha untuk memberikan dukungan dan bantuan dalam memastikan pesanan selesai dengan baik.
                </p>
              </div>
            </li>
            <li class="bg-white my-2 shadow-lg" x-data="accordion(6)">
              <h2
                @click="handleClick()"
                class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer"
              >
                <p class="text-gray-900 dark:text-black">Butuh Bantuan ?</p>
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
                  Jika Anda Memerlukan Bantuan, silahkan hubungi kami melalui :
                </p>
                <ol class="list-decimal pl-8 text-gray-900 dark:text-black">
                    <li>WhatsApp : 08987528332</li>
                    <li>Email : support@kodemaya.my.id</li>
                </ol>
              </div>
            </li>
          </ul>
        </div>
      </div>
</main>
@endsection
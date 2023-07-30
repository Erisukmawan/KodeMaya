@extends('landingpage.header')
@section('content')
<div class="content-wrapper transition-all duration-150 ltr:ml-[248px] rtl:mr-[248px]" id="content_wrapper"></div>
<section id="home" class="hero" data-aos="fade-up" data-aos-duration="1000">
    <div class="background">
        <div class="hero-content" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="2000">
            <h1>We Help To <span>Build</span> Your Dream</h1>
            <p>Bersama KodeMaya, proses belajarmu akan menjadi LEBIH MUDAH dan CEPAT. Ayo bergabung sekarang!</p>
            <a href="{{route('register')}}" class="cta animate-[wiggle_1s_ease-in-out_infinite]">Gabung Sekarang Juga
                !</a>
        </div>
    </div>
</section>
<section class="Tulung" id="Tulung" data-aos="fade-up">
    <div class="page-content ">
        <h1 class="dark:text-white" data-aos="fade-up" data-aos-duration="1500">TULUNG</h1>
        <p class="title" data-aos="fade-up" data-aos-duration="1500">Anda Mungkin Bertanya, Apa Itu Tulung ?</p>
        <div class="card-row">
            <div class="outer-card " data-aos="zoom-out-up" data-aos-duration="1500">
                <div class="inner-card_img" data-aos="zoom-out-up" data-aos-duration="1500">
                    <img src="{{url('/assets/images/all-img/Tulung.png')}}" alt="">

                </div>
            </div>
            <div class="outer-card" data-aos="zoom-out-up" data-aos-duration="1500">
                <div class="inner-card" data-aos="zoom-out-up" data-aos-duration="1500">
                    <div class="card-content">
                        <h2>Mentor Berpengalaman</h2>
                        <p>Kamu dapat membuat aplikasi dengan baik dari saran mentor yang sudah berpengalaman</p>
                    </div>
                </div>
                <div class="inner-card" data-aos="zoom-out-up" data-aos-duration="1500">
                    <div class="card-content">
                        <h2>Mentor Berpengalaman</h2>
                        <p>Kamu dapat membuat aplikasi dengan baik dari saran mentor yang sudah berpengalaman</p>
                    </div>
                </div>
                <div class="inner-card" data-aos="zoom-out-up" data-aos-duration="1500">
                    <div class="card-content">
                        <h2>Harga Fleksibel dan Transparan</h2>
                        <p>Gak perlu khawatir kemahalan, kamu bisa bernegosiasi dengan mentor untuk menyesuaikan harga
                            yang
                            kamu mau</p>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- You can open the modal using ID.showModal() method -->
<section class="Mentor" id="Mentor" data-aos="fade-up">
    <div class="page-content">
        <h1 class="dark:text-white" data-aos="fade-up" data-aos-duration="1500">Mentor</h1>
        <p class="title" data-aos="fade-up" data-aos-duration="1500">Apa Saja Keuntungan Menjadi Mentor Di KodeMaya ?
        </p>
        <div class="card-row">
            <div class="outer-card" data-aos="zoom-out-up" data-aos-duration="1500">
                <div class="inner-card" data-aos="zoom-out-up" data-aos-duration="1500">
                    <div class="card-content">
                        <h2>Bekerja dimana saja dan kapan saja</h2>
                        <p>Kamu dapat membuat aplikasi dengan baik dari saran mentor yang sudah berpengalaman</p>
                    </div>
                </div>
                <div class="inner-card" data-aos="zoom-out-up" data-aos-duration="1500">
                    <div class="card-content">
                        <h2>Harga project bisa anda atur sendiri</h2>
                        <p>Kamu dapat membuat aplikasi dengan baik dari saran mentor yang sudah berpengalaman</p>
                    </div>
                </div>
                <div class="inner-card" data-aos="zoom-out-up" data-aos-duration="1500">
                    <div class="card-content">
                        <h2>Pajak yang relatif kecil</h2>
                        <p>Gak perlu khawatir kemahalan, kamu bisa bernegosiasi dengan mentor untuk menyesuaikan harga
                            yang
                            kamu mau</p>
                        </p>
                    </div>
                </div>

            </div>
            <div class="outer-card " data-aos="zoom-out-up" data-aos-duration="1500">
                <div class="inner-card_img" data-aos="zoom-out-up" data-aos-duration="1500">
                    <img src="{{url('/assets/images/all-img/Mentor.png')}}" alt="">

                </div>
            </div>
            <a href="{{route('register')}}" class="cta animate-[wiggle_1s_ease-in-out_infinite]" data-aos="zoom-out-up"
                data-aos-duration="2500">Gabung Sekarang Juga !</a>
        </div>
    </div>
</section>

<section class="Harga" id="Harga" data-aos="fade-up">
    <div class="page-content space-y-5">
        <h1 class="dark:text-white" data-aos="fade-up" data-aos-duration="1500">HARGA</h1>
        <p class="title" data-aos="fade-up" data-aos-duration="1500">Apa saja yang dapat kami kerjakan ?</p>
        <div class="card-body p-6">
            <div class="grid xl:grid-cols-4 md:grid-cols-2 grid-cols-1 gap-5">
                <div data-aos="zoom-out-up" data-aos-duration="1500"
                    class="price-table bg-opacity-[0.16] dark:bg-opacity-[0.36] rounded-[6px] p-6 text-slate-900 dark:text-white relative overflow-hidden z-[1] bg-warning-500">
                    <div class="overlay absolute right-0 top-0 w-full h-full z-[-1]">
                        <img src="{{url('/assets/images/all-img/big-shap1.png')}}" alt="" class="ml-auto block">
                    </div>
                    <header class="mb-6">
                        <h4 class="text-xl mb-5">Website</h4>
                        <p class="text-slate-500 dark:text-slate-300 text-sm">
                            Start From
                        </p>
                        <span class="text-[32px] leading-10 font-medium">
                            Rp50.000
                        </span>
                    </header>
                    <div class="price-body space-y-8">
                        <p class="text-sm leading-5 text-slate-600 dark:text-slate-300">
                            Pembuatan Website Fungsional Penuh
                        </p>
                        <div>
                            <button class="btn-outline-dark dark:border-slate-400 w-full btn">
                                Konsultasi Sekarang !</button>
                        </div>
                    </div>
                </div>
                <div class="price-table bg-opacity-[0.16] dark:bg-opacity-[0.36] rounded-[6px] p-6 text-slate-900 dark:text-white relative overflow-hidden z-[1] bg-info-500"
                    data-aos="zoom-out-up" data-aos-duration="1500">
                    <div class="overlay absolute right-0 top-0 w-full h-full z-[-1]">
                        <img src="{{url('/assets/images/all-img/big-shap2.png')}}" alt="" class="ml-auto block">
                    </div>
                    <div class="text-sm font-medium bg-slate-900 dark:bg-slate-900 text-white py-2 text-center absolute ltr:-right-[43px]
    rtl:-left-[43px] top-6 px-10 transform ltr:rotate-[45deg] rtl:-rotate-45">
                        Most popular
                    </div>
                    <header class="mb-6">
                        <h4 class="text-xl mb-5">Data Science</h4>
                        <p class="text-slate-500 dark:text-slate-300 text-sm">
                            Start From
                        </p>
                        <span class="text-[32px] leading-10 font-medium">
                            Rp85.000
                        </span>
                    </header>
                    <div class="price-body space-y-8">
                        <p class="text-sm leading-5 text-slate-600 dark:text-slate-300">
                            Pembuatan model ML & AI, Pengolahan Data
                        </p>
                        <div>
                            <button class="btn-outline-dark dark:border-slate-400 w-full btn">
                                Konsultasi Sekarang !</button>
                        </div>
                    </div>
                </div>
                <div class="price-table bg-opacity-[0.16] dark:bg-opacity-[0.36] rounded-[6px] p-6 text-slate-900 dark:text-white relative overflow-hidden z-[1] bg-success-500"
                    data-aos="zoom-out-up" data-aos-duration="1500">
                    <div class="overlay absolute right-0 top-0 w-full h-full z-[-1]">
                        <img src="{{url('/assets/images/all-img/big-shap3.png')}}" alt="" class="ml-auto block">
                    </div>
                    <header class="mb-6">
                        <h4 class="text-xl mb-5">Aplikasi Mobile</h4>
                        <p class="text-slate-500 dark:text-slate-300 text-sm">
                            Start From
                        </p>
                        <span class="text-[32px] leading-10 font-medium">
                            Rp75.000
                        </span>
                    </header>
                    <div class="price-body space-y-8">
                        <p class="text-sm leading-5 text-slate-600 dark:text-slate-300">
                            Pembuatan Aplikasi Mobile Fungsional Penuh
                        </p>
                        <div>
                            <button class="btn-outline-dark dark:border-slate-400 w-full btn">
                                Konsultasi Sekarang !</button>
                        </div>
                    </div>
                </div>
                <div class="price-table bg-opacity-[0.16] dark:bg-opacity-[0.36] rounded-[6px] p-6 text-slate-900 dark:text-white relative
overflow-hidden z-[1] bg-primary-500" data-aos="zoom-out-up" data-aos-duration="1500">
                    <div class="overlay absolute right-0 top-0 w-full h-full z-[-1]">
                        <img src="{{url('/assets/images/all-img/big-shap4.png')}}" alt="" class="ml-auto block">
                    </div>
                    <header class="mb-6">
                        <h4 class="text-xl mb-5">Aplikasi Desktop</h4>
                        <p class="text-slate-500 dark:text-slate-300 text-sm">
                            Start From
                        </p>
                        <span class="text-[32px] leading-10 font-medium">
                            Rp80.000
                        </span>
                    </header>
                    <div class="price-body space-y-8">
                        <p class="text-sm leading-5 text-slate-600 dark:text-slate-300">
                            Pembuatan Aplikasi Desktop Fungsional Penuh
                        </p>
                        <div>
                            <button class="btn-outline-dark dark:border-slate-400 w-full btn">
                                Konsultasi Sekarang !</button>
                        </div>
                    </div>
                </div>
            </div>
            <a href="{{route('register')}}" class="cta animate-[wiggle_1s_ease-in-out_infinite]" data-aos="zoom-out-up"
                data-aos-duration="1500">Lihat Selengkapnya</a>
        </div>
</section>


</div>
@endsection
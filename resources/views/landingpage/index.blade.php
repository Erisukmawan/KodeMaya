@extends('landingpage.header')
@section('content')
    <div class="content-wrapper transition-all duration-150 ltr:ml-[248px] rtl:mr-[248px]" id="content_wrapper"></div>
    <section id="home" class="hero" data-aos="fade-up" data-aos-duration="1000">
        <div class="background">
            <div class="hero-content" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="2000">
                <h1>We Help To <span>Build</span> Your Dream</h1>
                <p>Bersama KodeMaya, proses belajarmu akan menjadi LEBIH MUDAH dan CEPAT. Ayo bergabung sekarang!</p>
                <a href="{{ route('register') }}" class="cta animate-[wiggle_1s_ease-in-out_infinite]">Gabung Sekarang Juga
                    !</a>
            </div>
        </div>
    </section>
    <section class="Fitur" id="Tulung" data-aos="fade-up">
        <div class="page-content ">
            <h1 class="dark:text-white" data-aos="fade-up" data-aos-duration="1500">TULUNG</h1>
            <p class="title" data-aos="fade-up" data-aos-duration="1500">Anda Mungkin Bertanya, Apa Itu Tulung ?</p>
            <div class="card-row">
                <div class="outer-card " data-aos="zoom-out-up" data-aos-duration="1500">
                    <div class="inner-card">
                        <img src="assets/images/all-img/Tulung.png" alt="">

                    </div>
                </div>
                <div class="outer-card" data-aos="zoom-out-up" data-aos-duration="1500">
                    <div class="inner-card">
                        <div class="card-content">
                            <h2>Mentor Berpengalaman</h2>
                            <p>Kamu dapat membuat aplikasi dengan baik dari saran mentor yang sudah berpengalaman</p>
                        </div>
                    </div>
                    <div class="inner-card">
                        <div class="card-content">
                            <h2>Mentor Berpengalaman</h2>
                            <p>Kamu dapat membuat aplikasi dengan baik dari saran mentor yang sudah berpengalaman</p>
                        </div>
                    </div>
                    <div class="inner-card">
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
    <section class="Fitur" id="Mentor" data-aos="fade-up">
        <div class="page-content_mentor">
            <h1 class="dark:text-white" data-aos="fade-up" data-aos-duration="1500">Mentor</h1>
            <p class="title" data-aos="fade-up" data-aos-duration="1500">Ayo bergabung menjadi mentor!</p>
            <div class="card-row">
                <div class="outer-card" data-aos="zoom-out-up" data-aos-duration="1500">
                    <div class="inner-card">
                        <div class="card-content">
                            <h2>Mentor Berpengalaman</h2>
                            <p>Kamu dapat membuat aplikasi dengan baik dari saran mentor yang sudah berpengalaman</p>
                        </div>
                    </div>
                    <div class="inner-card">
                        <div class="card-content">
                            <h2>Mentor Berpengalaman</h2>
                            <p>Kamu dapat membuat aplikasi dengan baik dari saran mentor yang sudah berpengalaman</p>
                        </div>
                    </div>
                    <div class="inner-card">
                        <div class="card-content">
                            <h2>Harga Fleksibel dan Transparan</h2>
                            <p>Gak perlu khawatir kemahalan, kamu bisa bernegosiasi dengan mentor untuk menyesuaikan harga
                                yang
                                kamu mau</p>
                            </p>
                        </div>
                    </div>

                </div>
                <div class="outer-card " data-aos="zoom-out-up" data-aos-duration="1500">
                    <div class="inner-card">
                        <img src="assets/images/all-img/Mentor.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="Fitur" id="Mentor" data-aos="fade-up">
        <div class="page-content_pricing space-y-5">
            <div class="card">
                <h1 class="dark:text-white" data-aos="fade-up" data-aos-duration="1500">HARGA</h1>
                <p class="title dark:text-white" data-aos="fade-up" data-aos-duration="1500">Penawaran terbaik untuk kamu.
                </p>
                <div class="card-body p-6">
                    <div class="grid xl:grid-cols-4 md:grid-cols-2 grid-cols-1 gap-5">
                        <div data-aos="zoom-out-up" data-aos-duration="1500"
                            class="price-table bg-opacity-[0.16] dark:bg-opacity-[0.36] rounded-[6px] p-6 text-slate-900 dark:text-white relative overflow-hidden z-[1] bg-warning-500">
                            <div class="overlay absolute right-0 top-0 w-full h-full z-[-1]">
                                <img src="assets/images/all-img/big-shap1.png" alt="" class="ml-auto block">
                            </div>
                            <header class="mb-6">
                                <h4 class="text-xl mb-5">Advanced</h4>
                                <div class="space-x-4 relative flex items-center mb-5 rtl:space-x-reverse">
                                    <span class="text-[32px] leading-10 font-medium">
                                        $96
                                    </span>
                                    <span
                                        class="text-xs text-warning-500 font-medium px-3 py-1 rounded-full inline-block bg-white uppercase h-auto">Save
                                        20%</span>
                                </div>
                                <p class="text-slate-500 dark:text-slate-300 text-sm">
                                    per user/month, annually
                                </p>
                            </header>
                            <div class="price-body space-y-8">
                                <p class="text-sm leading-5 text-slate-600 dark:text-slate-300">
                                    Designed for teams who need to manage complex workflows with more automation and
                                    integration.
                                </p>
                                <div>
                                    <button class="btn-outline-dark dark:border-slate-400 w-full btn">
                                        Buy now</button>
                                </div>
                            </div>
                        </div>
                        <div class="price-table bg-opacity-[0.16] dark:bg-opacity-[0.36] rounded-[6px] p-6 text-slate-900 dark:text-white relative overflow-hidden z-[1] bg-info-500"
                            data-aos="zoom-out-up" data-aos-duration="1500">
                            <div class="overlay absolute right-0 top-0 w-full h-full z-[-1]">
                                <img src="assets/images/all-img/big-shap2.png" alt="" class="ml-auto block">
                            </div>
                            <div
                                class="text-sm font-medium bg-slate-900 dark:bg-slate-900 text-white py-2 text-center absolute ltr:-right-[43px] rtl:-left-[43px] top-6 px-10 transform ltr:rotate-[45deg] rtl:-rotate-45">
                                Most popular
                            </div>
                            <header class="mb-6">
                                <h4 class="text-xl mb-5">Business</h4>
                                <div class="space-x-4 relative flex items-center mb-5 rtl:space-x-reverse">
                                    <span class="text-[32px] leading-10 font-medium">
                                        $196
                                    </span>
                                    <span
                                        class="text-xs text-warning-500 font-medium px-3 py-1 rounded-full inline-block bg-white uppercase h-auto">Save
                                        20%</span>
                                </div>
                                <p class="text-slate-500 dark:text-slate-300 text-sm">
                                    per user/month, annually
                                </p>
                            </header>
                            <div class="price-body space-y-8">
                                <p class="text-sm leading-5 text-slate-600 dark:text-slate-300">
                                    Designed for teams who need to manage complex workflows with more automation and
                                    integration.
                                </p>
                                <div>
                                    <button class="btn-outline-dark dark:border-slate-400 w-full btn">
                                        Buy now</button>
                                </div>
                            </div>
                        </div>
                        <div class="price-table bg-opacity-[0.16] dark:bg-opacity-[0.36] rounded-[6px] p-6 text-slate-900 dark:text-white relative overflow-hidden z-[1] bg-success-500"
                            data-aos="zoom-out-up" data-aos-duration="1500">
                            <div class="overlay absolute right-0 top-0 w-full h-full z-[-1]">
                                <img src="assets/images/all-img/big-shap3.png" alt="" class="ml-auto block">
                            </div>
                            <header class="mb-6">
                                <h4 class="text-xl mb-5">Basic</h4>
                                <div class="space-x-4 relative flex items-center mb-5 rtl:space-x-reverse">
                                    <span class="text-[32px] leading-10 font-medium">
                                        $26
                                    </span>
                                    <span
                                        class="text-xs text-warning-500 font-medium px-3 py-1 rounded-full inline-block bg-white uppercase h-auto">Save
                                        20%</span>
                                </div>
                                <p class="text-slate-500 dark:text-slate-300 text-sm">
                                    per user/month, annually
                                </p>
                            </header>
                            <div class="price-body space-y-8">
                                <p class="text-sm leading-5 text-slate-600 dark:text-slate-300">
                                    Designed for teams who need to manage complex workflows with more automation and
                                    integration.
                                </p>
                                <div>
                                    <button class="btn-outline-dark dark:border-slate-400 w-full btn">
                                        Try it free</button>
                                </div>
                            </div>
                        </div>
                        <div class="price-table bg-opacity-[0.16] dark:bg-opacity-[0.36] rounded-[6px] p-6 text-slate-900 dark:text-white relative overflow-hidden z-[1] bg-primary-500"
                            data-aos="zoom-out-up" data-aos-duration="1500">
                            <div class="overlay absolute right-0 top-0 w-full h-full z-[-1]">
                                <img src="assets/images/all-img/big-shap4.png" alt="" class="ml-auto block">
                            </div>
                            <header class="mb-6">
                                <h4 class="text-xl mb-5">Got a large team?</h4>
                                <div class="space-x-4 relative flex items-center mb-5 rtl:space-x-reverse">
                                    <span class="text-[32px] leading-10 font-medium">
                                        $126
                                    </span>
                                    <span
                                        class="text-xs text-warning-500 font-medium px-3 py-1 rounded-full inline-block bg-white uppercase h-auto">Save
                                        20%</span>
                                </div>
                                <p class="text-slate-500 dark:text-slate-300 text-sm">
                                    per user/month, annually
                                </p>
                            </header>
                            <div class="price-body space-y-8">
                                <p class="text-sm leading-5 text-slate-600 dark:text-slate-300">
                                    Designed for teams who need to manage complex workflows with more automation and
                                    integration.
                                </p>
                                <div>
                                    <button class="btn-outline-dark dark:border-slate-400 w-full btn">
                                        Request a quote</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <section class="Fitur" id="Mentor" data-aos="fade-up">
        <div class="page-content_testi">
            <h1 class="dark:text-white" data-aos="fade-up" data-aos-duration="1500">TESTIMONIAL</h1>
            <p class="title" data-aos="fade-up" data-aos-duration="1500">Apa Yang Pelanggan Kami Katakan</p>
            <div class="testimonial-section" data-aos="fade-up" data-aos-duration="2000">
                <div class="testimonial-container">
                    <div class="testimonial">
                        <div class="testimonial-img">
                            <img src="assets/images/avatar/av-1.svg" alt="Person 1">
                        </div>
                        <div class="testimonial-text">
                            <p>"I absolutely love this code! It's made my life so much easier."</p>
                        </div>
                        <div class="testimonial-author">
                            <p>- John Doe</p>
                        </div>
                    </div>
                    <div class="testimonial">
                        <div class="testimonial-img">
                            <img src="assets/images/avatar/av-2.svg" alt="Person 2">
                        </div>
                        <div class="testimonial-text">
                            <p>"This code is amazing! It's saved me countless hours of work."</p>
                        </div>
                        <div class="testimonial-author">
                            <p>- Jane Smith</p>
                        </div>
                    </div>
                    <div class="testimonial">
                        <div class="testimonial-img">
                            <img src="assets/images/avatar/av-3.svg" alt="Person 2">
                        </div>
                        <div class="testimonial-text">
                            <p>"This code is amazing! It's saved me countless hours of work."</p>
                        </div>
                        <div class="testimonial-author">
                            <p>- Jane Smith</p>
                        </div>
                    </div>
                    <div class="testimonial">
                        <div class="testimonial-img">
                            <img src="assets/images/avatar/av-4.svg" alt="Person 2">
                        </div>
                        <div class="testimonial-text">
                            <p>"This code is amazing! It's saved me countless hours of work."</p>
                        </div>
                        <div class="testimonial-author">
                            <p>- Jane Smith</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-controls">
                    <button class="prev">&#10094;</button>
                    <button class="next">&#10095;</button>
                </div>
            </div>
        </div>
    </section>

    </div>
@endsection

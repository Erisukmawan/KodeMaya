@extends('landingpage.header')
@section('content')
<div class="content-wrapper transition-all duration-150 ltr:ml-[248px] rtl:mr-[248px]" id="content_wrapper"></div>
<section class="hero">
  <div class="background">
      <div class="hero-content">
          <h1>We Help To <span>Build</span> Your Dream</h1>
          <p>Bersama KodeMaya, proses belajarmu akan menjadi LEBIH MUDAH dan CEPAT. Ayo bergabung sekarang!</p>
          <a href="{{route('register')}}" class="cta">Gabung Sekarang Juga !</a>
      </div>
    </div>
</section>
<section class="Fitur">
  <div class="page-content">
    <h1 class="dark:text-white">Produk</h1>
    <div class="card-row dark:">
        <div class="outer-card">
            <div class="inner-card">
                <div class="card-content">
                    <h2>Card Title 1</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ut sapien in ex eleifend rutrum.</p>
                    <a href="#" class="btn">Learn More</a>
                </div>
            </div>
        </div>
        <div class="outer-card">
            <div class="inner-card_2">
                <div class="card-content">
                    <h2>Card Title 2</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ut sapien in ex eleifend rutrum.</p>
                    <a href="#" class="btn">Learn More</a>
                </div>
            </div>
        </div>
        <div class="outer-card">
            <div class="inner-card">
                <div class="card-content">
                    <h2>Card Title 3</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ut sapien in ex eleifend rutrum.</p>
                    <a href="#" class="btn">Learn More</a>
                </div>
            </div>
        </div>
        <div class="outer-card">
            <div class="inner-card">
                <div class="card-content">
                    <h2>Card Title 4</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ut sapien in ex eleifend rutrum.</p>
                    <a href="#" class="btn">Learn More</a>
                </div>
            </div>
        </div>
    </div>
  </div>
</section>
</div>

@endsection
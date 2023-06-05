@extends('auth.layout')

@section('title')
<title>KodeMaya | Masuk</title>
@endsection

@section('custom-script')
<script>
    $(function() {
        $("form").submit(function() {
            $('#login-btn').hide()
            $('#login-btn-load').show()
        });
        
        $(".login-alert").click(function() {
            $('.login-alert-main').remove()
        })
    });
</script>
@endsection

@section('content-form-header')
<div class="text-center 2xl:mb-10 mb-4">
    <h4 class="font-medium">Masuk</h4>
    <div class="text-slate-400 text-base">
        Masuk ke akun Anda untuk mulai menggunakan KodeMaya
    </div>
</div>
@endsection

@section('content-form')
@if ($message = Session::get('success'))
<div class="p-6 login-alert-main">
    <div class="py-[18px] px-5 font-normal text-sm rounded-md bg-success-500 text-white">
        <div class="flex items-center space-x-3 rtl:space-x-reverse">
            <iconify-icon class="text-2xl flex-0" icon="system-uicons:target"></iconify-icon>
            <p class="flex-1 font-Inter">
                {{ $message }}
            </p>
            <div class="flex-0 text-xl cursor-pointer login-alert">
                <iconify-icon icon="line-md:close"></iconify-icon>
            </div>
        </div>
    </div>
</div>
@endif

@if ($errors->any())
<div class="p-6 login-alert-main">
    <div class="py-[18px] px-5 font-normal text-sm rounded-md bg-danger-500 text-white">
        <div class="flex items-center space-x-3 rtl:space-x-reverse">
            <iconify-icon class="text-2xl flex-0" icon="system-uicons:target"></iconify-icon>
            <p class="flex-1 font-Inter">
                {{ $errors->first() }}
            </p>
            <div class="flex-0 text-xl cursor-pointer login-alert">
                <iconify-icon icon="line-md:close"></iconify-icon>
            </div>
        </div>
    </div>
</div>
@endif

<form class="space-y-4" action="{{ route('authenticate') }}" method="post">
    @csrf
    <div class="fromGroup">
        <label class="block capitalize form-label">email</label>
        <div class="relative">
            <input type="email" name="email" class="form-control py-2" placeholder="Email">
        </div>
    </div>
    <div class="fromGroup">
        <label class="block capitalize form-label">password</label>
        <div class="relative "><input type="password" name="password" class="form-control py-2" placeholder="Password" value="KodeMaya">
        </div>
    </div>
    <div class="flex justify-between">
        <label class="flex items-center cursor-pointer">
            <div class="checkbox-area mr-2 sm:mr-4 mt-2">
                <label class="inline-flex items-center cursor-pointer">
                    <input type="checkbox" class="hidden" name="keep">
                    <span class="h-4 w-4 border flex-none border-slate-100 dark:border-slate-800 rounded inline-flex ltr:mr-3 rtl:ml-3 relative transition-all duration-150 bg-slate-100 dark:bg-slate-900">
                        <img src="assets/images/icon/ck-white.svg" alt="" class="h-[10px] w-[10px] block m-auto opacity-0"></span>
                    <span class="text-500 dark:text-slate-400 text-sm leading-6 capitalize">Biarkan saya tetap masuk</span>
                </label>
            </div>
        </label>
        <a class="text-sm text-slate-800 dark:text-slate-400 leading-6 font-medium" href="forget-password-one.html">Lupa
            Password?
        </a>
    </div>
    <button id="login-btn-load" class="btn hidden justify-center w-full text-center btn-dark" disabled>
        <iconify-icon class="text-xl spin-slow ltr:mr-2 rtl:ml-2 relative top-[1px]" icon="line-md:loading-twotone-loop" style="top: 4px;"></iconify-icon>
        <span>Sedang Masuk</span>
    </button>
    <button id="login-btn" class="btn btn-dark inline-flex justify-center w-full text-center">
        <span>Masuk<span>
    </button>
</form>
@endsection


@section('content-sosmed-in')
<ul class="flex">
    <li class="flex-1">
        <a href="#" class="inline-flex h-10 w-10 bg-[#1C9CEB] text-white text-2xl flex-col items-center justify-center rounded-full">
            <img src="assets/images/icon/tw.svg" alt="">
        </a>
    </li>
    <li class="flex-1">
        <a href="#" class="inline-flex h-10 w-10 bg-[#395599] text-white text-2xl flex-col items-center justify-center rounded-full">
            <img src="assets/images/icon/fb.svg" alt="">
        </a>
    </li>
    <li class="flex-1">
        <a href="#" class="inline-flex h-10 w-10 bg-[#0A63BC] text-white text-2xl flex-col items-center justify-center rounded-full">
            <img src="assets/images/icon/in.svg" alt="">
        </a>
    </li>
    <li class="flex-1">
        <a href="#" class="inline-flex h-10 w-10 bg-[#EA4335] text-white text-2xl flex-col items-center justify-center rounded-full">
            <img src="assets/images/icon/gp.svg" alt="">
        </a>
    </li>
</ul>
@endsection

@section('content-form-footer')
<div class="md:max-w-[345px] mx-auto font-normal text-slate-500 dark:text-slate-400 mt-12 uppercase text-sm">
    Tidak punya akun?
    <a href="/register" class="text-slate-900 dark:text-white font-medium hover:underline">
        Daftar
    </a>
</div>
@endsection
@extends('auth.layout')

@section('title')
<title>KodeMaya | Daftar</title>
@endsection

@section('content-form-header')
<div class="text-center 2xl:mb-10 mb-4">
    <h4 class="font-medium">Sign up</h4>
    <div class="text-slate-500 text-base">
        Daftarkan akunmu untuk memulai menggunakan KodeMaya
    </div>
</div>
@endsection

@section('content-form')
<form class="space-y-4" action="{{ route('store') }}" method="post">
    @csrf
    <div class="fromGroup">
        <label class="block capitalize form-label">fullname</label>
        <div class="relative ">
            <input type="text" name="name" class="form-control py-2" placeholder="Nama Lengkap" required>
        </div>
    </div>
    <div class="fromGroup">
        <label class="block capitalize form-label">email</label>
        <div class="relative ">
            <input type="email" name="email" class="form-control py-2" placeholder="Email Anda" required>
        </div>
    </div>
    <div class="fromGroup">
        <label class="block capitalize form-label">password</label>
        <div class="relative ">
            <input id="password" type="password" name="password" class="form-control py-2" placeholder="Password" required="required">
            <button id="passIcon" class="passIcon absolute top-2.5 right-3 text-slate-300 text-xl p-0 leading-none" type="button">
                <iconify-icon id="passwordshow" class="hidden" icon="heroicons-solid:eye-off"></iconify-icon>
                <iconify-icon id="passwordhide" class="inline-block" icon="heroicons-outline:eye"></iconify-icon>
        </button>    
    </div>
                                
                                
    </div>
    <div class="fromGroup">
        <label class="block capitalize form-label">confirm password</label>
        <div class="relative ">
            <input type="password" id="passwordcf" name="password_confirmation" class="form-control py-2" placeholder="Konfirmasi Password" required>
        <button id="passIconcf" class="passIcon absolute top-2.5 right-3 text-slate-300 text-xl p-0 leading-none" type="button">
                <iconify-icon id="passwordshowcf" class="hidden" icon="heroicons-solid:eye-off"></iconify-icon>
                <iconify-icon id="passwordhidecf" class="inline-block" icon="heroicons-outline:eye"></iconify-icon>
        </button>    
    </div>
    </div>
    <div class="flex justify-between">
        <label class="flex items-center cursor-pointer">
            <div class="checkbox-area mr-2 sm:mr-4 mt-2" >
                <label class="inline-flex items-center cursor-pointer">
                    <input type="checkbox" class="hidden" name="accept" id="check" required="required">
                    <span class="h-4 w-4 border flex-none border-slate-100 dark:border-slate-800 rounded inline-flex ltr:mr-3 rtl:ml-3 relative transition-all duration-150 bg-slate-100 dark:bg-slate-900">
                        <img src="assets/images/icon/ck-white.svg" alt="" class="h-[10px] w-[10px] block m-auto opacity-0"></span>
                    <span class="text-500 dark:text-slate-400 text-sm leading-6 capitalize">
                       Terima <a href="#" class="text-primary-500 hover:underline" target="_blank">Syarat Dan Ketentuan</a> Dan <a class="text-primary-500 hover:text-primary-300 hover:underline" target="_blank" href="#">Kebijakan Privasi</a> Kami 
                    </span>
                </label>
            </div>
        </label>
    </div>
    <button id="buatakun" class="btn btn-secondary w-full text-center" style="cursor:no-drop" disabled>Buat Akun</button>
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
    Sudah pernah mendaftar?
    <a href="/login" class="text-slate-900 dark:text-white font-medium hover:underline">
        Masuk
    </a>
</div>
@endsection
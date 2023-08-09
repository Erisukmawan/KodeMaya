@extends('auth.layout')

@section('title')
    <title>KodeMaya | Masuk</title>
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
    <form class="space-y-4" action="{{ route('login_auth') }}" method="post">
        @csrf
        <div class="fromGroup">
            <label class="block capitalize form-label">email</label>
            <div class="relative">
                <input type="email" name="email" class="form-control py-2" placeholder="Email" required>
            </div>
        </div>
        <div class="fromGroup">
            <label class="block capitalize form-label">password</label>
            <div class="relative ">
                <input id="password" type="password" name="password" class="form-control py-2" placeholder="Password"
                    required="required">
                <button id="passIcon" class="passIcon absolute top-2.5 right-3 text-slate-300 text-xl p-0 leading-none"
                    type="button">
                    <iconify-icon id="passShow" data-show="0" class="text-slate-500 dark:text-slate-300"
                        icon="heroicons-solid:eye-off"></iconify-icon>
                </button>
            </div>
        </div>
        <div class="flex justify-between">
            <label class="flex items-center cursor-pointer">
                <div class="checkbox-area mr-2 sm:mr-4 mt-2">
                    <label class="inline-flex items-center cursor-pointer">
                        <input type="checkbox" class="hidden" name="keep">
                        <span
                            class="h-4 w-4 border flex-none border-slate-100 dark:border-slate-800 rounded inline-flex ltr:mr-3 rtl:ml-3 relative transition-all duration-150 bg-slate-100 dark:bg-slate-900">
                            <img src="assets/images/icon/ck-white.svg" alt=""
                                class="h-[10px] w-[10px] block m-auto opacity-0"></span>
                        <span class="text-500 dark:text-slate-400 text-sm leading-6 capitalize">Biarkan saya tetap
                            masuk</span>
                    </label>
                </div>
            </label>
            <a class="text-sm text-slate-800 dark:text-slate-400 leading-6 font-medium" href="forget-password-one.html">Lupa
                Password?
            </a>
        </div>
        <button id="login-btn-load" class="btn hidden justify-center w-full text-center btn-success" disabled>
            <iconify-icon class="text-xl spin-slow ltr:mr-2 rtl:ml-2 relative top-[1px]" icon="line-md:loading-twotone-loop"
                style="top: 4px;"></iconify-icon>
            <span>Sedang Masuk</span>
        </button>
        <button id="login-btn" class="btn btn-success inline-flex justify-center w-full text-center">
            <span>Masuk<span>
        </button>
    </form>
@endsection

@section('content-form-footer')
    <div class="md:max-w-[345px] mx-auto font-normal text-slate-500 dark:text-slate-400 mt-6 uppercase text-sm">
        Tidak punya akun?
        <a href="/register" class="text-slate-900 dark:text-white font-medium hover:underline">
            Daftar
        </a>
    </div>
@endsection

@section('custom-script')
    <script>
        $(function() {

            $('#login-btn').show()
            $('#login-btn-load').hide()

            $("form").submit(function() {
                $('#login-btn').hide()
                $('#login-btn-load').show()
            });

            $(".login-alert").click(function() {
                $('.login-alert-main').remove()
            })

            $('#passShow').on('click', function() {
                const el = $(this)
                const isShow = el.data('show')

                if (isShow == '0') {
                    el.data('show', '1')
                    el.attr('icon', 'heroicons-outline:eye')
                    $('#password').attr('type', 'text')
                } else {
                    el.data('show', '0')
                    el.attr('icon', 'heroicons-solid:eye-off')
                    $('#password').attr('type', 'password')
                }
            })
        });
    </script>
@endsection

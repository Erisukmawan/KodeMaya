@extends('auth.layout')

@section('title')
    <title>KodeMaya | Daftar</title>
@endsection

@section('content-form-header')
    <div class="text-center 2xl:mb-10 mb-4">
        <h4 class="font-medium">Daftar Mentor</h4>
        <div class="text-slate-500 text-base">
            Daftarkan akunmu untuk memulai menggunakan KodeMaya
        </div>
    </div>
@endsection

@section('content-form')
    @if ($message = Session::get('success'))
        <div class="p-6 register-alert-main">
            <div class="py-[18px] px-5 font-normal text-sm rounded-md bg-success-500 text-white">
                <div class="flex items-center space-x-3 rtl:space-x-reverse">
                    <iconify-icon class="text-2xl flex-0" icon="system-uicons:target"></iconify-icon>
                    <p class="flex-1 font-Inter">
                        {{ $message }}
                    </p>
                    <div class="flex-0 text-xl cursor-pointer register-alert">
                        <iconify-icon icon="line-md:close"></iconify-icon>
                    </div>
                </div>
            </div>
        </div>
    @endif

    @if ($errors->any())
        <div class="p-6 register-alert-main">
            <div class="py-[18px] px-5 font-normal text-sm rounded-md bg-danger-500 text-white">
                <div class="flex items-center space-x-3 rtl:space-x-reverse">
                    <iconify-icon class="text-2xl flex-0" icon="system-uicons:target"></iconify-icon>
                    <p class="flex-1 font-Inter">
                        {{ $errors->first() }}
                    </p>
                    <div class="flex-0 text-xl cursor-pointer register-alert">
                        <iconify-icon icon="line-md:close"></iconify-icon>
                    </div>
                </div>
            </div>
        </div>
    @endif

    <form class="space-y-4" action="{{ route('register_mentor_process') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="fromGroup">
            <label class="block capitalize form-label">Nama Lengkap</label>
            <div class="relative ">
                <input type="text" name="nama" class="form-control py-2" placeholder="Masukkan Nama Lengkap" required>
            </div>
        </div>
        <div class="fromGroup">
            <label class="block capitalize form-label">email</label>
            <div class="relative ">
                <input type="email" name="email" class="form-control py-2" placeholder="Masukkan Email" required>
            </div>
        </div>
        <div class="fromGroup">
            <label class="block capitalize form-label">Nomor Telepon</label>
            <div class="relative ">
                <input type="number" name="telp" class="form-control py-2" placeholder="Masukkan Nomor Telepone Aktif"
                    required>
            </div>
        </div>
        <div class="fromGroup">
            <label class="block capitalize form-label">alamat</label>
            <div class="relative ">
                <textarea type="text" name="alamat" class="form-control py-2" placeholder="Masukkan Alamat Domisili" required></textarea>
            </div>
        </div>
        <div class="fromGroup">
            <label class="block capitalize form-label">Keahlian</label>
            <div class="relative ">
                <select name="keahlian" id="keahlian" class="form-control w-full mt-2">
                    <option selected="Selected" disabled="disabled" value="none"
                        class="py-1 inline-block font-Inter font-normal text-sm text-slate-600">Select an option</option>
                    <option value="Website" class="py-1 inline-block font-Inter font-normal text-sm text-slate-600">Website
                    </option>
                    <option value="Desktop" class="py-1 inline-block font-Inter font-normal text-sm text-slate-600">Desktop
                    </option>
                    <option value="UI/UX" class="py-1 inline-block font-Inter font-normal text-sm text-slate-600">UI / UX
                    </option>
                    <option value="Mobile" class="py-1 inline-block font-Inter font-normal text-sm text-slate-600">Mobile
                    </option>
                    <option value="AI" class="py-1 inline-block font-Inter font-normal text-sm text-slate-600">
                        Artificial Intellegent / Machine Learning</option>
                </select>
            </div>
        </div>
        <div class="fromGroup">
            <label class="block capitalize form-label" style="text-transform: none">CV dan Portfolio (Ekstensi: .zip, .rar,
                .7z) - Max 25MB</label>
            <div class="relative ">
                <input type="file" name="dokumen" class="form-control py-2" accept=".zip,.rar,.7z,.tar.gz" required>
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

        <div class="fromGroup">
            <label class="block capitalize form-label">confirm password</label>
            <div class="relative ">
                <input type="password" id="passwordcf" name="password_confirmation" class="form-control py-2"
                    placeholder="Konfirmasi Password" required>
                <button id="passIconcf" class="passIcon absolute top-2.5 right-3 text-slate-300 text-xl p-0 leading-none"
                    type="button">
                    <iconify-icon id="passConfirmShow" data-show="0" class="text-slate-500 dark:text-slate-300"
                        icon="heroicons-solid:eye-off"></iconify-icon>
                </button>
            </div>
        </div>
        <div class="flex justify-between">
            <label class="flex items-center cursor-pointer">
                <div class="checkbox-area mr-2 sm:mr-4 mt-2">
                    <label class="inline-flex items-center cursor-pointer">
                        <input type="checkbox" class="hidden" name="accept" id="check" required="required">
                        <span
                            class="h-4 w-4 border flex-none border-slate-100 dark:border-slate-800 rounded inline-flex ltr:mr-3 rtl:ml-3 relative transition-all duration-150 bg-slate-100 dark:bg-slate-900">
                            <img src="assets/images/icon/ck-white.svg" alt=""
                                class="h-[10px] w-[10px] block m-auto opacity-0"></span>
                        <span class="text-500 dark:text-slate-400 text-sm leading-6 capitalize">
                            Terima
                            <a href="{{ route('syarat') }}" class="text-primary-500 hover:underline">Syarat &
                                Ketentuan</a>
                            dan
                            <a href="{{ route('kebijakan') }}" class="text-primary-500 hover:underline">Kebijakan
                                Privasi</a>
                             Kami
                        </span>
                    </label>
                </div>
            </label>
        </div>
        <button id="buatakun" class="btn btn-secondary w-full text-center" style="cursor:no-drop" disabled>Buat
            Akun</button>
        <button id="buatakunload" class="btn hidden justify-center w-full text-center btn-success" style="cursor:no-drop"
            disabled>
            Loading
            <iconify-icon class="text-xl spin-slow ltr:mr-2 rtl:ml-2 relative top-[1px]"
                icon="line-md:loading-twotone-loop" style="top: 4px;"></iconify-icon>
        </button>
    </form>
@endsection

@section('content-form-footer')
    <div class="md:max-w-[345px] mx-auto font-normal text-slate-500 dark:text-slate-400 mt-6 uppercase text-sm">
        Sudah pernah mendaftar?
        <a href="/login" class="text-slate-900 dark:text-white font-medium hover:underline">
            Masuk
        </a>
    </div>
@endsection


@section('custom-script')
    <script>
        $(function() {
            $(".register-alert").click(function() {
                $('.register-alert-main').remove()
            })

            $('#buatakun').show()
            $('#buatakunload').hide()

            $("form").submit(function() {
                $('#buatakun').hide()
                $('#buatakunload').show()
            });

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

            $('#passConfirmShow').on('click', function() {
                const el = $(this)
                const isShow = el.data('show')

                if (isShow == '0') {
                    el.data('show', '1')
                    el.attr('icon', 'heroicons-outline:eye')
                    $('#passwordcf').attr('type', 'text')
                } else {
                    el.data('show', '0')
                    el.attr('icon', 'heroicons-solid:eye-off')
                    $('#passwordcf').attr('type', 'password')
                }
            })

            $('#check').on('change', function() {
                const el = $(this)
                const isChecked = el.is(':checked')
                const tombolRegister = $('#buatakun')

                if (isChecked) {
                    tombolRegister.attr('disabled', false)
                    tombolRegister.toggleClass('btn-success');
                    tombolRegister.toggleClass('btn-default');
                    tombolRegister.css('cursor', 'default')
                } else {
                    tombolRegister.attr('disabled', 'disabled')
                    tombolRegister.toggleClass('btn-default');
                    tombolRegister.toggleClass('btn-success');
                    tombolRegister.css('cursor', 'no-drop')
                }
            })
        });
    </script>
@endsection

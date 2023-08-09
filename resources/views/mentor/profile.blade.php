@extends('mentor/template')


@section('main-content')
    <div class="grid grid-cols-12 gap-5">
        <!-- Basic Inputs -->
        <div class="card lg:col-span-3 col-span-12">
            <div class="card-body flex flex-col p-6">
                <div class="card-text h-full space-y-4">
                    <div
                        class="profile-wrap px-[35px] pb-10 md:pt-[84px] pt-10 rounded-lg bg-white dark:bg-slate-800 lg:space-y-0 space-y-6 justify-between items-end relative z-[1]">
                        <div
                            class="bg-slate-900 dark:bg-slate-700 absolute left-0 top-0 md:h-1/2 h-[150px] w-full z-[-1] rounded-t-lg">
                        </div>
                        <div class="profile-box flex-none text-center">
                            <div class="md:space-x-6 rtl:space-x-reverse">
                                <div class="flex-none">
                                    <form id="pic_form" action="{{ route('change_picture') }}" method="post"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div
                                            class="md:h-[186px] md:w-[186px] h-[140px] w-[140px] ml-auto mr-auto mb-4 rounded-full ring-4 ring-slate-100 relative">
                                            <img id="profile_pic"
                                                src="{{ Auth::guard('webmentor')->user()->foto_profil ? Auth::guard('webmentor')->user()->foto_profil : url('assets/images/avatar/av-1.svg') }}"
                                                alt="" class="w-full h-full object-cover rounded-full bg-white">
                                            <button id="change_image"
                                                class="absolute right-2 h-8 w-8 bg-slate-50 text-slate-600 rounded-full shadow-sm flex flex-col items-center justify-center md:top-[140px] top-[100px]">
                                                <iconify-icon icon="heroicons:pencil-square"></iconify-icon>
                                            </button>
                                            <input type="file" id="img_upload" name="image"
                                                accept=".gif,.jpg,.jpeg,.png" style="display:none" />
                                            <input type="submit" style="display: none">
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="">
                                <div class="text-2xl font-medium text-slate-900 dark:text-slate-200 mb-[3px]">
                                    {{ Auth::guard('webmentor')->user()->nama }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex-1">
                    <div class="text-base text-slate-900 dark:text-slate-300 font-medium mb-1">
                        Email
                    </div>
                    <div class="text-sm text-slate-600 font-light dark:text-slate-300">
                        {{ Auth::guard('webmentor')->user()->email }}
                    </div>
                </div>
                <div class="flex-1 mt-4">
                    <div class="text-base text-slate-900 dark:text-slate-300 font-medium mb-1">
                        Keahlian
                    </div>
                    <div class="text-sm text-slate-600 font-light dark:text-slate-300">
                        {{ Auth::guard('webmentor')->user()->keahlian }}
                    </div>
                </div>
                <div class="flex-1 mt-4">
                    <div class="text-base text-slate-900 dark:text-slate-300 font-medium mb-1">
                        No Telepon
                    </div>
                    <div class="text-sm text-slate-600 font-light dark:text-slate-300">
                        {{ Auth::guard('webmentor')->user()->telp }}
                    </div>
                </div>
                <div class="flex-1 mt-4">
                    <div class="text-base text-slate-900 dark:text-slate-300 font-medium mb-1">
                        Dokumen
                    </div>
                    <div class="text-sm text-slate-600 font-light dark:text-slate-300">
                        <a href="{{ Auth::guard('webmentor')->user()->dokumen }}" target="_blank"
                            style="text-decoration: underline;">Klik untuk download</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sized Inputs -->
        <div class="card lg:col-span-9 col-span-12">
            <div class="lg:col-span-8 col-span-12 space-x-3">
                <div class="card">
                    <header class="card-header">
                        <div class="flex space-x-3 items-center rtl:space-x-reverse">
                            <div
                                class="flex-none h-8 w-8 rounded-full bg-primary-500 text-white flex flex-col items-center justify-center text-lg">
                                <iconify-icon icon="heroicons:user"></iconify-icon>
                            </div>
                            <div class="flex-1 text-base text-slate-900 dark:text-white font-medium">
                                Profile Settings
                            </div>
                        </div>
                    </header>
                    <div class="card-body p-6">
                        @if ($message = Session::get('success'))
                            <div class="p-6 panel-alert-main">
                                <div class="py-[18px] px-5 font-normal text-sm rounded-md bg-success-500 text-white">
                                    <div class="flex items-center space-x-3 rtl:space-x-reverse">
                                        <iconify-icon class="text-2xl flex-0" icon="system-uicons:target"></iconify-icon>
                                        <p class="flex-1 font-Inter">
                                            {{ $message }}
                                        </p>
                                        <div class="flex-0 text-xl cursor-pointer panel-alert">
                                            <iconify-icon icon="line-md:close"></iconify-icon>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif

                        @if ($errors->any())
                            <div class="p-6 panel-alert-main">
                                <div class="py-[18px] px-5 font-normal text-sm rounded-md bg-danger-500 text-white">
                                    <div class="flex items-center space-x-3 rtl:space-x-reverse">
                                        <iconify-icon class="text-2xl flex-0" icon="system-uicons:target"></iconify-icon>
                                        <p class="flex-1 font-Inter">
                                            {{ $errors->first() }}
                                        </p>
                                        <div class="flex-0 text-xl cursor-pointer panel-alert">
                                            <iconify-icon icon="line-md:close"></iconify-icon>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                        <div class="space-y-9">
                            <div class="text-slate-600 dark:text-slate-300 text-sm">
                                <form action="{{ route('change_profile') }}" method="post">
                                    @csrf
                                    <div class="input-area">
                                        <label for="textFormatter" class="form-label">Nama</label>
                                        <div class="relative space-y-6">
                                            <input id="nama" name="nama" type="text" class="form-control"
                                                placeholder="Nama Lengkap"
                                                value="{{ Auth::guard('webmentor')->user()->nama }}">
                                            <!-- <span class="text-xs font-Inter font-normal text-slate-400 mt-2 inline-block">We will convert your text to lowercase instantly</span> -->
                                            <span class="block"></span>
                                        </div>
                                    </div>
                                    <div class="input-area">
                                        <label for="textFormatter" class="form-label">Alamat</label>
                                        <div class="relative space-y-6">
                                            <input id="alamat" type="text" name="alamat"
                                                value="{{ Auth::guard('webmentor')->user()->alamat }}" class="form-control"
                                                placeholder="Alamat Anda">
                                            <span class="block"></span>
                                        </div>
                                    </div>
                                    <div class="input-area">
                                        <label for="textFormatter" class="form-label">Password</label>
                                        <div class="relative space-y-6">
                                            <input id="password" name="password" type="text" class="form-control"
                                                value="" placeholder="Isi hanya jika ingin mengganti password.">
                                            <!-- <span class="text-xs font-Inter font-normal text-slate-400 mt-2 inline-block">We will convert your text to lowercase instantly</span> -->
                                            <span class="block"></span>
                                        </div>
                                    </div>
                                    <div class="card-text h-full space-y-6 mb-8">

                                    </div>
                                    <button
                                        class="flex w-full items-center justify-center btn-success bg-white btn-sm btn">
                                        <div class="flex-1 mx-8 text-base text-slate-900 text-black font-medium">
                                            Simpan
                                        </div>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="card">
                <div class="card-body p-6">
                    <div class="space-y-6">
                        <div class="flex space-x-3 items-center rtl:space-x-reverse">
                            <div
                                class="flex-none h-8 w-8 rounded-full bg-primary-500 text-slate-300 flex flex-col items-center justify-center text-lg">
                                <iconify-icon icon="solar:document-outline"></iconify-icon>
                            </div>
                            <div class="flex-1 text-base text-slate-900 dark:text-white font-medium">
                                Document
                            </div>
                        </div>
                        <div class="text-slate-600 dark:text-slate-300 text-sm">
                            <embed type="application/pdf"
                                src="http://infolab.stanford.edu/pub/papers/google.pdf#toolbar=0&navpanes=0&scrollbar=0"
                                class="w-full" height="400"></embed>
                            <label for="textFormatter" class="mt-8 form-label">Ganti Dokumen</label>
                            <input id="nama_projek" type="file" class="form-control" placeholder="08xxxxxxxxx">
                        </div>
                        <button class="flex w-full items-center justify-center btn-success bg-white btn-sm btn">
                            <div class="flex-1 mx-8 text-base text-slate-900 text-black font-medium">
                                Ubah Dokumen
                            </div>
                        </button>
                        </a>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
@endsection

@section('custom-script')
    <script>
        $(function() {
            $(".panel-alert").click(function() {
                $('.panel-alert-main').remove()
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

            $('#pic_form').on('submit', function(e) {
                e.preventDefault();
                if ($("#img_upload").val()) {
                    e.submit()
                }
            })

            $("#img_upload").change(function() {
                var input = this;
                var url = $(this).val();
                var ext = url.substring(url.lastIndexOf('.') + 1).toLowerCase();
                if (input.files && input.files[0] && (ext == "gif" || ext == "png" || ext == "jpeg" ||ext == "jpg")) {
                    console.log('ya', input.files)
                    $('#pic_form')[0].submit()
                    // $('#pic_form input[type=submit]').trigger('submit')
                }
            });

            $('#change_image').click(function() {
                $('#img_upload').trigger('click')
            });
        });
    </script>
@endsection

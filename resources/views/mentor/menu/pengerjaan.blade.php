@extends('mentor.template')
@section('main-content')
    <form action="{{ route('mentor.menu.penyerahan-pesanan.pengerjaan_pemesanan.update') }}" method="post">
        @csrf
        <div class="card xl:col-span-2 rounded-md bg-white dark:bg-slate-800 lg:h-full shadow-base">
            <div class="card-body flex flex-col p-6">
                <header
                    class="flex space-x-3 mb-5 items-center border-b border-slate-100 dark:border-slate-700 pb-5 -mx-6 px-6">
                    <a href="{{ route('mentor.menu.penyerahan-pesanan') }}"
                        class="inline-flex items-center space-x-1 rtl:space-x-reverse text-sm capitalize font-medium text-slate-600
                                dark:text-slate-300">
                        <iconify-icon icon="heroicons:arrow-left"></iconify-icon>
                        <span class="">Kembali </span>
                    </a>
                    <div class="flex-1">
                        <div class="card-title text-slate-900 dark:text-white">Upload Projek</div>
                        <input type="text" name="id_pemesanan" value="{{ $pesanan->id_pemesanan }}"
                            style="display: none;">
                    </div>
                </header>
                <div class="card-text h-full space-y-3 mb-3">
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
                </div>
                <div
                    class="py-[18px] px-6 font-normal space-y-8 font-Inter text-sm rounded-md bg-warning-500 bg-opacity-[14%] text-warning-500">
                    <div class="flex items-start space-x-3 rtl:space-x-reverse">
                        <div class="flex-1 text-center">
                            Pesanan harus diselesaikan minimal 2 hari sebelum tenggat waktu untuk diperiksa oleh pegawai
                        </div>
                    </div>
                </div>
                <div class="input-area">
                    <label for="textFormatter" class="form-label">Nama projek</label>
                    <div class="relative">
                        <input id="nama_projek" type="text" class="form-control" placeholder="Nama Projek"
                            style="display: none;">
                        <span
                            class="text-sm font-Inter font-normal text-slate-400 mt-2 inline-block">{{ $pesanan->nama_projek }}</span>
                        <span class="block"></span>
                        <br>
                    </div>
                </div>
                <div class="input-area">
                    <label for="textFormatter" class="form-label">Deskripsi</label>
                    <div class="relative">
                        <input id="deskripsi_projek" type="text" class="form-control" placeholder="Deskripsi Projek"
                            style="display: none;">
                        <span
                            class="text-sm font-Inter font-normal text-slate-400 mt-2 inline-block">{!! $pesanan->deskripsi_projek !!}</span>
                        <span class="block"></span>
                        <br>
                    </div>
                </div>
                <div class="input-area">
                    <label for="textFormatter" class="form-label">Waktu Kontrak</label>
                    <div class="relative">
                        <input id="waktu_kontrak" type="date" class="form-control" style="display: none;"
                            value="{{ $pesanan->waktu_kontrak }}">
                        <span id="text_waktu_kontrak"
                            class="text-sm font-Inter font-normal text-slate-400 mt-2 inline-block">{{ $pesanan->waktu_kontrak }}</span>
                        <span class="block"></span>
                        <br>
                    </div>
                </div>
                <div class="input-area">
                    <label for="textFormatter" class="form-label">Tenggat Waktu</label>
                    <div class="relative ">
                        <span
                            class="text-sm font-Inter font-normal text-slate-400 mt-2 inline-block">{{ $pesanan->tenggat_waktu }}</span>
                        <span class="block"></span>
                        <br>
                    </div>
                </div>

                <div class="card-text h-full mt-8 space-y-8 mb-3">
                    <div class="input-area">
                        <label for="textFormatter" class="form-label">Ubah Status</label>
                        <div class="relative">
                            <select name="status_pesanan" id="basicSelect" class="form-control w-full mt-2">
                                <option selected="Selected" disabled="disabled" value="none"
                                    class="py-1 inline-block font-Inter font-normal text-sm text-slate-600">
                                    {{ $pesanan->status_pesanan }}
                                </option>
                                @if ($pesanan->status_pesanan != 'DIPERIKSA')
                                    <option value="DIPERIKSA"
                                        class="py-1 inline-block font-Inter font-normal text-sm text-slate-600">
                                        DIPERIKSA (Pemeriksaan Pesanan oleh admin)
                                    </option>
                                @endif
                            </select>
                        </div>
                    </div>
                </div>

                <div class="card-text h-full space-y-8 mb-3">
                    <div class="input-area">
                        <p for="textFormatter" class="">Deskripsi Aplikasi</p>
                        <span class="text-xs text-normal">*jelaskan tahapan installasi dan penggunaan aplikasi</span>
                        <br>
                        <div class="relative">
                            <!-- <input id="nama_projek" type="text" class="form-control" placeholder="Apa Nama projek Anda ?"> -->
                            <textarea id="DrowsTextarea" name="deskripsi_pemesanan" class="form-control" rows="5" placeholder="Text Area"></textarea>
                            <!-- <span class="text-xs font-Inter font-normal text-slate-400 mt-2 inline-block">We will convert your text to lowercase instantly</span> -->
                        </div>
                    </div>
                </div>
                <div class="card-text h-full space-y-9 mb-8">
                    <div class="input-area ">
                        <label for="textFormatter" class="form-label">Lampiran {!! $pesanan->file_projek
                            ? "(<a href='$pesanan->file_projek' target='_blank' style='text-decoration: underline;' class='text-primary-500 hover:text-secondary-500'>File Project Tersimpan</a>)"
                            : '' !!}</label>
                        <div class="relative">
                            <div class="card-text h-full space-y-6">
                                <div
                                    class="w-full  text-center border-dashed border border-secondary-500 rounded-md py-[52px] flex justify-center items-center">
                                    <form action="/" role="presentation" tabindex="0"
                                        class="dropzone border-none dark:bg-slate-800">
                                    </form>
                                    <form action="/" role="presentation" tabindex="0"
                                        class="dropzone border-none dark:bg-slate-800" id="projectUpload">
                                        @csrf
                                        <div class="dz-default dz-message">
                                            <button class="dz-button" type="button">
                                                <img src="{{ url('assets/images/svg/upload.svg') }}" alt=""
                                                    class="mx-auto mb-4">
                                                <p class="text-sm text-slate-500 dark:text-slate-300">Seret file atau klik
                                                    untuk mengunggah.</p>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @if ($pesanan->status_pesanan != 'DIPERIKSA')
                    <button class="flex w-full items-center justify-center btn-success bg-white btn-sm btn">
                        <div class="flex-1 mx-8 text-base text-slate-900 text-white font-medium">
                            Simpan
                        </div>
                    </button>
                @endif
            </div>
        </div>
    </form>
@endsection


@section('custom-script')
    <script>
        const mode = $('html').attr('class');

        let tinyConfig = {
            selector: '#DrowsTextarea',
            plugins: 'anchor autolink emoticons link lists table visualblocks wordcount checklist typography image',
            toolbar: 'undo redo | formatselect| bold italic | image | alignleft aligncenter alignright | indent outdent | bullist numlist | code'
        }
        if (mode == 'dark') {
            tinyConfig['skin'] = 'oxide-dark';
            tinyConfig['content_css'] = 'dark';
        }

        tinymce.init(tinyConfig);
    </script>
    <script>
        $(document).ready(function() {
            $("#projectUpload").dropzone({
                url: "{{ route('mentor.project.upload', ['id' => $pesanan->id_pemesanan]) }}",
                dictDefaultMessage: "",
                addRemoveLinks: true
            });
        })
    </script>
@endsection

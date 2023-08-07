@extends('customer.template')
@section('main-content')
    <form action="{{ route('customer.menu.pembayaran.process') }}" method="post" novalidate>
        @csrf
        <div class="card xl:col-span-3 rounded-md bg-white dark:bg-slate-800 lg:h-full shadow-base">
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
            <div class="card-body flex flex-col p-6">
                <div class="card-text h-full space-y-1">
                    <div class="grid lg:grid-cols-2 space-y-2 md:grid-cols-2 grid-cols-1 gap-4">
                        <div class="input-area mt-2 mb-2 space-y-1">
                            <div class="flex-1">
                                <div class="card-title text-slate-900 dark:text-white">Deskripsi Pesanan</div>
                            </div>
                            <input type="text" name="refcode" value="{{ $pemesanan->kode_referensi }}" hidden>
                            <input type="text" name="id_pemesanan" value="{{ $pemesanan->id_pemesanan }}" hidden>
                            <div class="relative">
                                <table style="b width:100%">
                                    <tr>
                                        <td style="width:28%">Penerima Jasa</td>
                                        <td style="width:1%">:</td>
                                        <td style="width:79%">{{ $pemesanan->nama_pelanggan }}</td>
                                    </tr>
                                    <tr>
                                        <td style="width:28%">Nama projek</td>
                                        <td style="width:1%">:</td>
                                        <td style="width:79%">{{ $pemesanan->nama_projek }}</td>
                                    </tr>
                                    <tr>
                                        <td style="width:28%">Kategori</td>
                                        <td style="width:1%">:</td>
                                        <td style="width:79%">{{ $pemesanan->kategori }}</td>
                                    </tr>
                                    <tr>
                                        <td style="width:28%">Waktu pembuatan</td>
                                        <td style="width:1%">:</td>
                                        <td style="width:79%">{{ explode(' ', $pemesanan->waktu_kontrak)[0] }}</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="input-area space-y-1">
                            <div class="flex-1">
                                <div class="card-title text-slate-900 dark:text-white">Ringkasan Harga</div>
                            </div>
                            <div class="relative">
                                <table style="b width:100%">
                                    <tr>
                                        <td style="width:28%">Harga</td>
                                        <td style="width:1%">:</td>
                                        <td id="idr1" style="width:79%">{{ $pemesanan->total_harga }}</td>
                                    </tr>
                                    <tr>
                                        <td style="width:28%">Biaya Admin</td>
                                        <td style="width:1%">:</td>
                                        <td id="idr2" style="width:79%">5000</td>
                                    </tr>
                                    <tr>
                                        <td style="width:28%">Biaya Layanan</td>
                                        <td style="width:1%">:</td>
                                        <input type="number" id="biaya_layanan" hidden>
                                        <td style="width:79%" id="biaya_layanan_td">(Mohon pilih metode pembayaran)</td>
                                    </tr>
                                    <tr class="font-bold text-lg">
                                        <td style="width:28%">Total harga</td>
                                        <td style="width:1%">:</td>
                                        <input type="number" id="harga" value="{{ $pemesanan->total_harga + 5000 }}"
                                            hidden>
                                        <input type="number" id="total_harga" name="total_harga"
                                            value="{{ $pemesanan->total_harga + 5000 }}" hidden>
                                        <td id="total_harga_td" style="width:79%">{{ $pemesanan->total_harga + 5000 }}</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- metode pembayaran -->
        <div class="card xl:col-span-2 rounded-md bg-white dark:bg-slate-800 lg:h-full shadow-base">
            <div class="card-body flex flex-col p-6">
                <header class="flex mb-5 items-center border-b border-slate-100 dark:border-slate-700 pb-5 -mx-6 px-6">
                    <div class="flex-1">
                        <div class="card-title text-slate-900 dark:text-white">Pilih Metode Pembayaran</div>
                    </div>
                </header>

                <div class="card-text h-full space-y-4">
                    <div class="card">
                        <span>Virtual Account</span>
                        <div class="mt-4 grid lg:grid-cols-6 md:grid-cols-4 sm:grid-cols-1 gap-3">
                            @if (isset($payment_method->data))
                                @foreach ($payment_method->data as $payment)
                                    @if (strtolower($payment->group) == 'virtual account')
                                        <label class="cursor-pointer ">
                                            <div
                                                class="primary-radio text-center bg-slate-100 dark:bg-slate-400 rounded hover:bg-slate-200 dark:hover:bg-slate-600 p-2">
                                                <div class="flex justify-center mb-2">
                                                    <img src="{{ $payment->icon_url }}" alt="user"
                                                        data-tippy-content="{{ $payment->name }}"
                                                        class="toolTip onTop block w-auto h-8 object-cover border border-transparent">
                                                </div>
                                                <input type="radio" class="hidden" name="payment_method"
                                                    data-type="{{ $payment->type }}"
                                                    data-total_fee_flat="{{ $payment->total_fee->flat }}"
                                                    data-total_fee_percent="{{ $payment->total_fee->percent }}"
                                                    value="{{ $payment->code }}">
                                                <span
                                                    class="flex-none bg-white dark:bg-slate-200 rounded-full border inline-flex relative transition-all duration-150 h-[16px] w-[16px] border-slate-400 dark:border-slate-600 dark:ring-slate-700"></span>
                                            </div>
                                        </label>
                                    @endif
                                @endforeach
                            @endif
                        </div>
                    </div>
                    <div class="card">
                        <span>E-Wallet</span>
                        <div class="mt-4 grid lg:grid-cols-6 md:grid-cols-4 sm:grid-cols-1 gap-3">
                            @if (isset($payment_method->data))
                                @foreach ($payment_method->data as $payment)
                                    @if (strtolower($payment->group) == 'e-wallet')
                                        <label class="cursor-pointer ">
                                            <div
                                                class="primary-radio text-center  bg-slate-100 dark:bg-slate-400 rounded hover:bg-slate-200 dark:hover:bg-slate-600 p-2">
                                                <div class="flex justify-center mb-2">
                                                    <img src="{{ $payment->icon_url }}" alt="user"
                                                        data-tippy-content="{{ $payment->name }}"
                                                        class="toolTip onTop block w-auto h-8 object-cover border border-transparent">
                                                </div>
                                                <input type="radio" class="hidden" name="payment_method"
                                                    data-type="{{ $payment->type }}"
                                                    data-total_fee_flat="{{ $payment->total_fee->flat }}"
                                                    data-total_fee_percent="{{ $payment->total_fee->percent }}"
                                                    value="{{ $payment->code }}">
                                                <span
                                                    class="flex-none bg-white dark:bg-slate-200 rounded-full border inline-flex relative transition-all duration-150 h-[16px] w-[16px] border-slate-400 dark:border-slate-600 dark:ring-slate-700"></span>
                                            </div>
                                        </label>
                                    @endif
                                @endforeach
                            @endif
                        </div>
                    </div>
                    <div class="card">
                        <span>Convenience Store</span>
                        <div class="mt-4 grid lg:grid-cols-6 md:grid-cols-4 sm:grid-cols-1 gap-3">
                            @if (isset($payment_method->data))
                                @foreach ($payment_method->data as $payment)
                                    @if (strtolower($payment->group) == 'convenience store')
                                        <label class="cursor-pointer ">
                                            <div
                                                class="primary-radio text-center bg-slate-100 dark:bg-slate-400 rounded hover:bg-slate-200 dark:hover:bg-slate-600 p-2">
                                                <div class="flex justify-center mb-2">
                                                    <img src="{{ $payment->icon_url }}" alt="user"
                                                        data-tippy-content="{{ $payment->name }}"
                                                        class="toolTip onTop block w-auto h-8 object-cover border border-transparent">
                                                </div>
                                                <input type="radio" class="hidden" name="payment_method"
                                                    data-type="{{ $payment->type }}"
                                                    data-total_fee_flat="{{ $payment->total_fee->flat }}"
                                                    data-total_fee_percent="{{ $payment->total_fee->percent }}"
                                                    value="{{ $payment->code }}">
                                                <span
                                                    class="flex-none bg-white dark:bg-slate-200 rounded-full border inline-flex relative transition-all duration-150 h-[16px] w-[16px] border-slate-400 dark:border-slate-600 dark:ring-slate-700"></span>
                                            </div>
                                        </label>
                                    @endif
                                @endforeach
                            @endif
                        </div>
                    </div>
                    @if (!isset($payment_method->data))
                        <span>Terdapat kesalahan, kami akan memperbaikinya segera.</span>
                    @endif
                </div>
            </div>
        </div>

        <button type="submit" class="flex w-full mt-5 items-center justify-center btn-primary bg-white btn-sm btn">
            <div class="flex-1 mx-8 text-base text-slate-900 text-white font-medium">Lanjutkan Pembayaran
            </div>
        </button>
    </form>
@endsection

@section('custom-script')
    <script>
        $(document).ready(function() {
            $('input[type=radio]').change(function() {
                var harga = parseInt($('#harga').val());
                var type = $(this).data('type');
                var total_fee_flat = parseInt($(this).data('total_fee_flat'));
                var total_fee_percent = parseFloat($(this).data('total_fee_percent'));
                var total_percent = harga * total_fee_percent
                var total_harga = harga + total_fee_flat + total_fee_percent

                $('#biaya_layanan').val(total_fee_flat + total_percent)
                $('#biaya_layanan_td').text((total_fee_flat > 0 ? currency.format(total_fee_flat) : '') + (
                    total_fee_percent > 0 ? ((total_fee_flat > 0 ? " + " : '') + total_fee_percent +
                        '%') : ''))
                $('#total_harga').val(total_harga)
                $('#total_harga_td').text(currency.format(total_harga))
            });

            $('#idr1').text(currency.format(parseInt($('#idr1').text())))
            $('#idr2').text(currency.format(parseInt($('#idr2').text())))
            $('#total_harga_td').text(currency.format(parseInt($('#total_harga_td').text())))
        })
    </script>
@endsection

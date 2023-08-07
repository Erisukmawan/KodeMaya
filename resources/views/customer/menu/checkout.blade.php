@extends('customer.template')
@section('main-content')
    <div class="card xl:col-span-3 rounded-md bg-white dark:bg-slate-800 lg:h-full shadow-base">
        <div class="card-body flex flex-col p-6">
            <div class="card-text h-full space-y-1">
                <div class="grid lg:grid-cols-2 space-y-2 md:grid-cols-2 grid-cols-1 gap-4">
                    <div class="input-area mt-2 mb-2 space-y-1">
                        <div class="flex-1">
                            <div class="card-title text-slate-900 dark:text-white">Deskripsi Pesanan</div>
                        </div>
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
                                    <td style="width:28%">Tenggat Waktu</td>
                                    <td style="width:1%">:</td>
                                    <td style="width:79%">{{ explode(' ', $pemesanan->tenggat_waktu)[0] }}</td>
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
                                    <td style="width:28%">Biaya Aplikasi</td>
                                    <td style="width:1%">:</td>
                                    <td style="width:79%">(Mohon pilih metode pembayaran)</td>
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
                                        <div class="primary-radio text-center bg-slate-100 dark:bg-slate-400 rounded hover:bg-slate-200 dark:hover:bg-slate-600 p-2">
                                            <div class="flex justify-center mb-2">
                                                <img src="{{ $payment->icon_url }}" alt="user"
                                                    data-tippy-content="{{ $payment->name }}"
                                                    class="toolTip onTop block w-auto h-8 object-cover border border-transparent">
                                            </div>
                                            <input type="radio" class="hidden" name="paymentRadio[]" value="bni">
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
                                        <div class="primary-radio text-center  bg-slate-100 dark:bg-slate-400 rounded hover:bg-slate-200 dark:hover:bg-slate-600 p-2">
                                            <div class="flex justify-center mb-2">
                                                <img src="{{ $payment->icon_url }}" alt="user"
                                                    data-tippy-content="{{ $payment->name }}"
                                                    class="toolTip onTop block w-auto h-8 object-cover border border-transparent">
                                            </div>
                                            <input type="radio" class="hidden" name="paymentRadio[]" value="bni">
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
                                        <div class="primary-radio text-center bg-slate-100 dark:bg-slate-400 rounded hover:bg-slate-200 dark:hover:bg-slate-600 p-2">
                                            <div class="flex justify-center mb-2">
                                                <img src="{{ $payment->icon_url }}" alt="user"
                                                    data-tippy-content="{{ $payment->name }}"
                                                    class="toolTip onTop block w-auto h-8 object-cover border border-transparent">
                                            </div>
                                            <input type="radio" class="hidden" name="paymentRadio[]" value="bni">
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

    <!-- novirtual -->
    <div class="card xl:col-span-2 rounded-md bg-white dark:bg-slate-800 lg:h-full shadow-base">
        <div class="card-body flex flex-col p-6">
            <header
                class="flex mb-5 pb-5 -mx-6 px-6 items-center  justify-center text-center border-b border-slate-100 dark:border-slate-700 ">
                <div class="flex">
                    <img src="{{ url('/assets/images/logo/BNI_logo.png') }}" alt="user"
                        class="block w-20 h-auto pr-3 border hover:border-white border-transparent justify-center place-content-center">
                    <span
                        class="text-slate-900 w-full font-Inter font-bold text-xl leading-6 capitalize dark:text-slate-300">BNI
                        Virtual Account</span>
                </div>
            </header>
            <span style="color: #c53030;"
                class="justify-center place-content-center text-center  bg-danger-300 text-slate-900 w-full font-Inter font-bold text-base rounded-xl space-y-8 dark:text-slate-300">Selesaikan
                Pembayaran Dalam 00:59:21</span>
            <div class="card-text h-full text-center mt-4">
                <div class="grid lg:grid-cols-3 space-y-1 md:grid-cols-3 grid-cols-1 gap-4">
                    <div class="input-area mt-2">
                        <label for="textFormatter" class="form-label">No Virtual Account</label>
                        <div class="relative">
                            <span
                                class="text-base font-Inter font-bold dark:text-slate-200 text-slate-900 mt-2 inline-block">09723481723</span>
                        </div>
                    </div>
                    <div class="input-area">
                        <label for="textFormatter" class="form-label">Nama Virtual Account</label>
                        <div class="relative">
                            <span
                                class="text-base font-Inter font-bold dark:text-slate-200 text-slate-900 mt-2 inline-block">{{ Auth::user()->nama }}</span>
                        </div>
                    </div>
                    <div class="input-area">
                        <label for="textFormatter" class="form-label">Nominal yang akan dibayarkan</label>
                        <div class="relative">
                            <span
                                class="text-base font-Inter font-bold dark:text-slate-200 text-slate-900 mt-2 inline-block">RP5,093,000</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <button class="flex w-full mt-5 items-center justify-center btn-primary bg-white btn-sm btn">
        <div class="flex-1 mx-8 text-base text-slate-900 text-white font-medium">Konfirmasi
        </div>
    </button>
    <!-- </div> -->
@endsection

@section('custom-script')
    <script>
        $(document).ready(function() {
            var hargaEl1 = $('#idr1')
            var hargaEl2 = $('#idr2')
            hargaEl1.text(currency.format(parseInt(hargaEl1.text())))
            hargaEl2.text(currency.format(parseInt(hargaEl2.text())))
        })
    </script>
@endsection

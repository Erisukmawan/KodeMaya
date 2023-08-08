@extends('customer.template')
@section('main-content')
    <div class="lg:flex justify-between flex-wrap items-center mb-6">
        <h4>
            {{ $pemesanan->status_pembayaran == 'TERBAYAR' ? 'Bukti Pembayaran' : 'Tagihan Pembayaran' }}
        </h4>
        <div class="flex lg:justify-end items-center flex-wrap space-xy-5">

            <button onclick="window.print()" type="button"
                class="invocie-btn inline-flex btn btn-sm whitespace-nowrap space-x-1 cursor-pointer bg-white dark:bg-slate-800
                    dark:text-slate-300 btn-md h-min text-sm font-normal text-slate-900 rtl:space-x-reverse">
                <span class="text-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true"
                        role="img" class="iconify iconify--heroicons" width="1em" height="1em" viewbox="0 0 24 24">
                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="1.5"
                            d="M6.72 13.829c-.24.03-.48.062-.72.096m.72-.096a42.415 42.415 0 0 1 10.56 0m-10.56 0L6.34
                                18m10.94-4.171c.24.03.48.062.72.096m-.72-.096L17.66 18m0 0l.229 2.523a1.125 1.125 0 0 1-1.12 1.227H7.231c-.662
                                0-1.18-.568-1.12-1.227L6.34 18m11.318 0h1.091A2.25 2.25 0 0 0 21 15.75V9.456c0-1.081-.768-2.015-1.837-2.175a48.055 48.055
                                0 0 0-1.913-.247M6.34 18H5.25A2.25 2.25 0 0 1 3 15.75V9.456c0-1.081.768-2.015 1.837-2.175a48.041 48.041 0 0 1
                                1.913-.247m10.5 0a48.536 48.536 0 0 0-10.5 0m10.5 0V3.375c0-.621-.504-1.125-1.125-1.125h-8.25c-.621 0-1.125.504-1.125
                                1.125v3.659M18 10.5h.008v.008H18V10.5Zm-3 0h.008v.008H15V10.5Z">
                        </path>
                    </svg>
                </span>
                <span>Print</span>
            </button>
        </div>
    </div>
    <div class="card ">
        <main class="card-body p-0">
            <div class="flex justify-between flex-wrap space-y-4 px-6 pt-6 bg-slate-50 dark:bg-slate-800 pb-6 rounded-t-md">
                <div>
                    <img src="{{ url('assets/images/logo/logo.svg') }}" alt="kodemaya logo" class="mb-10 dark_logo">
                    <div class="text-slate-500 dark:text-slate-300 font-normal leading-5 mt-4 text-sm">
                        Jl. Dipati Ukur No.112-116, Lebakgede,<br>
                        Kecamatan Coblong, Kota Bandung, <br>Jawa Barat 40132
                        <div class="flex space-x-2 mt-2 leading-[1] rtl:space-x-reverse">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                aria-hidden="true" role="img" class="iconify iconify--heroicons-outline" width="1em"
                                height="1em" viewbox="0 0 24 24">
                                <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M3 5a2 2 0 0 1 2-2h3.28a1 1 0 0 1 .948.684l1.498 4.493a1 1 0 0 1-.502 1.21l-2.257 1.13a11.042 11.042 0 0 0 5.516
                                        5.516l1.13-2.257a1 1 0 0 1 1.21-.502l4.493 1.498a1 1 0 0 1 .684.949V19a2 2 0 0 1-2 2h-1C9.716 21 3 14.284 3 6V5Z">
                                </path>
                            </svg>
                            <span>(62) 855-5903-8021</span>
                        </div>
                        <div class="mt-[6px] flex space-x-2 leading-[1] rtl:space-x-reverse">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                aria-hidden="true" role="img" class="iconify iconify--heroicons-outline" width="1em"
                                height="1em" viewbox="0 0 24 24">
                                <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d="m3 8l7.89 5.26a2 2 0 0 0 2.22 0L21 8M5 19h14a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2Z">
                                </path>
                            </svg>
                            <span>support@kodemaya.my.id</span>
                        </div>
                    </div>
                </div>
                <div>
                    <span class="block text-slate-900 dark:text-slate-300 font-medium leading-5 text-xl">Bill to:</span>
                    <div class="text-slate-500 dark:text-slate-300 font-normal leading-5 mt-4 text-sm">
                        {{ $pemesanan->nama_pelanggan }}
                        <br>
                        {{ $pemesanan->alamat_pelanggan }}<div class="flex space-x-2 mt-2 leading-[1] rtl:space-x-reverse">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                aria-hidden="true" role="img" class="iconify iconify--heroicons-outline" width="1em"
                                height="1em" viewbox="0 0 24 24">
                                <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M3 5a2 2 0 0 1 2-2h3.28a1 1 0 0 1 .948.684l1.498 4.493a1 1 0 0 1-.502 1.21l-2.257 1.13a11.042 11.042 0 0 0 5.516
                                        5.516l1.13-2.257a1 1 0 0 1 1.21-.502l4.493 1.498a1 1 0 0 1 .684.949V19a2 2 0 0 1-2 2h-1C9.716 21 3 14.284 3 6V5Z">
                                </path>
                            </svg>
                            <span>{{ $pemesanan->telp_pelanggan }}</span>
                        </div>
                        <div class="mt-[6px] flex space-x-2 leading-[1] rtl:space-x-reverse">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                aria-hidden="true" role="img" class="iconify iconify--heroicons-outline" width="1em"
                                height="1em" viewbox="0 0 24 24">
                                <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d="m3 8l7.89 5.26a2 2 0 0 0 2.22 0L21 8M5 19h14a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2Z">
                                </path>
                            </svg>
                            <span>{{ $pemesanan->email_pelanggan }}</span>
                        </div>
                    </div>
                </div>
                <div class="space-y-[2px]">
                    <span
                        class="block text-slate-900 dark:text-slate-300 font-medium leading-5 text-xl mb-4">Invoice:</span>
                    <h4 class="text-slate-600 font-medium dark:text-slate-300 text-xs uppercase">Invoice number:</h4>
                    <div class="text-slate-500 dark:text-slate-300 font-normal leading-5 text-sm">
                        #{{ $pemesanan->kode_referensi }}</div>
                    <h4 class="text-slate-600 font-medium dark:text-slate-300 text-xs uppercase">Expire Time</h4>
                    <div class="text-slate-500 dark:text-slate-300 font-normal leading-5 text-sm">
                        {{ date('Y-m-d H:i:s', $invoice->expired_time) }}</div>
                </div>
            </div>
            <div class="max-w-[980px] mx-auto shadow-base dark:shadow-none my-8 rounded-md overflow-x-auto">
                <div>
                    <table class="w-full border-collapse table-fixed dark:border-slate-700 dark:border">
                        <tr>
                            <th colspan="3"
                                class="bg-slate-50 dark:bg-slate-700 dark:text-slate-300 text-xs font-medium leading-4 uppercase text-slate-600
                                    ltr:text-left ltr:last:text-right rtl:text-right rtl:last:text-left">
                                <span class="block px-6 py-5 font-semibold">ITEM</span>
                            </th>
                            <th
                                class="bg-slate-50 dark:bg-slate-700 dark:text-slate-300 text-xs font-medium leading-4 uppercase text-slate-600
                                    ltr:text-left ltr:last:text-right rtl:text-right rtl:last:text-left">
                                <span class="block px-6 py-5 font-semibold">QTY</span>
                            </th>
                            <th
                                class="bg-slate-50 dark:bg-slate-700 dark:text-slate-300 text-xs font-medium leading-4 uppercase text-slate-600
                                    ltr:text-left ltr:last:text-right rtl:text-right rtl:last:text-left">
                                <span class="block px-6 py-5 font-semibold">PRICE</span>
                            </th>
                            <th
                                class="bg-slate-50 dark:bg-slate-700 dark:text-slate-300 text-xs font-medium leading-4 uppercase text-slate-600
                                    ltr:text-left ltr:last:text-right rtl:text-right rtl:last:text-left">
                                <span class="block px-6 py-5 font-semibold">TOTAL</span>
                            </th>
                        </tr>
                        @foreach ($invoice->order_items as $items)
                            <tr class="border-b border-slate-100 dark:border-slate-700">
                                <td colspan="3"
                                    class="text-slate-900 dark:text-slate-300 text-sm font-normal ltr:text-left ltr:last:text-right rtl:text-right
                                    rtl:last:text-left px-6 py-4">
                                    {{ $items->name }}</td>
                                <td
                                    class="text-slate-900 dark:text-slate-300 text-sm font-normal ltr:text-left ltr:last:text-right rtl:text-right
                                    rtl:last:text-left px-6 py-4">
                                    {{ $items->quantity }}</td>
                                <td
                                    class="idr-currency4 text-slate-900 dark:text-slate-300 text-sm font-normal ltr:text-left ltr:last:text-right rtl:text-right
                                    rtl:last:text-left px-6 py-4">
                                    {{ $pemesanan->total_harga }}</td>
                                <td
                                    class="idr-currency text-slate-900 dark:text-slate-300 text-sm font-normal ltr:text-left ltr:last:text-right rtl:text-right
                                    rtl:last:text-left px-6 py-4">
                                    {{ $pemesanan->total_harga }}</td>
                            </tr>
                        @endforeach

                    </table>
                    <div class="md:flex px-6 py-6 items-center">
                        <div class="flex-1 text-slate-500 dark:text-slate-300 text-sm">
                            <div class="text-xs py-4">
                                {!! $pemesanan->deskripsi_projek !!}
                            </div>
                            <div class="flex-none min-w-[270px] space-y-3">
                                <div class="flex justify-between">
                                    <span
                                        class="font-medium text-slate-600 text-xs dark:text-slate-300 uppercase">subtotal:</span>
                                    <span
                                        class="idr-currency3 text-slate-900 dark:text-slate-300">{{ $pemesanan->total_harga }}</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="font-medium text-slate-600 text-xs dark:text-slate-300 uppercase">Biaya
                                        Aplikasi & Layanan
                                        :</span>
                                    <span
                                        class="idr-currency1 text-slate-900 dark:text-slate-300">{{ $items->price - $pemesanan->total_harga }}</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="font-medium text-slate-600 text-xs dark:text-slate-300 uppercase">Total
                                        Harga:</span>
                                    <span
                                        class="idr-currency2 text-slate-900 dark:text-slate-300 font-bold">{{ $items->price }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="py-2"></div>
                @if ($pemesanan->status_pembayaran == 'TERBAYAR')
                    <div class="py-10 text-center md:text-2xl text-xl font-normal text-slate-600 dark:text-slate-300">
                        Terimakasih, pembayaran diterima!
                    </div>
                @elseif ($pemesanan->status_pembayaran == 'KADALUARSA')
                    <div class="py-10 text-center md:text-2xl text-xl font-normal text-slate-600 dark:text-slate-300">
                        Maaf, waktu pembayaran telah habis.
                    </div>
                @elseif ($pemesanan->status_pembayaran == 'GAGAL')
                    <div class="py-10 text-center md:text-2xl text-xl font-normal text-slate-600 dark:text-slate-300">
                        Maaf, pembayaran gagal.
                    </div>
                @endif
        </main>
    </div>
    <!-- novirtual -->
    <div class="card xl:col-span-2 rounded-md bg-white dark:bg-slate-800 lg:h-full shadow-base"
        {{ $pemesanan->status_pembayaran == 'TERBAYAR' || $pemesanan->status_pembayaran == 'KADALUARSA' || $pemesanan->status_pembayaran == 'GAGAL' ? 'hidden' : '' }}>
        <div class="card-body flex flex-col p-6">
            <header
                class="flex mb-5 pb-5 -mx-6 px-6 items-center  justify-center text-center border-b border-slate-100 dark:border-slate-700 ">
                <div class="flex">
                    {{-- <img src="{{ url('/assets/images/logo/BNI_logo.png') }}" alt="user"
                        class="block w-20 h-auto pr-3 border hover:border-white border-transparent justify-center place-content-center"> --}}
                    <span
                        class="text-slate-900 w-full font-Inter font-bold text-xl leading-6 capitalize dark:text-slate-300">
                        {{ $invoice->payment_name }}</span>
                </div>
            </header>
            <input type="text" id="expire-time" value="{{ $invoice->expired_time }}" hidden>
            <span style="color: #c53030;" id="expire-time-span"
                class="justify-center place-content-center text-center  bg-danger-300 text-slate-900 w-full font-Inter font-bold text-base rounded-xl space-y-8 dark:text-slate-300">Selesaikan
                Pembayaran Dalam</span>
            <div class="card-text h-full text-center mt-4">
                <div class="grid lg:grid-cols-2 space-y-1 md:grid-cols-2 grid-cols-1 gap-4">
                    <div class="input-area mt-2">
                        <label for="textFormatter" class="form-label">No Virtual Account</label>
                        <div class="relative">
                            <span
                                class="text-base font-Inter font-bold dark:text-slate-200 text-slate-900 mt-2 inline-block">{{ $invoice->pay_code ? $invoice->pay_code : '' }}</span>
                        </div>
                    </div>
                    <div class="input-area">
                        <label for="textFormatter" class="form-label">Alternatif Link Bayar</label>
                        <div class="relative">
                            <span
                                class="text-base font-Inter font-bold dark:text-slate-200 text-slate-900 mt-2 inline-block">
                                <a href="{{ $invoice->pay_url ? $invoice->pay_url : $invoice->checkout_url }}"
                                    target="_blank">Bayar -></a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('custom-script')
    <script src="https://js.pusher.com/8.2.0/pusher.min.js"></script>
    <script>
        var pusher = new Pusher('2144bc95f007e22453fb', {
            cluster: 'ap1'
        });

        var channel = pusher.subscribe(`system-notify.{{ $pemesanan->getReferenceCode() }}`);
        channel.bind('notify-event', function(data) {
            console.log(data);
        });
    </script>
    <script>
        $(document).ready(function() {
            $('.idr-currency').text(currency.format(parseInt($('.idr-currency').text())))
            $('.idr-currency1').text(currency.format(parseInt($('.idr-currency1').text())))
            $('.idr-currency2').text(currency.format(parseInt($('.idr-currency2').text())))
            $('.idr-currency3').text(currency.format(parseInt($('.idr-currency3').text())))
            $('.idr-currency4').text(currency.format(parseInt($('.idr-currency4').text())))

            var toHHMMSS = (secs) => {
                var sec_num = parseInt(secs, 10)
                var hours = Math.floor(sec_num / 3600)
                var minutes = Math.floor(sec_num / 60) % 60
                var seconds = sec_num % 60

                return [hours, minutes, seconds]
                    .map(v => v < 10 ? "0" + v : v)
                    .filter((v, i) => v !== "00" || i > 0)
                    .join(":")
            }

            function pad(num, size) {
                num = num.toString();
                while (num.length < size) num = "0" + num;
                return num;
            }
            const futureDate = new Date(Number($('#expire-time').val()) * 1000).getTime();

            setInterval(() => {
                const now = new Date().getTime();
                const timeleft = futureDate - now;

                const days = Math.floor(timeleft / (1000 * 60 * 60 * 24));
                const hours = Math.floor((timeleft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                const minutes = Math.floor((timeleft % (1000 * 60 * 60)) / (1000 * 60));
                const seconds = Math.floor((timeleft % (1000 * 60)) / 1000);
                let remain_str = `${pad(hours, 2)}:${pad(minutes, 2)}:${pad(seconds, 2)}`
                $('#expire-time-span').text(`Selesaikan Pembayaran Dalam ${remain_str}`)
            }, 1000);
        })
    </script>
@endsection

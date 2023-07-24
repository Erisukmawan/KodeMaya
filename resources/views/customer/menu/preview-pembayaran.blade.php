@extends('customer.template')
@section('main-content')
   <div class="lg:flex justify-between flex-wrap items-center mb-6">
                  <h4>Bukti Pembayaran
                  </h4>
                  <div class="flex lg:justify-end items-center flex-wrap space-xy-5">
                   
                    <button onclick="window.print()" type="button" class="invocie-btn inline-flex btn btn-sm whitespace-nowrap space-x-1 cursor-pointer bg-white dark:bg-slate-800
                    dark:text-slate-300 btn-md h-min text-sm font-normal text-slate-900 rtl:space-x-reverse">
                      <span class="text-lg">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink"
                        aria-hidden="true"
                        role="img"
                        class="iconify iconify--heroicons"
                        width="1em"
                        height="1em"
                        viewbox="0 0 24 24">
                        <path
                            fill="none"
                            stroke="currentColor"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="1.5"
                            d="M6.72 13.829c-.24.03-.48.062-.72.096m.72-.096a42.415 42.415 0 0 1 10.56 0m-10.56 0L6.34
                                18m10.94-4.171c.24.03.48.062.72.096m-.72-.096L17.66 18m0 0l.229 2.523a1.125 1.125 0 0 1-1.12 1.227H7.231c-.662
                                0-1.18-.568-1.12-1.227L6.34 18m11.318 0h1.091A2.25 2.25 0 0 0 21 15.75V9.456c0-1.081-.768-2.015-1.837-2.175a48.055 48.055
                                0 0 0-1.913-.247M6.34 18H5.25A2.25 2.25 0 0 1 3 15.75V9.456c0-1.081.768-2.015 1.837-2.175a48.041 48.041 0 0 1
                                1.913-.247m10.5 0a48.536 48.536 0 0 0-10.5 0m10.5 0V3.375c0-.621-.504-1.125-1.125-1.125h-8.25c-.621 0-1.125.504-1.125
                                1.125v3.659M18 10.5h.008v.008H18V10.5Zm-3 0h.008v.008H15V10.5Z"></path>
                    </svg>
                </span>
                      <span>Print</span>
                    </button>
                    <button class="invocie-btn inline-flex btn btn-sm whitespace-nowrap space-x-1 cursor-pointer bg-white dark:bg-slate-800
                    dark:text-slate-300 btn-md h-min text-sm font-normal text-slate-900 rtl:space-x-reverse">
                      <span class="text-lg">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink"
                        aria-hidden="true"
                        role="img"
                        class="iconify iconify--heroicons"
                        width="1em"
                        height="1em"
                        viewbox="0 0 24 24">
                        <path
                            fill="none"
                            stroke="currentColor"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="1.5"
                            d="M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3"></path>
                    </svg>
                </span>
                      <span>Download</span>
                    </button>
                    <button class="invocie-btn inline-flex btn btn-sm whitespace-nowrap space-x-1 cursor-pointer bg-white dark:bg-slate-800
                    dark:text-slate-300 btn-md h-min text-sm font-normal text-slate-900 rtl:space-x-reverse">
                      <span class="text-lg transform -rotate-45">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink"
                        aria-hidden="true"
                        role="img"
                        class="iconify iconify--heroicons"
                        width="1em"
                        height="1em"
                        viewbox="0 0 24 24">
                        <path
                            fill="none"
                            stroke="currentColor"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="1.5"
                            d="M6 12L3.269 3.126A59.768 59.768 0 0 1 21.485 12A59.77 59.77 0 0 1 3.27 20.876L5.999 12Zm0 0h7.5"></path>
                    </svg>
                </span>
                      <span>Send invoice</span>
                    </button>
                  </div>
                </div>
                <div class="card ">
                  <main class="card-body p-0">
                    <div class="flex justify-between flex-wrap space-y-4 px-6 pt-6 bg-slate-50 dark:bg-slate-800 pb-6 rounded-t-md">
                      <div>
                        <img src="assets/images/logo/logo.svg" alt="" class="mb-10 dark_logo">
                        <img src="assets/images/logo/logo-white.svg" alt="" class="mb-10 white_logo">
                        <div class="text-slate-500 dark:text-slate-300 font-normal leading-5 mt-4 text-sm">Dashcode <br> House# 339, New DOHS,
                        Mohakhali, <br>Dhaka - 1206, Bangladesh<div class="flex space-x-2 mt-2 leading-[1] rtl:space-x-reverse">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--heroicons-outline" width="1em" height="1em" viewbox="0 0 24 24">
                              <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 0 1 2-2h3.28a1 1 0 0 1 .948.684l1.498 4.493a1 1 0 0 1-.502 1.21l-2.257 1.13a11.042 11.042 0 0 0 5.516
                                        5.516l1.13-2.257a1 1 0 0 1 1.21-.502l4.493 1.498a1 1 0 0 1 .684.949V19a2 2 0 0 1-2 2h-1C9.716 21 3 14.284 3 6V5Z"></path>
                            </svg>
                            <span>(252) 555-0126,(201) 555-0124</span>
                          </div>
                          <div class="mt-[6px] flex space-x-2 leading-[1] rtl:space-x-reverse">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--heroicons-outline" width="1em" height="1em" viewbox="0 0 24 24">
                              <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m3 8l7.89 5.26a2 2 0 0 0 2.22 0L21 8M5 19h14a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2Z"></path>
                            </svg>
                            <span>Dashcode@example.com</span>
                          </div>
                        </div>
                      </div>
                      <div>
                        <span class="block text-slate-900 dark:text-slate-300 font-medium leading-5 text-xl">Bill to:</span>
                        <div class="text-slate-500 dark:text-slate-300 font-normal leading-5 mt-4 text-sm">Annette black-500 <br>4140 Parker Rd.
                        Allentown, New <br>Mexico 31134<div class="flex space-x-2 mt-2 leading-[1] rtl:space-x-reverse">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--heroicons-outline" width="1em" height="1em" viewbox="0 0 24 24">
                              <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 0 1 2-2h3.28a1 1 0 0 1 .948.684l1.498 4.493a1 1 0 0 1-.502 1.21l-2.257 1.13a11.042 11.042 0 0 0 5.516
                                        5.516l1.13-2.257a1 1 0 0 1 1.21-.502l4.493 1.498a1 1 0 0 1 .684.949V19a2 2 0 0 1-2 2h-1C9.716 21 3 14.284 3 6V5Z"></path>
                            </svg>
                            <span>(252) 555-0126,(201) 555-0124</span>
                          </div>
                          <div class="mt-[6px] flex space-x-2 leading-[1] rtl:space-x-reverse">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--heroicons-outline" width="1em" height="1em" viewbox="0 0 24 24">
                              <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m3 8l7.89 5.26a2 2 0 0 0 2.22 0L21 8M5 19h14a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2Z"></path>
                            </svg>
                            <span>Dashcode@example.com</span>
                          </div>
                        </div>
                      </div>
                      <div class="space-y-[2px]">
                        <span class="block text-slate-900 dark:text-slate-300 font-medium leading-5 text-xl mb-4">Invoice:</span>
                        <h4 class="text-slate-600 font-medium dark:text-slate-300 text-xs uppercase">Invoice number:</h4>
                        <div class="text-slate-500 dark:text-slate-300 font-normal leading-5 text-sm">#89572935Kh</div>
                        <h4 class="text-slate-600 font-medium dark:text-slate-300 text-xs uppercase">date</h4>
                        <div class="text-slate-500 dark:text-slate-300 font-normal leading-5 text-sm">09 December 2021</div>
                      </div>
                    </div>
                    <div class="max-w-[980px] mx-auto shadow-base dark:shadow-none my-8 rounded-md overflow-x-auto">
                      <div>
                        <table class="w-full border-collapse table-fixed dark:border-slate-700 dark:border">
                          <tr>
                            <th colspan="3" class="bg-slate-50 dark:bg-slate-700 dark:text-slate-300 text-xs font-medium leading-4 uppercase text-slate-600
                                    ltr:text-left ltr:last:text-right rtl:text-right rtl:last:text-left">
                              <span class="block px-6 py-5 font-semibold">ITEM</span>
                            </th>
                            <th class="bg-slate-50 dark:bg-slate-700 dark:text-slate-300 text-xs font-medium leading-4 uppercase text-slate-600
                                    ltr:text-left ltr:last:text-right rtl:text-right rtl:last:text-left">
                              <span class="block px-6 py-5 font-semibold">QTY</span>
                            </th>
                            <th class="bg-slate-50 dark:bg-slate-700 dark:text-slate-300 text-xs font-medium leading-4 uppercase text-slate-600
                                    ltr:text-left ltr:last:text-right rtl:text-right rtl:last:text-left">
                              <span class="block px-6 py-5 font-semibold">PRICE</span>
                            </th>
                            <th class="bg-slate-50 dark:bg-slate-700 dark:text-slate-300 text-xs font-medium leading-4 uppercase text-slate-600
                                    ltr:text-left ltr:last:text-right rtl:text-right rtl:last:text-left">
                              <span class="block px-6 py-5 font-semibold">TOTAL</span>
                            </th>
                          </tr>
                          <tr class="border-b border-slate-100 dark:border-slate-700">
                            <td colspan="3" class="text-slate-900 dark:text-slate-300 text-sm font-normal ltr:text-left ltr:last:text-right rtl:text-right
                                    rtl:last:text-left px-6 py-4">
                              Headphone</td>
                            <td class="text-slate-900 dark:text-slate-300 text-sm font-normal ltr:text-left ltr:last:text-right rtl:text-right
                                    rtl:last:text-left px-6 py-4">
                              2</td>
                            <td class="text-slate-900 dark:text-slate-300 text-sm font-normal ltr:text-left ltr:last:text-right rtl:text-right
                                    rtl:last:text-left px-6 py-4">
                              $600.25</td>
                            <td class="text-slate-900 dark:text-slate-300 text-sm font-normal ltr:text-left ltr:last:text-right rtl:text-right
                                    rtl:last:text-left px-6 py-4">
                              $1200.50</td>
                          </tr>
                          <tr class="border-b border-slate-100 dark:border-slate-700">
                            <td colspan="3" class="text-slate-900 dark:text-slate-300 text-sm font-normal ltr:text-left ltr:last:text-right rtl:text-right
                                    rtl:last:text-left px-6 py-4">
                              Headphone</td>
                            <td class="text-slate-900 dark:text-slate-300 text-sm font-normal ltr:text-left ltr:last:text-right rtl:text-right
                                    rtl:last:text-left px-6 py-4">
                              2</td>
                            <td class="text-slate-900 dark:text-slate-300 text-sm font-normal ltr:text-left ltr:last:text-right rtl:text-right
                                    rtl:last:text-left px-6 py-4">
                              $600.25</td>
                            <td class="text-slate-900 dark:text-slate-300 text-sm font-normal ltr:text-left ltr:last:text-right rtl:text-right
                                    rtl:last:text-left px-6 py-4">
                              $1200.50</td>
                          </tr>
                          <tr class="border-b border-slate-100 dark:border-slate-700">
                            <td colspan="3" class="text-slate-900 dark:text-slate-300 text-sm font-normal ltr:text-left ltr:last:text-right rtl:text-right
                                    rtl:last:text-left px-6 py-4">
                              Headphone</td>
                            <td class="text-slate-900 dark:text-slate-300 text-sm font-normal ltr:text-left ltr:last:text-right rtl:text-right
                                    rtl:last:text-left px-6 py-4">
                              2</td>
                            <td class="text-slate-900 dark:text-slate-300 text-sm font-normal ltr:text-left ltr:last:text-right rtl:text-right
                                    rtl:last:text-left px-6 py-4">
                              $600.25</td>
                            <td class="text-slate-900 dark:text-slate-300 text-sm font-normal ltr:text-left ltr:last:text-right rtl:text-right
                                    rtl:last:text-left px-6 py-4">
                              $1200.50</td>
                          </tr>
                          <tr class="border-b border-slate-100 dark:border-slate-700">
                            <td colspan="3" class="text-slate-900 dark:text-slate-300 text-sm font-normal ltr:text-left ltr:last:text-right rtl:text-right
                                    rtl:last:text-left px-6 py-4">
                              Headphone</td>
                            <td class="text-slate-900 dark:text-slate-300 text-sm font-normal ltr:text-left ltr:last:text-right rtl:text-right
                                    rtl:last:text-left px-6 py-4">
                              2</td>
                            <td class="text-slate-900 dark:text-slate-300 text-sm font-normal ltr:text-left ltr:last:text-right rtl:text-right
                                    rtl:last:text-left px-6 py-4">
                              $600.25</td>
                            <td class="text-slate-900 dark:text-slate-300 text-sm font-normal ltr:text-left ltr:last:text-right rtl:text-right
                                    rtl:last:text-left px-6 py-4">
                              $1200.50</td>
                          </tr>
                        </table>
                        <div class="md:flex px-6 py-6 items-center">
                          <div class="flex-1 text-slate-500 dark:text-slate-300 text-sm">Amet minim mollit non deserunt ullamco est sit aliqua
                            dolor do amet sint. Velit <br>officia consequat duis enim velit mollit.</div>
                          <div class="flex-none min-w-[270px] space-y-3">
                            <div class="flex justify-between">
                              <span class="font-medium text-slate-600 text-xs dark:text-slate-300 uppercase">subtotal:</span>
                              <span class="text-slate-900 dark:text-slate-300">$3601.50</span>
                            </div>
                            <div class="flex justify-between">
                              <span class="font-medium text-slate-600 text-xs dark:text-slate-300 uppercase">vat (3.5%):</span>
                              <span class="text-slate-900 dark:text-slate-300">$20.50</span>
                            </div>
                            <div class="flex justify-between">
                              <span class="font-medium text-slate-600 text-xs dark:text-slate-300 uppercase">Invoice total:</span>
                              <span class="text-slate-900 dark:text-slate-300 font-bold">$3622.00</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="py-10 text-center md:text-2xl text-xl font-normal text-slate-600 dark:text-slate-300">Thank you for your
                      purchase!</div>
                  </main>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
@endsection
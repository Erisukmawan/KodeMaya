@extends('mentor/template')

@section('main-content')
    <div class="space-y-5">
      <div class="card">
                    <div class="card-body flex flex-col p-6">
                      <div class="card-text h-full">
                        <div>
                          <header class="flex mb-5 items-center border-b border-slate-100 dark:border-slate-700  -mx-6 px-6">
                          <ul class="nav nav-tabs flex flex-col md:flex-row flex-wrap list-none border-b-0 pl-0 mb-4" id="tabs-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                              <a href="#tabs-home-withIcon" class="nav-link w-full flex items-center font-medium text-sm font-Inter leading-tight capitalize border-x-0 border-t-0 border-b border-transparent px-4 pb-2 my-2 hover:border-transparent focus:border-transparent active dark:text-slate-300" id="tabs-home-withIcon-tab" data-bs-toggle="pill" data-bs-target="#tabs-home-withIcon" role="tab" aria-controls="tabs-home-withIcon" aria-selected="true">
                                <iconify-icon class="mr-1" icon="ic:baseline-connect-without-contact"></iconify-icon>
                                Ambil Pesanan</a>
                            </li>
                            <li class="nav-item" role="presentation">
                              <a href="#tabs-profile-withIcon" class="nav-link w-full flex items-center font-medium text-sm font-Inter leading-tight capitalize border-x-0 border-t-0 border-b border-transparent px-4 pb-2 my-2 hover:border-transparent focus:border-transparent dark:text-slate-300" id="tabs-profile-withIcon-tab" data-bs-toggle="pill" data-bs-target="#tabs-profile-withIcon" role="tab" aria-controls="tabs-profile-withIcon" aria-selected="false">
                                <iconify-icon class="mr-1" icon="bxs:edit"></iconify-icon>
                                Pengerjaan</a>
                            </li>
                            <li class="nav-item" role="presentation">
                              <a href="#tabs-messages-withIcon" class="nav-link w-full flex items-center font-medium text-sm font-Inter leading-tight capitalize border-x-0 border-t-0 border-b border-transparent px-4 pb-2 my-2 hover:border-transparent focus:border-transparent dark:text-slate-300" id="tabs-messages-withIcon-tab" data-bs-toggle="pill" data-bs-target="#tabs-messages-withIcon" role="tab" aria-controls="tabs-messages-withIcon" aria-selected="false">
                                <iconify-icon class="mr-1" icon="material-symbols:history"></iconify-icon>
                                Riwayat Pesanan</a>
                            </li>
                          </ul>
                           </header>
                          <div class="tab-content" id="tabs-tabContent">
                            <div class="tab-pane fade show active" id="tabs-home-withIcon" role="tabpanel" aria-labelledby="tabs-home-withIcon-tab">
                              <div class="overflow-x-auto -mx-6 dashcode-data-table">
                        <span class=" col-span-8  hidden"></span>
                        <span class="  col-span-4 hidden"></span>
                        <div class="inline-block min-w-full align-middle">
                          <div class="overflow-hidden ">
                            <table class="min-w-full divide-y divide-slate-100 table-fixed dark:divide-slate-700" id="data-table">
                              <thead class=" border-t border-slate-100 dark:border-slate-800">
                                <tr>
                                  <th scope="col" class=" table-th ">Id</th>
                                  <th scope="col" class=" table-th ">Nama Project</th>
                                  <th scope="col" class=" table-th ">Deskripsi</th>
                                  <th scope="col" class=" table-th ">Customer</th>
                                  <th scope="col" class=" table-th ">Status</th>
                                  <th scope="col" class=" table-th ">Action</th>
                                </tr>
                              </thead>
                              <tbody class="bg-white divide-y divide-slate-100 dark:bg-slate-800 dark:divide-slate-700">
                                <tr>
                                  <td class="table-td">1</td>
                                  <td class="table-td ">Aplikasi Kantin Sekolah</td>
                                  <td class="table-td">Aplikasi yang bisa mengelola kantin dengan fitur pembayaran</td>
                                  <td class="table-td ">Ida Nur Anisa</td>
                                  <td class="table-td ">
                                    <div class="inline-block px-3 min-w-[90px] text-center mx-auto py-1 rounded-[999px] bg-opacity-25 text-warning-500 bg-warning-500">
                                      Menunggu
                                    </div>
                                  </td>
                                  <td class="table-td ">
                                      <div class="flex space-x-2">
                                        <a href="{{route('mentor.menu.pemesanan.detail_pemesanan')}}">
                                          <span class="text-2xl rounded-sm pt-2 p-1 hover:bg-slate-900 bg-info-600 text-white">
                                            <iconify-icon icon="heroicons:eye"></iconify-icon>
                                          </span>
                                        </a>
                                        <a href="">
                                                <span class="text-2xl rounded-sm pt-2 p-1 hover:bg-slate-900 bg-success-600 text-white">
                                                  <iconify-icon icon="material-symbols:check"></iconify-icon>
                                                </span>
                                        </a>
                                              <a href="">
                                                <span class="text-2xl rounded-sm pt-2 p-1 w-9 hover:bg-slate-900 bg-danger-600 text-white">
                                                  <iconify-icon icon="mdi:cancel-bold"></iconify-icon>
                                                </span>
                                              </a>
                                      </div>
                                  </td>
                                </tr>
                                </tbody>
                            </table>
                          </div>
                        </div>
</div>
                            </div>
                            <div class="tab-pane fade" id="tabs-profile-withIcon" role="tabpanel" aria-labelledby="tabs-profile-withIcon-tab">
                              <div class="overflow-x-auto -mx-6 dashcode-data-table">
                        <span class=" col-span-8  hidden"></span>
                        <span class="  col-span-4 hidden"></span>
                        <div class="inline-block min-w-full align-middle">
                          <div class="overflow-hidden ">
                            <table class="min-w-full divide-y divide-slate-100 table-fixed dark:divide-slate-700" id="data-table">
                              <thead class=" border-t border-slate-100 dark:border-slate-800">
                                <tr>
                                  <th scope="col" class=" table-th ">Id</th>
                                  <th scope="col" class=" table-th ">Nama Project</th>
                                  <th scope="col" class=" table-th ">Deskripsi</th>
                                  <th scope="col" class=" table-th ">Customer</th>
                                  <th scope="col" class=" table-th ">Status</th>
                                  <th scope="col" class=" table-th ">Tenggat Waktu</th>
                                  <th scope="col" class=" table-th ">Action</th>
                                </tr>
                              </thead>
                              <tbody class="bg-white divide-y divide-slate-100 dark:bg-slate-800 dark:divide-slate-700">
                                <tr>
                                  <td class="table-td">1</td>
                                  <td class="table-td ">Aplikasi Kantin Sekolah</td>
                                  <td class="table-td">Aplikasi yang bisa mengelola kantin dengan fitur pembayaran</td>
                                  <td class="table-td ">Ida Nur Anisa</td>
                                  <td class="table-td ">
                                    <div class="inline-block px-3 min-w-[90px] text-center mx-auto py-1 rounded-[999px] bg-opacity-25 text-info-600 bg-info-500">
                                      Sedang Diproses
                                    </div>
                                  </td>
                                  <td class="table-td ">-</td>
                                  <td class="table-td ">
                                      <div class="flex space-x-2">
                                        <a href="{{route('mentor.menu.pemesanan.detail_pemesanan')}}">
                                          <span class="text-2xl rounded-sm pt-2 p-1 hover:bg-slate-900 bg-info-600 text-white">
                                            <iconify-icon icon="heroicons:eye"></iconify-icon>
                                          </span>
                                        </a>
                                        <a href="{{route('mentor.menu.pemesanan.pengerjaan_pemesanan')}}">
                                                <span class="text-2xl rounded-sm pt-2 p-1 hover:bg-slate-900 bg-success-600 text-white">
                                                  <iconify-icon icon="bxs:edit"></iconify-icon>
                                                </span>
                                      </div>
                                  </td>
                                </tr>
                                <tr>
                                  <td class="table-td">2</td>
                                  <td class="table-td ">Aplikasi Bimbel Kampus</td>
                                  <td class="table-td">Aplikasi yang bisa menyediakan layanan konsultasi tugas</td>
                                  <td class="table-td ">Ida Nur Anisa</td>
                                  <td class="table-td ">
                                    <div class="inline-block px-3 min-w-[90px] text-center mx-auto py-1 rounded-[999px] bg-opacity-25 text-warning-500 bg-warning-500">
                                      Diperiksa
                                    </div>
                                  </td>
                                  <td class="table-td ">20-06-2023</td>
                                  <td class="table-td ">
                                      <div class="flex space-x-2">
                                        <a href="{{route('mentor.menu.pemesanan.detail_pemesanan')}}">
                                          <span class="text-2xl rounded-sm pt-2 p-1 hover:bg-slate-900 bg-info-600 text-white">
                                            <iconify-icon icon="heroicons:eye"></iconify-icon>
                                          </span>
                                        </a>
                                        <a href="{{route('mentor.menu.pemesanan.pengerjaan_pemesanan')}}">
                                                <span class="text-2xl rounded-sm pt-2 p-1 hover:bg-slate-900 bg-success-600 text-white">
                                                  <iconify-icon icon="bxs:edit"></iconify-icon>
                                                </span>
                                      </div>
                                  </td>
                                </tr>
                                </tbody>
                            </table>
                          </div>
                        </div>
                        </div>
                            </div>
                            <div class="tab-pane fade" id="tabs-messages-withIcon" role="tabpanel" aria-labelledby="tabs-messages-withIcon-tab">
                              <div class="overflow-x-auto -mx-6 dashcode-data-table">
                        <span class=" col-span-8  hidden"></span>
                        <span class="  col-span-4 hidden"></span>
                        <div class="inline-block min-w-full align-middle">
                          <div class="overflow-hidden ">
                            <table class="min-w-full divide-y divide-slate-100 table-fixed dark:divide-slate-700" id="data-table">
                              <thead class=" border-t border-slate-100 dark:border-slate-800">
                                <tr>
                                  <th scope="col" class=" table-th ">Id</th>
                                  <th scope="col" class=" table-th ">Nama Project</th>
                                  <th scope="col" class=" table-th ">Deskripsi</th>
                                  <th scope="col" class=" table-th ">Customer</th>
                                  <th scope="col" class=" table-th ">Status</th>
                                  <th scope="col" class=" table-th ">Action</th>
                                </tr>
                              </thead>
                              <tbody class="bg-white divide-y divide-slate-100 dark:bg-slate-800 dark:divide-slate-700">
                                <tr>
                                  <td class="table-td">1</td>
                                  <td class="table-td ">Aplikasi Kantin Sekolah</td>
                                  <td class="table-td">Aplikasi yang bisa mengelola kantin dengan fitur pembayaran</td>
                                  <td class="table-td ">Ida Nur Anisa</td>
                                  <td class="table-td ">
                                    <div class="inline-block px-3 min-w-[90px] text-center mx-auto py-1 rounded-[999px] bg-opacity-25 text-success-500 bg-success-500">
                                      Selesai
                                    </div>
                                  </td>
                                  <td class="table-td ">
                                      <div class="flex space-x-2">
                                        <a href="{{route('mentor.menu.pemesanan.detail_pemesanan')}}">
                                          <span class="text-2xl rounded-sm pt-2 p-1 hover:bg-slate-900 bg-info-600 text-white">
                                            <iconify-icon icon="heroicons:eye"></iconify-icon>
                                          </span>
                                        </a>
                                      </div>
                                  </td>
                                </tr>
                                </tbody>
                            </table>
                          </div>
                        </div>
                        </div>
                            </div>
                            <div class="tab-pane fade" id="tabs-settings-withIcon" role="tabpanel" aria-labelledby="tabs-settings-withIcon-tab">
                              <p class="text-sm text-gray-500 dark:text-gray-200">
                                This is some placeholder content the
                                <strong>Settings</strong>
                                tab's associated content. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling. consectetur adipisicing elit. Ab ipsa!
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
@endsection
@extends('financial/template')

@section('main-content')
    <div class="space-y-5">
        <div class="card">
            <header class="card-header noborder">
                <h4 class="card-title">Manage Users</h4>
            </header>
            <div class="card-body px-6 pb-6">
                <div class="overflow-x-auto -mx-6 dashcode-data-table">
                    <span class="col-span-8 hidden"></span>
                    <span class="col-span-4 hidden"></span>
                    <div class="inline-block min-w-full align-middle">
                        <div class="overflow-hidden ">
                            <table class="min-w-full divide-y divide-slate-100 table-fixed dark:divide-slate-700"
                                id="data-table">
                                <thead class="border-t border-slate-100 dark:border-slate-800">
                                    <tr>
                                        <th scope="col" class="table-th">
                                            ID
                                        </th>
                                        <th scope="col" class="table-th">
                                            Name
                                        </th>
                                        <th scope="col" class="table-th">
                                            Email
                                        </th>
                                        <th scope="col" class="table-th">
                                            Account Type
                                        </th>
                                        <th scope="col" class="table-th">
                                            Balance
                                        </th>
                                        <th scope="col" class="table-th">
                                            Account Status
                                        </th>
                                        <th scope="col" class="table-th">
                                            Action
                                        </th>
                                    </tr>
                                </thead>
                                <tbody
                                    class="bg-white divide-y divide-slate-100 dark:bg-slate-800 dark:divide-slate-700 dark:text-white">
                                    @foreach ($data as $data)
                                        <tr id="row-{{ $data->user_id }}">
                                            <td class="table-td">{{ $data->user_id }}</td>
                                            <td class="table-td">{{ $data->name }}</td>
                                            <td class="table-td" style="text-transform: lowercase;">{{ $data->email }}</td>
                                            <td class="table-td">
                                                @if ($data->user_type == 'A')
                                                    <div
                                                        class="inline-block px-3 min-w-[90px] text-center mx-auto py-1 rounded-[999px] bg-opacity-25 text-primary-500 bg-primary-500">
                                                        Admin
                                                    </div>
                                                @elseif ($data->user_type == 'M')
                                                    <div
                                                        class="inline-block px-3 min-w-[90px] text-center mx-auto py-1 rounded-[999px] bg-opacity-25 text-warning-500 bg-warning-500">
                                                        Mentor
                                                    </div>
                                                @elseif ($data->user_type == 'C')
                                                    <div
                                                        class="inline-block px-3 min-w-[90px] text-center mx-auto py-1 rounded-[999px] bg-opacity-25 text-info-500 bg-info-500">
                                                        Customer
                                                    </div>
                                                @endif
                                            </td>
                                            <td class="table-td currency-format">{{ $data->balance }}</td>
                                            <td class="table-td">
                                                @if ($data->user_status == 'A')
                                                    <div
                                                        class="inline-block px-3 min-w-[90px] text-center mx-auto py-1 rounded-[999px] bg-opacity-25 text-success-500 bg-success-500">
                                                        Active
                                                    </div>
                                                @elseif ($data->user_status == 'B')
                                                    <div
                                                        class="inline-block px-3 min-w-[90px] text-center mx-auto py-1 rounded-[999px] bg-opacity-25 text-danger-500 bg-danger-500">
                                                        Banned
                                                    </div>
                                                @endif
                                            </td>
                                            <td class="table-td">
                                                <div class="flex space-x-3 rtl:space-x-reverse">
                                                    <button data-bs-toggle="modal" data-bs-target="#formModal"
                                                        data-id="{{ $data->user_id }}"
                                                        class="action-btn btn-primary btn-view" type="button">
                                                        <iconify-icon icon="heroicons:eye"></iconify-icon>
                                                    </button>
                                                    <button data-bs-toggle="modal" data-bs-target="#formModal"
                                                        data-id="{{ $data->user_id }}"
                                                        class="action-btn btn-warning btn-update" type="button">
                                                        <iconify-icon icon="heroicons:pencil-square"></iconify-icon>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Form Modal --}}
    <div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto"
        id="formModal" tabindex="-1" aria-labelledby="insertGlobalParams" aria-hidden="true">
        <div class="modal-dialog relative w-auto pointer-events-none">
            <div
                class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding
                        rounded-md outline-none text-current">
                <div class="relative bg-white rounded-sm shadow dark:bg-slate-700">
                    <form id="user_form" action="" method="post">
                        @csrf
                        <!-- Modal header -->
                        <div
                            class="flex items-center justify-between p-5 border-b rounded-t dark:border-slate-600 bg-primary-500">
                            <h3 class="text-base font-medium text-white dark:text-white capitalize">
                                View User
                            </h3>
                            <button type="button"
                                class="text-slate-400 bg-transparent hover:text-slate-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center
                                    dark:hover:bg-slate-600 dark:hover:text-white"
                                data-bs-dismiss="modal">
                                <svg aria-hidden="true" class="w-5 h-5" fill="#ffffff" viewbox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10
                                            11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                        </div>
                        <!-- Modal body -->
                        <div class="card-text h-full space-y-4 p-6">
                            <div id="param_id" class="input-area">
                                <label for="user_id" class="form-label">ID</label>
                                <input id="user_id" name="user_id" type="text" class="form-control"
                                    placeholder="User ID" readonly>
                            </div>
                            <div class="input-area">
                                <label for="name" class="form-label">Name</label>
                                <input id="name" name="name" type="text" class="form-control" placeholder="name"
                                    disabled="disabled">
                            </div>
                            <div class="input-area">
                                <label for="email" class="form-label">Email</label>
                                <input id="email" name="email" type="text" class="form-control" placeholder="email"
                                    disabled="disabled">
                            </div>
                            <div class="input-area">
                                <label for="phone" class="form-label">Phone</label>
                                <input id="phone" name="phone" type="text" class="form-control"
                                    placeholder="Phone" disabled="disabled">
                            </div>
                            <div class="input-area">
                                <label for="balance" class="form-label">Balance</label>
                                <input id="balance" name="balance" type="text" class="form-control"
                                    placeholder="Balance" disabled="disabled">
                            </div>
                            <div class="input-area">
                                <label for="address" class="form-label">Address</label>
                                <textarea id="address" name="address" rows="3" class="form-control" placeholder="User address" disabled="disabled"></textarea>
                            </div>
                            {{-- Account Type Select --}}
                            <div class="input-area">
                                <label for="user_type" class="form-label">Account Type</label>
                                <select id="user_type" name="user_type" class="form-control" required>
                                    <option value="A" class="dark:bg-slate-700">
                                        Admin
                                    </option>
                                    <option value="M" class="dark:bg-slate-700">
                                        Mentor
                                    </option>
                                    <option value="C" class="dark:bg-slate-700">
                                        Customer
                                    </option>
                                </select>
                            </div>
                            {{-- Account Status Select --}}
                            <div class="input-area">
                                <label for="user_status" class="form-label">Account Status</label>
                                <select id="user_status" name="user_status" class="form-control" required>
                                    <option value="A" class="dark:bg-slate-700">
                                        Active
                                    </option>
                                    <option value="B" class="dark:bg-slate-700">
                                        Banned
                                    </option>
                                </select>
                            </div>
                        </div>
                        <!-- Modal footer -->
                        <div class="flex items-center p-6 space-x-2 dark:border-slate-600 float-right">
                            <button type="submit"
                                class="btn btn-primary inline-flex justify-center text-white">Tambah</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('custom-script')
    <script src="{{ asset('assets/js/jquery.formatCurrency-1.4.0.min.js') }}"></script>
    <script>
        const currency = new Intl.NumberFormat("id-ID", {
            style: "currency",
            currency: "IDR",
        });
        $(function() {
            $('.currency-format').each(function(index) {
                const balance = $(this).text()
                $(this).text(currency.format(parseInt(balance)));
            });

        })
    </script>
    <script>
        function updateModal(id) {
            $('#formModal h3.text-base').text('Update User')
            $('#user_form').attr('action', "{{ route('admin.menu.users.update') }}")
            $('#formModal #user_id').val(id)
            $('#formModal button[type="submit"]').show()
            $('#formModal button[type="submit"]').text('Update')

            $.getJSON(`{{ url('/admin/users/get?id=${id}') }}`, function(data) {
                $('#user_form #name').val(data.name)
                $('#user_form #email').val(data.email)
                $('#user_form #phone').val(data.phone)
                $('#user_form #balance').val(currency.format(data.balance))
                $('#user_form #address').val(data.address)
                $('#user_form #user_type').val(data.user_type).change()
                $('#user_form #user_status').val(data.user_status).change()
            })
        }

        function viewModal(id) {
            $('#formModal h3.text-base').text('View User')
            $('#user_form').attr('action', "")
            $('#formModal #user_id').val(id)
            $('#formModal button[type="submit"]').hide()

            $.getJSON(`{{ url('/admin/users/get?id=${id}') }}`, function(data) {
                $('#user_form #name').val(data.name)
                $('#user_form #email').val(data.email)
                $('#user_form #phone').val(data.phone)
                $('#user_form #balance').val(currency.format(data.balance))
                $('#user_form #address').val(data.address)
                $('#user_form #user_type').val(data.user_type).change()
                $('#user_form #user_status').val(data.user_status).change()
            })
        }
    </script>
    <script>
        $('.btn-view').click(function() {
            const el = $(this)
            const id = el.data('id')
            viewModal(id)
        })
        $('.btn-update').click(function() {
            const el = $(this)
            const id = el.data('id')
            updateModal(id)
        })
    </script>
@endsection

@extends('admin/template')

@section('main-content')
    <div class="space-y-5">
        <div class="card">
            <header class="card-header noborder">
                <h4 class="card-title">Manage Global Parameter</h4>
            </header>
            <div class="card-body px-6 pb-6">
                <div class="overflow-x-auto -mx-6 dashcode-data-table">
                    <span class="col-span-8 hidden"></span>
                    <span class="col-span-4 hidden"></span>
                    <div class="inline-block min-w-full align-middle">
                        <div class="overflow-hidden ">
                            <div class="p-5 float-right">
                                <button data-bs-toggle="modal" data-bs-target="#formModal"
                                    class="btn inline-flex justify-center btn-primary btn-insert">+</button>
                            </div>
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
                                            Code
                                        </th>
                                        <th scope="col" class="table-th">
                                            Type
                                        </th>
                                        <th scope="col" class="table-th">
                                            Description
                                        </th>
                                        <th scope="col" class="table-th">
                                            Action
                                        </th>
                                    </tr>
                                </thead>
                                <tbody
                                    class="bg-white divide-y divide-slate-100 dark:bg-slate-800 dark:divide-slate-700 dark:text-white">
                                    @foreach ($data as $data)
                                        <tr id="row-{{ $data->id }}">
                                            <td class="table-td">{{ $data->id }}</td>
                                            <td class="table-td">{{ $data->name }}</td>
                                            <td class="table-td">{{ $data->code }}</td>
                                            <td class="table-td">
                                                @if ($data->parameter_type == 'S')
                                                    <div
                                                        class="inline-block px-3 min-w-[90px] text-center mx-auto py-1 rounded-[999px] bg-opacity-25 text-primary-500 bg-primary-500">
                                                        String
                                                    </div>
                                                @elseif ($data->parameter_type == 'I')
                                                    <div
                                                        class="inline-block px-3 min-w-[90px] text-center mx-auto py-1 rounded-[999px] bg-opacity-25 text-warning-500 bg-warning-500">
                                                        Integer
                                                    </div>
                                                @elseif ($data->parameter_type == 'T')
                                                    <div
                                                        class="inline-block px-3 min-w-[90px] text-center mx-auto py-1 rounded-[999px] bg-opacity-25 text-info-500 bg-info-500">
                                                        Datetime
                                                    </div>
                                                @elseif ($data->parameter_type == 'D')
                                                    <div
                                                        class="inline-block px-3 min-w-[90px] text-center mx-auto py-1 rounded-[999px] bg-opacity-25 text-success-500 bg-success-500">
                                                        Double
                                                    </div>
                                                @endif
                                            </td>
                                            <td class="table-td">{{ $data->description ?? '-' }}</td>
                                            <td class="table-td">
                                                <div class="flex space-x-3 rtl:space-x-reverse">
                                                    <button data-bs-toggle="modal" data-bs-target="#formModal"
                                                        data-id="{{ $data->id }}"
                                                        class="action-btn btn-primary btn-view" type="button">
                                                        <iconify-icon icon="heroicons:eye"></iconify-icon>
                                                    </button>
                                                    <button data-bs-toggle="modal" data-bs-target="#formModal"
                                                        data-id="{{ $data->id }}"
                                                        class="action-btn btn-warning btn-update" type="button">
                                                        <iconify-icon icon="heroicons:pencil-square"></iconify-icon>
                                                    </button>
                                                    <button data-bs-toggle="modal" data-bs-target="#deleteModal"
                                                        data-id="{{ $data->id }}"
                                                        class="action-btn btn-danger btn-delete" type="button">
                                                        <iconify-icon icon="heroicons:trash"></iconify-icon>
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
                    <form id="parameter_form" action="{{ route('admin.menu.parameter.global.add') }}" method="post">
                        @csrf
                        <!-- Modal header -->
                        <div
                            class="flex items-center justify-between p-5 border-b rounded-t dark:border-slate-600 bg-primary-500">
                            <h3 class="text-base font-medium text-white dark:text-white capitalize">
                                Tambah Parameter Global
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
                                <label for="parameter_id" class="form-label">Parameter ID</label>
                                <input id="parameter_id" name="parameter_id" type="text" class="form-control"
                                    placeholder="Parameter ID" readonly>
                            </div>
                            <div class="input-area">
                                <label for="name" class="form-label">Parameter Name*</label>
                                <input id="name" name="parameter_name" type="text" class="form-control"
                                    placeholder="Parameter Name" required>
                            </div>
                            <div class="input-area">
                                <label for="code" class="form-label">Parameter Code*</label>
                                <input id="code" name="parameter_code" type="text"
                                    class="form-control lowercase" placeholder="Parameter Code" required>
                            </div>
                            <div class="input-area">
                                <label for="type" class="form-label">Select Parameter Type*</label>
                                <select id="type" name="parameter_type" class="form-control" required>
                                    <option value="S" class="dark:bg-slate-700">String</option>
                                    <option value="I" class="dark:bg-slate-700">Integer</option>
                                    <option value="T" class="dark:bg-slate-700">Datetime</option>
                                    <option value="D" class="dark:bg-slate-700">Double</option>
                                </select>
                            </div>
                            {{-- Dynamic Changing --}}
                            <div id="input_value_string" class="input-area">
                                <label for="value_string" class="form-label">Value String*</label>
                                <input id="value_string" name="value_string" type="text" class="form-control"
                                    placeholder="String Value">
                            </div>
                            <div id="input_value_integer" class="input-area hidden">
                                <label for="value_integer" class="form-label">Value Integer*</label>
                                <input id="value_integer" name="value_integer" type="number" class="form-control"
                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                    placeholder="Integer Value">
                            </div>
                            <div id="input_value_datetime" class="input-area hidden">
                                <label for="value_datetime" class="form-label">Value Datetime*</label>
                                <input id="value_datetime" name="value_datetime"
                                    class="form-control flatpickr flatpickr-input" data-enable-time="true" type="text" readonly="readonly">
                            </div>
                            <div id="input_value_double" class="input-area hidden">
                                <label for="value_double" class="form-label">Value Double*</label>
                                <input id="value_double" name="value_double" type="number" step="any"
                                    class="form-control" placeholder="Double Value">
                            </div>
                            {{-- End Type Dynamic --}}
                            <div class="input-area">
                                <label for="description" class="form-label">Description</label>
                                <textarea id="description" name="parameter_description" rows="5" class="form-control"
                                    placeholder="Type Here"></textarea>
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
    <!-- Confirm Delete Modal -->
    <div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto"
        id="deleteModal" tabindex="-1" aria-labelledby="insertGlobalParams" aria-hidden="true">
        <div class="modal-dialog relative w-auto pointer-events-none">
            <div
                class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding
                    rounded-md outline-none text-current">
                <div class="relative bg-danger rounded-sm shadow dark:bg-slate-900">
                    <form action="{{ route('admin.menu.parameter.global.delete') }}" method="POST">
                        @csrf
                        <!-- Modal header -->
                        <div class="flex items-center justify-between p-5 rounded-t dark:border-danger-600 bg-danger-500">
                            <h3 class="text-base font-medium text-white dark:text-white capitalize">
                                Hapus Parameter Global
                            </h3>
                            <button type="button"
                                class="text-danger-400 bg-transparent hover:text-danger-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center
                                dark:hover:bg-danger-600 dark:hover:text-white"
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
                        <div id="param_id" class="input-area hidden">
                            <label for="parameter_id" class="form-label">Parameter ID</label>
                            <input id="parameter_id" name="parameter_id" type="text" class="form-control"
                                placeholder="Parameter ID">
                        </div>
                        <div class="p-6 space-y-4">
                            <h6 class="text-base text-slate-900 dark:text-white leading-6">
                                Apakah kamu mau hapus data dengan ID <span class="text-pid"></span>?
                            </h6>
                            <p class="text-base text-slate-600 dark:text-slate-400 leading-6">
                                Setelah konfirmasi data tidak akan bisa dikembalikan.
                            </p>
                        </div>
                        <!-- Modal footer -->
                        <div class="flex items-center p-6 space-x-2 dark:border-danger-600 float-right">
                            <button type="submit" class="btn btn-danger inline-flex justify-center">Hapus</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('custom-script')
    <script>
        function insertModal() {
            $('#formModal h3.text-base').text('Tambah Parameter Global')
            $('#parameter_form').attr('action', "{{ route('admin.menu.parameter.global.add') }}")
            $('#parameter_form #param_id').hide()
            $('#parameter_form #name').attr('disabled', false)
            $('#parameter_form #code').attr('disabled', false)
            $('#parameter_form #type').attr('disabled', false)
            $('#parameter_form #description').attr('disabled', false)
            $('#value_string').attr('disabled', false)
            $('#value_integer').attr('disabled', false)
            $('#value_datetime').attr('disabled', false)
            $('#value_double').attr('disabled', false)
            $('#formModal button[type="submit"]').show()
            $('#formModal button[type="submit"]').text('Tambah')
        }

        function updateModal(id) {
            $('#formModal h3.text-base').text('Edit Parameter Global')
            $('#parameter_form').attr('action', "{{ route('admin.menu.parameter.global.update') }}")
            $('#parameter_form #param_id').show()
            $('#parameter_form #parameter_id').val(id)
            $('#parameter_form #name').attr('disabled', false)
            $('#parameter_form #code').attr('disabled', false)
            $('#parameter_form #type').attr('disabled', false)
            $('#parameter_form #description').attr('disabled', false)
            $('#value_string').attr('disabled', false)
            $('#value_integer').attr('disabled', false)
            $('#value_datetime').attr('disabled', false)
            $('#value_double').attr('disabled', false)
            $('#formModal button[type="submit"]').show()
            $('#formModal button[type="submit"]').text('Update')

            $.getJSON(`{{ url('/admin/global/get?id=${id}') }}`, function(data) {
                $('#parameter_form #name').val(data.name)
                $('#parameter_form #code').val(data.code)
                $('#parameter_form #type').val(data.parameter_type).change()
                $('#value_string').val(data.value_string)
                $('#value_integer').val(data.value_integer)
                $('#value_datetime').val(data.value_datetime)
                $('#value_double').val(data.value_double)
                $('#parameter_form #description').val(data.description)
            })
        }

        function viewModal(id) {
            $('#formModal h3.text-base').text('Tampil Parameter Global')
            $('#parameter_form').attr('action', "")
            $('#parameter_form #param_id').show()
            $('#parameter_form #parameter_id').val(id)
            $('#parameter_form #name').attr('disabled', true)
            $('#parameter_form #code').attr('disabled', true)
            $('#parameter_form #type').attr('disabled', true)
            $('#value_string').attr('disabled', true)
            $('#value_integer').attr('disabled', true)
            $('#value_datetime').attr('disabled', true)
            $('#value_double').attr('disabled', true)
            $('#parameter_form #description').attr('disabled', true)
            $('#formModal button[type="submit"]').hide()

            $.getJSON(`{{ url('/admin/global/get?id=${id}') }}`, function(data) {
                $('#parameter_form #name').val(data.name)
                $('#parameter_form #code').val(data.code)
                $('#parameter_form #type').val(data.parameter_type).change()
                $('#value_string').val(data.value_string)
                $('#value_integer').val(data.value_integer)
                $('#value_datetime').val(data.value_datetime)
                $('#value_double').val(data.value_double)
                $('#parameter_form #description').val(data.description)
            })
        }

        function deleteModal(id) {
            $('#deleteModal #parameter_id').val(id)
            $('#deleteModal span.text-pid').text(id)
        }
    </script>
    <script>
        $('.btn-insert').click(function() {
            insertModal()
        })
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
        $('.btn-delete').click(function() {
            const el = $(this)
            const id = el.data('id')
            deleteModal(id)
        })
    </script>
    <script>
        function resetInput() {
            $('#input_value_string input').val('')
            $('#input_value_string').hide()
            $('#input_value_string').prop('required', false);
            $('#input_value_integer input').val('')
            $('#input_value_integer').hide()
            $('#input_value_integer').prop('required', false);
            $('#input_value_datetime input').val('')
            $('#input_value_datetime').hide()
            $('#input_value_datetime').prop('required', false);
            $('#input_value_double input').val('')
            $('#input_value_double').hide()
            $('#input_value_double').prop('required', false);
        }
    </script>
    <script>
        $(document).ready(function() {
            $('#parameter_form select#type').on('change', function() {
                const value = $(this).val()
                if (value == 'S') {
                    resetInput()
                    $('#input_value_string').show()
                    $('#input_value_string').prop('required', true);
                } else if (value == 'I') {
                    resetInput()
                    $('#input_value_integer').show()
                    $('#input_value_integer').prop('required', true);
                } else if (value == 'T') {
                    resetInput()
                    $('#input_value_datetime').show()
                    $('#input_value_datetime').prop('required', true);
                } else if (value == 'D') {
                    resetInput()
                    $('#input_value_double').show()
                    $('#input_value_double').prop('required', true);
                }
            })
        })
    </script>
@endsection

@extends('admin/template')

@section('main-content')
    <div class="space-y-5">
        <div class="card">
            <header class="card-header noborder">
                <h4 class="card-title">Manage Enum</h4>
            </header>
            <div class="card-body px-6 pb-6">
                <div class="overflow-x-auto -mx-6 dashcode-data-table">
                    <span class="col-span-8  hidden"></span>
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
                                            Code
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
                                        <tr>
                                            <td class="table-td">{{ $data->enum_id }}</td>
                                            <td class="table-td">{{ str_replace('_', ' ', $data->enum_name) }}</td>
                                            <td class="table-td">{{ $data->enum_code }}</td>
                                            <td class="table-td">{{ $data->enum_description }}</td>
                                            <td class="table-td ">
                                                <div class="flex space-x-3 rtl:space-x-reverse">
                                                    <button class="action-btn btn-primary cursor-not-allowed light" disabled="disabled" type="button">
                                                        <iconify-icon icon="heroicons:eye"></iconify-icon>
                                                    </button>
                                                    <button class="action-btn btn-warning cursor-not-allowed" disabled="disabled" type="button">
                                                        <iconify-icon icon="heroicons:pencil-square"></iconify-icon>
                                                    </button>
                                                    <button class="action-btn btn-danger cursor-not-allowed" disabled="disabled" type="button">
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
@endsection

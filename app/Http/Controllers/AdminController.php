<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function view_dashboard()
    {
        return view('admin.menu.dashboard');
    }

    // Users Management
    public function view_manage_users()
    {
        $users = DB::table('users')->get();
        return view('admin.menu.users', ['data' => $users]);
    }

    public function get_user(Request $request)
    {
        $method = $request->method();
        if ($method == 'GET') {
            $row = DB::table('users')->get()->where('user_id', $request->query('id'))->first();

            return $row;
        } else {
            return redirect()->back();
        }
    }

    public function update_user(Request $request)
    {
        DB::table('users')
        ->where('user_id', $request->get('user_id'))
        ->update([
            'user_type' => $request->get('user_type'),
            'user_status' => $request->get('user_status'),
        ]);
        return redirect()->back();
    }

    // Global Parameter
    public function view_manage_global()
    {
        $global_params = DB::table('global_parameter')->get();
        return view('admin.menu.parameter.global', ['data' => $global_params]);
    }

    public function get_global(Request $request)
    {
        $method = $request->method();
        if ($method == 'GET') {
            $row_gparam = DB::table('global_parameter')->get()->where('id', $request->query('id'))->first();

            return $row_gparam;
        } else {
            return redirect()->back();
        }
    }

    public function add_global(Request $request)
    {
        DB::table('global_parameter')->insert([
            'name' => $request->get('parameter_name'),
            'code' => $request->get('parameter_code'),
            'parameter_type' => $request->get('parameter_type'),
            'description' => $request->get('parameter_description'),
            'value_integer' => $request->get('value_integer'),
            'value_string' => $request->get('value_string'),
            'value_datetime' => $request->get('value_datetime'),
            'value_double' => $request->get('value_double')
        ]);
        return redirect()->back();
    }

    public function update_global(Request $request)
    {
        DB::table('global_parameter')
        ->where('id', $request->get('parameter_id'))
        ->update([
            'name' => $request->get('parameter_name'),
            'code' => $request->get('parameter_code'),
            'parameter_type' => $request->get('parameter_type'),
            'description' => $request->get('parameter_description'),
            'value_integer' => $request->get('value_integer'),
            'value_string' => $request->get('value_string'),
            'value_datetime' => $request->get('value_datetime'),
            'value_double' => $request->get('value_double')
        ]);
        return redirect()->back();
    }

    public function delete_global(Request $request)
    {
        DB::table('global_parameter')
        ->where('id', $request->get('parameter_id'))
        ->delete();
        return redirect()->back();
    }

    public function view_manage_enum()
    {
        $enums = DB::table('enum')->get();
        return view('admin.menu.parameter.enum', ['data' => $enums]);
    }

    public function view_notification()
    {
        return view('admin.menu.notification');
    }

    public function view_income()
    {
        return view('admin.finance.income');
    }

    public function view_disbursement()
    {
        return view('admin.finance.disbursement');
    }

    public function view_transactions()
    {
        return view('admin.finance.transactions');
    }

    public function view_tulung_post()
    {
        return view('admin.features.tulung.post');
    }

    public function view_tulung_task()
    {
        return view('admin.features.tulung.task');
    }

    public function view_tulung_history()
    {
        return view('admin.features.tulung.history');
    }

    public function view_consultation_post()
    {
        return view('admin.features.consultation.post');
    }

    public function view_consultation_task()
    {
        return view('admin.features.consultation.task');
    }

    public function view_consultation_history()
    {
        return view('admin.features.consultation.history');
    }
}

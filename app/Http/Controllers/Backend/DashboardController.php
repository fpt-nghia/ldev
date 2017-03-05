<?php
namespace App\Http\Controllers\Backend;

class DashboardController extends Controller
{
    public function formCommon()
    {
        return view('backend.dashboard.form_common');
    }

    public function formValidation()
    {
        return view('backend.dashboard.form_validation');
    }

    public function tables()
    {
        return view('backend.dashboard.tables');
    }

    public function error403()
    {
        return view('backend.dashboard.error403');
    }

    public function grid()
    {
        return view('backend.dashboard.grid');
    }
}
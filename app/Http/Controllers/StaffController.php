<?php

namespace App\Http\Controllers;

use App\Staff;
use Illuminate\Http\Request;
use DB;

class StaffController extends Controller
{
    public function index()
    {
        $staff = DB::table('staff')->get(['id', 'staff_name', 'staff_job', 'staff_age']);
        return response() -> json([
            'status' => 200,
            'data' => $staff
        ]);
    }

}

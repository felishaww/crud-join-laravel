<?php

namespace App\Http\Controllers;

use App\Company;
use Illuminate\Http\Request;
use DB;

class CompanyController extends Controller
{

     public function getStaffData(){
         $companyStaff = DB::table('companies')
                        ->join('staff', 'companies.id', '=', 'staff.company_id')
                        ->select('staff_name', 'staff_job', 'company_name')
                        ->get();
        return response()->json([
            'data' => $companyStaff
        ]);
     }
     public function getStaffAndEventData(){
        $staffAndEvent = DB::table('companies')
                       ->join('staff', 'companies.id', '=', 'staff.company_id')
                       ->join('events', 'events.id', '=', 'companies.event_id')
                       ->select('staff_name', 'staff_job', 'company_name', 'event_name', 'event_date')
                       ->get();
       return response()->json([
           'data' => $staffAndEvent
       ]);
    }

    public function index()
    {
        $company = DB::table('companies')->get(['id', 'company_name', 'company_location']);
        return response() -> json([
            'status' => 200,
            'data' => $company
        ]);
    }


   
}

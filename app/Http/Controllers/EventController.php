<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;
use Validator;
use DB;

class EventController extends Controller
{

    public function index()
    {
        $event = DB::table('events')->get(['id', 'event_name', 'event_date']);
        return response() -> json([
            'status' => 200,
            'data' => $event
        ]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'event_name' => 'required',
            'event_date' => 'required'
        ]);

        if($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors()
            ]);
        }

        Event::create([
            'event_name' => $request->event_name,
            'event_date' => $request->event_date
        ]);
        return response()->json([
            'message' => 'Event succesfully added!'
        ]);
    }

}

<?php

namespace App\Http\Controllers;

use App\Booking;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BookingsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function getTime(){

        $now = Carbon::now()->format("h:m:s");
        return response()->json([
            'time' => $now,
            'timezone' => 'UTC',
        ], 200, []);
    }

    public function getAll(Request $request)
    {
        if ($request->isJson()) {
            $booking = Booking::whereRaw("1 = 1");

            if($request->input("init")){
                $booking->where("created_at",">=",Carbon::parse(($request->input("init")))->format('Y-m-d'));
            }
            if($request->input("end")){
                $booking->where("created_at","<=",Carbon::parse(($request->input("end")))->format('Y-m-d'));
            }
            if($request->input("id")){
                $booking->where("id","=",$request->input("id"));
            }
            if($request->input("firstName")){
                $booking->where("firstName","=",$request->input("firstName"));
            }
            return $booking->get();
        } else {
            return response()->json(['error' => 'Unauthorized'], 401, []);
        }
    }
}

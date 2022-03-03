<?php

namespace App\Http\Controllers;

use App\Charging;
use App\Subscription;
use App\Partner;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChargingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $chargings = Charging::join('partners_table', 'partners_table.id', 'charging_table.partner_id')
                                ->join("subscription_table", "subscription_table.id", "charging_table.subscription_id")
                                ->get(['charging_table.*', 'partners_table.name as partners', 'subscription_table.subscriber as subscribers']);
        //$charging = Charging::where('charging_status', 1)->paginate(50);
        /* $yo = Charging::all()->count();
        $chargings = DB::table('charging_table')
                        ->join('partners_table', 'partners_table.id', '=', 'charging_table.partner_id')
                        ->join("subscription_table", "subscription_table.id", '=', "charging_table.subscription_id")
                        ->select('charging_table.*', 'partners_table.name as partners', 'subscription_table.subscriber as subscribers')
                        ->paginate($yo); */
        //$charging = Charging::where('charging_status', 1)->paginate(50);
        //sdd($chargings);
        return view("charging.index", compact("chargings"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function viewCharging(Request $request)
    {
        $request->validate([
            'start_date' => 'required|date',
            'end_date' => 'required|date',
        ]);
        // $start_date = Carbon::parse($request->start_date);
        // $end_date = Carbon::parse($request->end_date);
        $start_date = Carbon::parse($request->start_date)->startOfDay()->toDateTimeString();
            $end_date = Carbon::parse($request->end_date)->endOfDay()->toDateTimeString();
        
        //dd($start_date . ' '. $end_date);
        $data = Charging::whereBetween('charging_table.created_at', [$start_date,$end_date])
                            ->where('charging_status', '1')->
                            join('partners_table', 'partners_table.id', 'charging_table.partner_id')
                            ->join("subscription_table", "subscription_table.id", "charging_table.subscription_id")
                            ->get(['charging_table.*', 'partners_table.name as partners', 'subscription_table.subscriber as subscribers']);
        //dd($data);
        return view("charging.create", compact("data", 'start_date', 'end_date'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Charging;
use App\Subscription;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $sub = Charging::all()->count();
        $succSub = Charging::where('charging_status', '1')->whereBetween('created_at', [ Carbon::now()->startOfDay(),Carbon::now()->endOfDay()])->count();
        $weekSub = Charging::where('charging_status', '1')->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->count();
        //dd($sub. '  -  '. '   ' .$succSub .'  -  '. '   ' .$weekSub);
        return view('home', compact("sub", "succSub", "weekSub"));
    }
}

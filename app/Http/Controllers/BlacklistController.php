<?php

namespace App\Http\Controllers;

use App\Blacklist;
use App\Partner;
use Illuminate\Http\Request;
//use PHPUnit\Util\Blacklist;

class BlacklistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$black = Blacklist::all();
        $black = Blacklist::join('partners_table', 'partners_table.id', 'blacklist_table.partner_id')
            ->get(['blacklist_table.*', 'partners_table.name as partners']);
        

        return view("blacklist.viewBlacklist", compact("black"));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $partners = Partner::all();
        
        return view('blacklist.create', compact("partners"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'partner_id' => 'required',
            'subscriber' => 'required',
        ]);

        $blk = new Blacklist();

        $blk->partner_id = $request->partner_id;
        $blk->subscriber = $request->subscriber;

        $blk->save();

        return redirect()->back()->with("success","Blacklist created Succesfully");
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
        $rec = Blacklist::find($id);
        $partners = Partner::all();
        //dd($rec);
        return view("blacklist.edit", compact("rec", "partners"));
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
        $validatedData = $request->validate([
            'partner_id' => 'required',
            'subscriber' => 'required',
        ]);

        $blk = Blacklist::find($id);

        $blk->partner_id = $request->partner_id;
        $blk->subscriber = $request->subscriber;

        $blk->save();


        return redirect('/blacklist')->with("success","Blacklist updated Succesfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del_rec = Blacklist::find($id);

        $del_rec->delete();
        
        return redirect()->back()->with("success","Blacklist Deleted succesfully");
        
    }
}

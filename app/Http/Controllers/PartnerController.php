<?php

namespace App\Http\Controllers;

use App\Partner;
use Illuminate\Http\Request;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $partners = Partner::all();

        return view("partner.view", compact("partners"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("partner.create");
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
            'name' => 'required',
            'endpoint' => 'required',
            'username' => 'required',
            'password' => 'required',
        ]);

        $ptnr = new Partner();

        $ptnr->name = $request->name;
        $ptnr->endpoint = $request->endpoint;
        $ptnr->username = $request->username;
        $ptnr->password = $request->password;

        $ptnr->save();

        return redirect()->back()->with("success","Partner created Succesfully");
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
        $ptnr = Partner::find($id);
        
        return view("partner.edit", compact("ptnr"));
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
            'name' => 'required',
            'endpoint' => 'required',
            'username' => 'required',
            'password' => 'required',
        ]);

        $ptnr = Partner::find($id);

        $ptnr->name = $request->name;
        $ptnr->endpoint = $request->endpoint;
        $ptnr->username = $request->username;
        $ptnr->password = $request->password;

        $ptnr->save();

        return redirect('/partner')->with("success","Partner Updated Succesfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del_ptnr = Partner::find($id);

        $del_ptnr->delete();
        
        return redirect()->back()->with("success","Partner Deleted succesfully");
    }
}

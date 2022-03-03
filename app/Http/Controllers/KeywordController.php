<?php

namespace App\Http\Controllers;

use App\Keyword;
use App\Partner;
use App\Subscription;
use Illuminate\Http\Request;

class KeywordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$keywords = Keyword::all();
        $keywords = Keyword::join('partners_table', 'partners_table.id', 'keywords_table.partner_id')
                    ->get(['keywords_table.*', 'partners_table.name as partners']);
        //dd($keywords);
        return view("keyword.view", compact("keywords"));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $partners = Partner::all();
        
        
        return view('keyword.create', compact("partners"));
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
            'keyword' => 'required',
            'amount' => 'required',
            'partner_id' => 'required',
        ]);

        $keywrd = new Keyword();

        $keywrd->keyword = $request->keyword;
        $keywrd->amount = $request->amount;
        $keywrd->partner_id = $request->partner_id;

        $keywrd->save();

        return redirect()->back()->with("success","Keyword created Succesfully");
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
        $kywrd = Keyword::find($id);
        $partners = Partner::all();
        //dd($rec);
        return view("keyword.edit", compact("kywrd", "partners"));
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
            'keyword' => 'required',
            'amount' => 'required',
            'partner_id' => 'required',
        ]);

        $keywrd = Keyword::find($id);

        $keywrd->keyword = $request->keyword;
        $keywrd->amount = $request->amount;
        $keywrd->partner_id = $request->partner_id;

        $keywrd->save();

        return redirect('/keyword')->with("success","Keyword updated Succesfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del_key = Keyword::find($id);
        $del_key->delete();

        return redirect()->back()->with("success","Keyword deleted Succesfully");
    }
}

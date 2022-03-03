<?php

namespace App\Http\Controllers;

use App\Message;
use App\Partner;
use App\Subscription;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $msgs = Message::join('partners_table', 'partners_table.id', 'message_table.partner_id')
            ->get(['message_table.*', 'partners_table.name as partners']);
        

        return view("message.view", compact("msgs"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $partners = Partner::all();
        $subs = Subscription::all();
        
        return view('message.create', compact("partners", "subs"));
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
            'message' => 'required',
        ]);

        $msg = new Message();

        $msg->partner_id = $request->partner_id;
        $msg->subscriber = $request->subscriber;
        $msg->message = $request->message;

        $msg->save();

        return redirect()->back()->with("success","Message created Succesfully");
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
        $msg = Message::find($id);
        $partners = Partner::all();
        //dd($rec);
        return view("message.edit", compact("msg", "partners"));
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
            'message' => 'required',
        ]);

        $msg = Message::find($id);

        $msg->partner_id = $request->partner_id;
        $msg->subscriber = $request->subscriber;
        $msg->message = $request->message;

        $msg->save();

        return redirect('/message')->with("success","Message created Succesfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del_msg = Message::find($id);

        $del_msg->delete();
        
        return redirect()->back()->with("success","Message Deleted succesfully");
    }
}

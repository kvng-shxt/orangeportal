<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    

    protected $table = "message_table";

    protected $fillable = [
        'partner_id',
        'subscriber',
        'message',
    ];

    public $timestamps = false;
}

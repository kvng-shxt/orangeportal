<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{

    protected $table = "subscription_table";

    protected $fillable = [
        'subscriber',
        'amount',
        'partner_id',
        'sub_status',
        'payload',
        'response',
        'reference_code'
    ];
}

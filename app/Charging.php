<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Charging extends Model
{
    protected $table = "charging_table";

    protected $fillable = [
        'partner_id',
        'subscription_id',
        'charging_status',
        
    ];

    public $timestamps = false;
}

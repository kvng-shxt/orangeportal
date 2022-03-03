<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    

    protected $table = "partners_table";

    protected $fillable = [
        'name',
        'endpoint',
        'username',
        'password',
    ];

    public $timestamps = false;
}

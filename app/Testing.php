<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Testing extends Model
{
    protected $fillable = [
        'staff_id',
        'name',
        'position',
        'status',       
    ];

    public $timestamps = false;

    
}

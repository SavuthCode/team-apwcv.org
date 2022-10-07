<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    protected $fillable = [
        'testing_id',
        'category',
        'test_detail',
        'request_by',
        'testing_name',
        'module',
        'technical_support',
        'test_type',
        'start_date',
        'end_date',
        'progress',  
        'remark',
        'members',
        'isbuplic',
        'file',   
        'leader'
    ];
}

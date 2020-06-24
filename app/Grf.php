<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grf extends Model
{
    protected $table = 'Grf';
    protected $fillable = [
    	'grf_number',
    	'heir_code',
    	'employee_number',
    	'access_code',
    	'status',
    ];
}

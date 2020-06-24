<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shipping extends Model
{
    protected $table = 'Shipping';
    protected $fillable = [
    	'shipping_number',
    	'req_code',
    	'gerf_number',
    	'status',
    	'created_at'
    ];
}

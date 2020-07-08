<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cod extends Model
{
    protected $table = 'Cod';
    protected $fillable = [
   		'cod_code',
   		'request_code',
   		'created_date',
   		'status'	    
   	];
}

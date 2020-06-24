<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Testing extends Model
{
    protected $table = 'testing';
    protected $fillable = [
    	'name',
    	'qty',
    	'price',
    	'weight'
    ];
}

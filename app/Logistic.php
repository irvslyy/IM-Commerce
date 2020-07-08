<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Logistic extends Model
{
    protected $table = 'Logistic';
    protected $fillable = [
    	'logistic_number',
    	'cod_number',
    	'shipping_number'
    ];
    public function Grf()
    {
    	return $this->belongsToMany('App\Grf');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    protected $table = 'Orders';
    protected $fillable = [
    	'transaction_date',
    	'status'
    ];
    public function items()
    {
    	return $this->belongsTo('App\Items');
    }
}

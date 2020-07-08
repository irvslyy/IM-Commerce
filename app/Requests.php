<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Requests extends Model
{
    protected $table = 'Request';
    protected $fillable = [
    	'request_code',
    	'request_list',
    	'stock_code',
    	'items_code',
    	'wh_code',
    	'product_code',
    	'product_name',
    	'qty',
    	'status'
    ];
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}

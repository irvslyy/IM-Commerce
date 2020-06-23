<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Items extends Model
{
    protected $table = 'Items';
    protected $fillable = [
    	'items_code', 'product_code','product_name','qty','unit','serial_number','imei','merk','color','production_year','input_date','ouput_date','buy_price','product_category','status_product','status_item'
    ];
}

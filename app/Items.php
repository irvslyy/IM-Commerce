<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;
use Nicolaslopezj\Searchable\SearchableTrait;

class Items extends Model
{
	use SearchableTrait, Searchable;

    protected $table = 'Items';
    protected $fillable = [
    	'id','items_code', 'product_code','product_name','qty','unit','serial_number','imei','merk','color','production_year','input_date','ouput_date','buy_price','product_category','status_product','status_item'
    ];
    
    public function orders()
    {
    	return $this->hasMany('App\Orders');
    }
    
}

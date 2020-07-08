<?php

namespace App\Http\Controllers;
use App\Items;
use DB;
use Hashids\Hashids;
use Gloudemans\Shoppingcart\Facades\Cart;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $items = DB::table('Items')->get();
        return view('home',compact('items'));

        // // $client = new \GuzzleHttp\Client();
        // // $request = $client->get('http://10.9.20.139/laravel/IM-MPLAY/api/stock?departemen=inventory');
        // // $body = $request->getBody()->getContents();
            
        // return view('home',compact('body'));

    }
    public function getDataWh()
    {
        $client = new \GuzzleHttp\Client();
        $request = $client->get('https://jsonplaceholder.typicode.com/posts/1');
        $body = $request->getBody()->getContents();

        return $body;   
    }
    public function showItems($id)
    {       
        $showItems = Items::findOrFail($id);
        return view('cart.ShowItemCart',compact('showItems'));
    }
    public function HashMyAss()
    {
        $hashNow = new Hashids();
        $id = $hashNow->encode(1,2,3,4,5);

        return $id;
    }

}




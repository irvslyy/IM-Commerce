<?php

namespace App\Http\Controllers;
use App\Items;
use DB;
use Hashids\Hashids;
use Gloudemans\Shoppingcart\Facades\Cart;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $hashids;

    public function __construct()
    {
        $this->middleware('auth');
    }

    //ini json nya si captcha
    public function refreshCaptcha()
    {
        return response()->json(['captcha'=> captcha_img()]);
    }

    //ini encoding ID
    public function bar($id)
    {
        $this->Hashids->encode($id);
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
        // $e = new Hashids('',77);
        // $q = $e->encode($q);

        $showItems = Items::findOrFail($id);
        return view('cart.ShowItemCart',compact('showItems'));
    }
    public function HashMyAss()
    {
        $hashNow = new Hashids('',30);
        $id = $hashNow->encodeHex(1);

        return response()->json([
            'data' => $id,
        ]);
    }

}




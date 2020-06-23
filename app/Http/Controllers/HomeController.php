<?php

namespace App\Http\Controllers;
use App\Items;
use Gloudemans\Shoppingcart\Facades\Cart;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $items = Items::paginate(10);
        return view('home',compact('items'));
    }
}

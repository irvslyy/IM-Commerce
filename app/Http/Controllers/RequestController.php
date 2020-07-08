<?php

namespace App\Http\Controllers;
use App\Requests;
use App\User;
use App\Items;
use Illuminate\Http\Request;

class RequestController extends Controller
{
    public function store(Request $request)
    {
		$validateReq = $request->validate([
			'request_code' => 'required|min:7|max:15',
			'request_list' => 'required|min:7|max:15',
			'stock_code' => 'required|min:7|max:15',
			'items_code' => 'required|min:7|max:15',
			'wh_code' => 'required|min:7|max:15',
			'product_code' => 'required|min:7|max:15',
			'product_name' => 'required|min:7|max:15',
			'qty' => 'required|min:7|max:15',
			'status' => 'required|min:7|max:15',
		]);
		
		$requester = new Requests;
		$requester->request_code = '001';
		$requester->request_code = $request->request_code;
		$requester->request_list = $request->request_list;
		$requester->stock_code = $request->stock_code;
		$requester->items_code = $request->items_code;
		$requester->product_code = $request->product_code;
		$requester->product_name = $request->product_name;
		$requester->qty = $request->qty;
		$requester->status = $request->status;
		$requester->save();

		return back();


    }
}

<?php

namespace App\Http\Controllers;
use App\Shipping;
use DB;
use App\Exports\ShippingExport;
use Maatwebsite\Excel\Excel;
use Illuminate\Http\Request;

class ShippingController extends Controller
{
    public function index()
    {
        $shipping = Shipping::all();
        return view('shipping.shipping',compact('shipping'));
    }
    public function store(Request $request)
    {
        //
    }
    public function update(Request $request, $id)
    {
        $shipping = Shipping::find($id);
        $shipping->shipping_number = $request->shipping_number;
        $shipping->req_code = $request->req_code;
        $shipping->gerf_number = $request->gerf_number;
        $shipping->create_date = $request->create_date;
        $shipping->status = $request->status;
        $shipping->update();
        
        toastr()->success('update sukses!');
        return back();

    }
    public function destroy($id)
    {
        $shipping = Shipping::find($id);
        $shipping->delete();

        return back();
    }
    public function ExportDataShipping()
    {
        return Excel::Download(new ShippingExport,'shippingData.xlxs');
    }
}

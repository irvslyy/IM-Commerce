<?php

namespace App\Http\Controllers;
use App\Shipping;
use DB;
use App\Exports\ShippingExport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ShippingController extends Controller
{
    public function index()
    {
        $shipping = Shipping::all();
        return view('shipping.shipping',compact('shipping'));
    }
    public function update(Request $request, $id)
    {
        $validateShip = $request->validate([
            'shipping_number' => 'required|min:5|max:14',
            'req_code' => 'required|min:5|max:14',
            'gerf_number' => 'required|min:5|max:14',
            'created_at' => 'required|min:5|max:14',
            'status' => 'required|min:5|max:14',
        ]);
      
        $shipping = Shipping::find($id);
        $shipping->shipping_number = $request->shipping_number;
        $shipping->req_code = $request->req_code;
        $shipping->gerf_number = $request->gerf_number;
        $shipping->created_at = $request->created_at;
        $shipping->status = $request->status;
        $shipping->save();
            
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
        return Excel::download(new ShippingExport,'shippingData.csv');
    }
}

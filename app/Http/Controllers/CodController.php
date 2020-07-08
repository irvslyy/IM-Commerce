<?php

namespace App\Http\Controllers;
use App\Cod;
use Illuminate\Http\Request;
use App\Exports\CodExport;
use Maatwebsite\Excel\Facades\Excel;

class CodController extends Controller
{
    public function index()
    {
        $cod = Cod::all();
        return view('cod.cod',compact('cod'));
    }
    public function update(Request $request, $id)
    {
        $validateCod = $request->validate([
            'cod_code' => 'required|min:5|max:14',
            'request_code' => 'required|min:5|max:14',
            'grf_number' => 'required|min:5|max:14',
            'status' => 'required|min:5|max:14',
        ]);

        $cod = Cod::find($id);
        $cod->cod_code = $request->cod_code;
        $cod->request_code = $request->request_code;
        $cod->grf_number = $request->grf_number;
        $cod->status = $request->status;
        $cod->save();

        toastr()->success('update berhasil!');
        return back();
    }
    public function destroy($id)
    {
        $cod = Cod::find($id);
        $cod->delete();

        return back();
    }
    public function ExportDataCod()
    {
        return Excel::download(new CodExport,'CashOnDelivery.csv');
    }
}

<?php

namespace App\Http\Controllers;
use App\Grf;
use Illuminate\Http\Request;
use App\Exports\GrfExport;
use Maatwebsite\Excel\Facades\Excel;

class GrfController extends Controller
{
    public function index()
    {
        $goodsReq = Grf::all();
        return view('grf.grf',compact('goodsReq'));
    }
    public function indexJson()
    {
        $goodsReq = Grf::all();
        return response()->json([
            'data' => $goodsReq
        ]);
    }
    public function update(Request $request, $id)
    {
        $validateGrf = $request->validate([
            'grf_number' => 'required|min:5|max:14',
            'heir_code' => 'required|min:5|max:14',
            'employee_number' => 'required|min:5|max:14',
            'access_code' => 'required|min:5|max:14',
            'status' => 'required|min:5|max:14',
        ]);

        $goodsReq = Grf::find($id);
        $goodsReq->grf_number = $request->grf_number;
        $goodsReq->heir_code = $request->heir_code;
        $goodsReq->employee_number = $request->employee_number;
        $goodsReq->access_code = $request->access_code;
        $goodsReq->status = $request->status;
        $goodsReq->save();

        toastr()->success('update success!');
        return back();
    }
    public function destroy($id)
    {
        $goodsReq = Grf::find($id);
        $goodsReq->delete();

        return back();
    }
    public function ExportDataGrf()
    {
        return Excel::download(new GrfExport,'GoodReq.csv');
    }
}
<?php

namespace App\Http\Controllers;
use App\Logistic;
use Illuminate\Http\Request;

class LogisticController extends Controller
{
    public function index()
    {   
        $logistics = Logistic::all();
        return view('logistic.logistic',compact('logistics'));
    }
    
    public function delete($id)
    {
    	$delete = Logistic::find($id);
    	$delete->delete();

    	toastr()->success('hapus berhasil!');
    	return back();
    }
}
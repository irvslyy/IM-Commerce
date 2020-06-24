<?php

namespace App\Http\Controllers;
use App\Items;
use App\Testing;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Validator;

class CartController extends Controller
{
    public function store(Request $request)
    {
        // $duplicates = Cart::search(function ($cartItem, $rowId) use ($items) {
        //     return $cartItem->id === $items->id;
        // });

        // if ($duplicates->isNotEmpty()) {
        //     return back();
        // }

        Cart::add(['id' => 1, 'name' => 'rully', 'qty' => 1,'price' => 300, 'weight' => 1 ])->associate('App\Item');

        // Cart::add(array(
        //     'id' => $request->id,
        //     'name' => $request->name,
        //     'qty' => $request->qty,
        //     'price' => $request->price,
        //     'weight' => $request->weight,

        // ))->associate('App\Items');

        toastr()->success('OK');
        return back();
    }
    public function show()
    {
        return view('cart.cart');
    }

    public function showItems($id)
    {
        $showItems = Items::find($id);
        return view('cart.ShowItemCart',compact('showItems'));
    }

    public function update(Request $request, $id)
    {

       $validator = Validator::make($request->all(), [
            'quantity' => 'required|numeric|between:1,5'
        ]);

        if ($validator->fails()) {
            session()->flash('errors', collect(['jumlah harus dibawah 5.']));
            return response()->json(['success' => false], 400);
        }

        if ($request->quantity > $request->productQuantity) {
            session()->flash('errors', collect(['untuk saat ini tidak punya item yang cukup di stok.']));
            return response()->json(['success' => false], 400);
        }

        Cart::update($id, $request->quantity);
        session()->flash('success_message', 'update sukses!');
        return response()->json(['success' => true]);
    }
    public function destroy($id)
    {
        Cart::remove($id);
        return back()->with('success_message', ' Data item berhasil di hapus!');
    }
}







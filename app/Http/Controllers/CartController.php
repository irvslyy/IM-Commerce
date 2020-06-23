<?php

namespace App\Http\Controllers;
use App\Items;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Validator;

class CartController extends Controller
{

    public function store(Items $items)
    {
        $duplicates = Cart::search(function ($cartItem, $rowId) use ($items) {
            return $cartItem->id === $items->id;
        });

        if ($duplicates->isNotEmpty()) {
            toastr()->success('Item sudah ada dalam keranjang!');
            return back();
        }

        Cart::add($items->id, $items->items_code, $items->product_name, 1,$items->product_code)->associate('App\Item');

        toastr()->success('Item dimasukkan ke keranjang!');
        return back()
    }
    public function show()
    {
        return view('cart.cart');
    }
    public function edit($id)
    {
        //
    }
    public function update(Request $request, $id)
    {
       $validator = Validator::make($request->all(), [
            'quantity' => 'required|numeric|between:1,5'
        ]);

        if ($validator->fails()) {
            toastr()->error()->('jumlah harus dibawah 5.');
            session()->flash('errors', collect(['jumlah harus dibawah 5.']));
            return response()->json(['success' => false], 400);
        }

        if ($request->quantity > $request->productQuantity) {
            toastr()->error()->('untuk saat ini tidak punya item yang cukup di stok.');
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

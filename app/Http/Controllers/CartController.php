<?php

namespace App\Http\Controllers;
use App\Items;
use App\Testing;
use DB;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Validator;

class CartController extends Controller
{
    public function store(Items $items)
    { 
        $items = Items::all();
        
        Cart::add('293ad', 'INLINE CLOSURE - 264 CORE', 1, 9.99, 550, [
            'size' => 'large',
        ]);
      
        toastr()->success('Item tersimpan!');
        return back();
    }
    // public function stores(Product $product)
    // {
    //     $duplicates = Cart::search(function ($cartItem, $rowId) use ($product) {
    //         return $cartItem->id === $product->id;
    //     });

    //     if ($duplicates->isNotEmpty()) {
    //         return redirect()->route('cart.index')->with('success_message', 'Item is already in your cart!');
    //     }

    //     Cart::add($product->id, $product->name, 1, $product->price)
    //         ->associate('App\Product');

    //     return redirect()->route('cart.index')->with('success_message', 'Item was added to your cart!');
    // }
    public function storing(Items $items)
    {
        // Cart::add('293ad', 'INLINE CLOSURE - 264 CORE', 1, 9.99, 550,[$req->product_code, $req->product_name])->associate('App\Items');
        Cart::add(1,$items->id, $items->name,1)->associate('App\Items');

        toastr()->success('Items Berhasil Di simpan');
        return back();
    }
    public function show()
    {
        return view('cart.cart');
    }
    public function update(Request $request, $id)
    {

        $validator = Validator::make($request->all(), [
            'quantity' => 'required|numeric|between:1,5'
        ]);

        if ($validator->fails() || $validator !== TRUE) {
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











<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\User;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    //
    public function index(Request $re, $userid)
    {
        // $if ($re->search)
        // {
        //     $products = Product::where('title', 'LIKE', '%$re->search%')->get();

        //     return view('admin.productIndex', [
        //         'data' => $products
        //     ]);
        // }

        $cart = Cart::where('userid', 'like', $userid)->get();

        // $product = Product::all();


        return view('product.detailCart', [
            'data' => $cart,
            // 'product' => $product
        ]);

        
    }

    public function check(Request $re, $id, $productid)
    {
        $cart = Cart::find($id);
        $product = Product::find($productid);

        return view('product.detailPesanan', [
            'cart' => $cart,
            'product' => $product
        ]);
    }

    public function store(Request $re) 
    {
        if($re->userid != '')
        {
            Cart::create([
                            'id' => $re->id,
                            'userid' => $re->userid,
                            'productid' => $re->productid,
                            'jumlah' => $re->jumlah,
                        ]);
                        


                        return redirect('/pesanan/'.$re->userid);
        }
        else{
            return redirect('login');
        }
        

    }

    public function destroy(Request $re, $id)
    {
        $cart = Cart::find($id);
        $user = $cart->userid;
        $cart->delete();
        return redirect('/pesanan/'.$user);
    }

}

<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index(Request $re)
    {
        // $if ($re->search)
        // {
        //     $products = Product::where('title', 'LIKE', "%$re->search%"->get();

        //     return view('admin.productIndex', [
        //         'data' => $products
        //     ]);
        // }

        $products = Product::paginate(5);

        return view('admin.productIndex', [
            'data' => $products
        ]);

        
    }

    public function create()
    {
        return view('admin.createProduct');
    }

    public function store(Request $re) 
    {
            Product::create([
                'title' => $re->title,
                'price' => $re->price,
                'descriptions' => $re->descriptions,
                'stock' => $re->stock,

            ]);

            return redirect('/product');

        }

    public function show($id)
    {
        $products = Product::find($id);
        return $products;
    }

    public function update(Request $re, $id)
    {
        $products = Product::find($id);

        $products->update([
            'title' => $re->title,
            'price' => $re->price,
            'descriptions' => $re->descriptions,
            'stock' => $re->stock,
        ]);

        return $products;
    }

    public function destroy(Request $re, $id)
    {
        $products = Product::find($id);

        $products->delete();

        return 'success';
    }
}

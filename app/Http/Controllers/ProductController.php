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
        //     $products = Product::where('title', 'LIKE', '%$re->search%')->get();

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
        if($re->file('image')){
            Product::create([
                'id' => $re->id,
                'title' => $re->title,
                'price' => $re->price,
                'descriptions' => $re->descriptions,
                'stock' => $re->stock,
                'image' => $re->file('image')->store('product-image'),
            ]);
        }else{
            Product::create([
                'id' => $re->id,
                'title' => $re->title,
                'price' => $re->price,
                'descriptions' => $re->descriptions,
                'stock' => $re->stock,
            ]);
        }



            return redirect('/product');

    }

    public function show($id)
    {
        $products = Product::find($id);
        return $products;
    }

    public function edit($id)
    {
        $products = Product::find($id);

        return view('admin.editProduct', compact('products'));
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

        return redirect('/product');
    }

    public function destroy(Request $re, $id)
    {
        $products = Product::find($id);

        $products->delete();

        return redirect('/product');
    }

    //bannner 

    public function banner(Request $re)
    {
        $products = Product::paginate(2);

        return view('home', [
            'data' => $products
        ]);
    }

    //shop 

    public function shopView(Request $re)
    {
        $products = Product::all();

        return view('product.view', [
            'data' => $products
        ]);
    }

    public function viewer(Request $re, $id)
    {
        $products = Product::find($id);

        return view('product.detail', [
            'data' => $products
        ]);
    }
}

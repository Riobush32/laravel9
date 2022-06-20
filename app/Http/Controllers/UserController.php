<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
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

        $user = User::paginate(5);

        return view('', [
            'user' => $user
        ]);

        
    }
    
}

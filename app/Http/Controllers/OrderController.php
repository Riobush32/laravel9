<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\User;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;


class OrderController extends Controller
{
    public function index(){
        $order = Order::paginate(5);

        return view('admin.order.index', [
            'data' => $order
        ]);
    }

    public function store(Request $re)
    {
        Order::create([
            'id' => $re->id,
            'cartid' => $re->cartid,
            'userid' => $re->userid,
            'productid' => $re->productid,
            'first_name' => $re->first_name,
            'last_name' => $re->last_name,
            'phone' => $re->phone,
            'province' => $re->province,
            'city' => $re->city,
            'street' => $re->street,
            'postal_code' => $re->postal_code,
            'status' => 1,
            'jumlah' => $re->jumlah,
        ]);

        

        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = 'SB-Mid-server-3X39MOPAb84SAKeuknSqUIRn';
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;

        $user = User::find($re->userid);
        $userid = $user->id;
        $getemail = $user->email;

        $cart = Cart::find($re->cartid);
        $cartid = $cart->id;
        $proID = $cart->productid;
        
        $jumlah = $cart->jumlah;

        $product = Product::find($proID);
        $price = $product->price;
        $stok = $product->stock;
        $sisa = $stok-$jumlah;

        $amount = $price*$jumlah;

        $custumerDetails = [
            'first_name' => $re->first_name,
            'last_name' => $re->last_name,
            'email' => $getemail,
            'phone' => $re->phone,
            'address' => $re->street,
            'city' => $re->city,
            'postal_code' => $re->postal_code,
        ];

        $transactionDetails = [
            'order_id' => uniqid(),
            'gross_amount' => $amount,
        ];

        $payload = [
            'transaction_details' => $transactionDetails,
            'customer_details' => $custumerDetails
        ];

        $snapToken = \Midtrans\Snap::getSnapToken($payload);

        return view('user.index', [
            'snapToken' => $snapToken,
            'user' => $userid,
            'cart' =>   $cartid,
            'product' => $proID,
            'sisa' => $sisa,
        ]);
    }

    public function destroy(Request $re, $id, $param, $sisa, $product)
    {
        
        $P = Product::find($product);

        $P->update([
            'stock' => $sisa
        ]);
        

        $cart = Cart::find($id);
        $cart->delete($re->cart);

        return redirect('/pesan/'.$param);
    }

    public function pesanan(Request $re, $userid)
    {
        $pesanan = Order::where('userid', 'like', $userid)->get();

        return view('user.pesanan',[
            'data' => $pesanan,
        ]);
    }

    public function adminOrder(Request $re)
    {
        $order = Order::paginate(5);

        return view('admin.order.index', [
            'data' => $order
        ]);
    }

    public function statusEdit(Request $re, $id)
    {
        $order = Order::find($id);

        return view('admin.order.status', compact('order'));
    }

    public function statusUpdate(Request $re, $id)
    {
        $order = Order::find($id);
        $order->update([
            'status' => $re->status,
        ]);
        return redirect('admin/order');
    }

    public function userStatus(Request $re, $id)
    {
        $order = Order::find($id);

        return view('user.status', [
            'order' => $order
        ]);
    }

    public function userStatusUpdate(Request $re, $id)
    {
        $order = Order::find($id);
        $user = $order->userid;
        $order->update([
            'status' => $re->status,
        ]);
        return redirect('/pesan/'.$user);
    }
}

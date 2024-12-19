<?php

namespace App\Http\Controllers;

use App\Models\Carts;
use App\Models\Product;
use App\Models\User;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class UserController extends Controller
{
    public function index() {
        return view('layouts.home');
    }

    public function signup() {
        return view('layouts.signup');
    }

    public function registerUser(Request $data) {
        $newUser= new User();
        $newUser->firstname=$data->input('firstname');
        $newUser->lastname=$data->input('lastname');
        $newUser->email=$data->input('email');
        $newUser->password=$data->input('password');
        $newUser->type="Customer";
        if($newUser->save())
        {
            return redirect('login')->with('success', 'Congrats your account is ready.');
        }
        return view('layouts.signup');
    }

    public function login() {
        return view('layouts.login');
    }
    public function logout() {
        session()->forget('id');
        session()->forget('type');
        return redirect('/login');
    }

    public function loginUser(Request $data) 
    {
        $user=User::where('email', $data->input('email'))->where('password', $data->input('password'))->first();
        if($user)
        {
           if($user->status=="Blocked")
           {
            return redirect('login')->with('error', 'Your Account is Blocked Because You Have violeted Our coummunity Guidelines.');
           }
           session()->put('id',$user->id);
           session()->put('type',$user->type);
           if($user->type=='Customer')
           {
            return redirect('/');
           }
           else if($user->type=='Admin')
           {
            return redirect('/admin');
           }

        }
        else{
            return redirect('login')->with('error', 'Email/password is incorrect.');
        }
       
    }

    public function marvel() {

        
        $marvelProducts=Product::where('category', 'Marvel')->get();

        return view('layouts.marvel', compact('marvelProducts' ));
 
    }

    public function anime() {
      
        $animeProducts=Product::where('category', 'Anime')->get();
        return view('layouts.anime', compact('animeProducts' ));
    }

    public function dc() {

        
        $dcProducts=Product::where('category', 'DC')->get();

        return view('layouts.dc', compact('dcProducts' ));
 
    }
    public function gaming() {

        
        $gamingProducts=Product::where('category', 'Gaming')->get();

        return view('layouts.gaming', compact('gamingProducts' ));
 
    }
    public function series() {

        
        $seriesProducts=Product::where('category', 'Series')->get();

        return view('layouts.series', compact('seriesProducts' ));
 
    }

    public function singleProduct($id) {
        $product=Product::find($id);
        return view('layouts.singleProduct', compact('product'));
    }

     

    public function addToCart(Request $data) {
        
        if(session()->has('id')) {
            $item = new Carts();
            $item->quantity = $data->input('quantity');
            $item->productId = $data->input('id');
            $item->customerId = session()->get('id'); // Correct way to assign customer ID
            $item->size = $data->input('size'); // This should work now
            $item->save();
            return redirect()->back()->with('success', 'Congratulation! Item added to Cart. Click on bag icon to view your Cart');
        }
        else{
            return redirect('login')->with('error', 'Info! please log into system to add item to cart ');
        }
        
    }
    public function cart() {

        $cartItems=DB::table('products')
        ->join('carts', 'carts.productId', '=', 'products.id')
        ->select('products.tittle', 'products.price','products.picture', 'carts.*')
        ->where('carts.customerId', session()->get('id'))
        ->get();
        return view('layouts.cart', compact('cartItems'));
    }

    public function deleteCartItem($id) {
        $item=carts::find($id);
        $item->delete();
        return redirect()->back()->with('success', '1 item has been deleted from Cart');
    }

    public function updateCart(Request $data) {
        
        if(session()->has('id'))
        {
            $item=Carts::find($data->input('id'));
            $item->quantity=$data->input('quantity');
          
            $item->save();
            return redirect()->back()->with('success', 'Item quantity updated');
        }
        else{
            return redirect('login')->with('error', 'Info! please log into system to add item to cart ');
        }
        
    }

    public function checkout(Request $data) {
        
        if(session()->has('id'))
        {
           $order=new Order();
           $order->status="pending";
           $order->customerId=session()->get('id');
           $order->bill=$data->input('bill');
           $order->address=$data->input('address');
           $order->fullname=$data->input('fullname');
           $order->phone=$data->input('phone');
           if($order->save())
           {
            $carts=Carts::where('customerId', session()->get('id'))->get();
            foreach($carts as $item)
            {
                $product=Product::find($item->productId);
                $orderItem=new OrderItem();
                $orderItem->productId=$item->productId;
                $orderItem->quantity=$item->quantity;
                $orderItem->price=$product->price;
                $orderItem->orderId=$order->id;
                $orderItem->save();
                $item->delete();
            }
           }
           
            return redirect()->back()->with('success', 'Your order has been placed sucessfully.!');
        }
        else{
            return redirect('login')->with('error', 'Info! please log into system to add item to cart ');
        }
        
    }

    public function profile() {

        if(session()->has('id'))
        {
            $user=User::find(session()->get('id'));

            return view('layouts.profile', compact('user'));
        }
        return redirect('login');
       
    }

    
    public function updateUser(Request $data) {
        $user= User::find(session()->get('id'));
         $user->firstname=$data->input('firstname');
         $user->lastname=$data->input('lastname');
         $user->password=$data->input('password');
        if(  $user->save())
        {
            return redirect()->back()->with('success', 'Congrats your account is Updated.');
        }
     
    }

    public function myOrders() {

        if(session()->has('id'))
        {
            $orders=Order::where('customerId', session()->get('id'))->get();
            $items=DB::table('products')
            ->join('order_items','order_items.productId', 'products.id' )
            ->select('products.tittle','products.picture', 'order_items.*')
            ->get();
            return view('layouts.orders', compact('orders', 'items'));
        }
        return redirect('login');
       
    }

}


   

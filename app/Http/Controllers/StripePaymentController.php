<?php
namespace App\Http\Controllers;
use App\Models\Product;  // Add this line at the top of your controller
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Carts;
use Illuminate\Http\Request;
use Session;
use Stripe;
class StripePaymentController extends Controller
{
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripe(Request $data)
    {
        $bill=$data->input('bill');
        $fullname=$data->input('fullname');
        $phone=$data->input('phone');
        $address=$data->input('address');
        
        return view('stripe', compact('bill', 'fullname', 'phone', 'address'));
    }
    
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripePost(Request $request)
    {
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
    
        Stripe\Charge::create ([
                "amount" =>$request->input('bill') * 100,
                "currency" => "inr",
                "source" => $request->stripeToken,
                "description" => "New Order payment recieved sucessfully" 
        ]);
      
        session()->flash('success', 'Payment successful!');


        if(session()->has('id'))
        {
           $order=new Order();
           $order->status="paid";
           $order->customerId=session()->get('id');
           $order->bill=$request->input('bill');
           $order->address=$request->input('address');
           $order->fullname=$request->input('fullname');
           $order->phone=$request->input('phone');
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
           
            return redirect('/cart')->with('success', 'Your order has been placed sucessfully!');
        }

              
        return back();
    }
}

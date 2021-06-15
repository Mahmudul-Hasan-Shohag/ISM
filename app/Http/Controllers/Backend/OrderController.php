<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Customer;
use App\Models\Product;
use App\Models\OrderDetail;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Mail;
use App\Mail\OrderDetails;
class OrderController extends Controller
{
    
public function addTocart($id){
$product=Product::find($id);

Cart::add([
'id' => $product->id, 
'name' => $product->product_name, 
'qty' => 1,
'price' =>$product->price,
'weight' =>0,
'options' => ['size'=>$product->product_image]

]);
return redirect()->back()->with('message','product added to cart');
}
public function viewcart(){
    $customer=Customer::all();
    $cart=Cart::content();
    return view('backend.layouts.orders.cartview',compact('cart','customer'));
}
public function removecart($rowId)
{
    $remove=Cart::remove($rowId);
    
    return redirect()->back()->with('message', 'Item removed from cart successfully',compact('remove'));
}
public function updatecart(Request $request,$rowId)
{
   $cart=$request->qty;
    
   Cart::update($rowId,$cart);
   return redirect()->back();
}
public function createinvoice(Request $request){
    $request->validate([
         
        'customer_id'=>'required',
         'cash'=>'required',
         'due'=>'required'
    ],
        [
            'customer_id.required'=>'Select Customer ID!',
        
        ]);

$cart=Cart::content();

$payment=$request->payment_status; 
$cash=$request->cash; 
$due=$request->due;   
$customerID=$request->customer_id;
$customer=Customer::where('id',$customerID)->first();
return view('backend.layouts.orders.invoice',compact('customer','cart','payment','cash','due'));
}

public function createFinalInvoice(Request $request){
   
    $carts=Cart::content(); 
   $order = Order::create([
    
        'customer_id'=>$request->customer_id,
        'cus_name'=>$request->cus_name,
        'cus_mobile'=>$request->cus_mobile,
        'cus_email'=>$request->cus_email,
        'cus_address'=>$request->cus_address,
        'order_date'=>$request->order_date,
        'order_status'=>$request->order_status,
        'total_products'=>$request->total_products,
        'subtotal'=>$request->subtotal,
        'totalprice'=>$request->totalprice,
        'payment_status'=>$request->payment_status,
        'cash'=>$request->cash,
        'due'=>$request->due,
    
        ]);


        foreach( $carts as $cart){
            OrderDetail::create([
                'product_id'=>$cart->id,
                'order_id' => $order->id,
                'product_name' => $cart->name,
                'quantity' => $cart->qty,
                'unit_price' => $cart->price,
            ]);
        }

        //sending email
Mail::to($order->cus_email)->send(new OrderDetails($carts));

    return redirect()->route('order.show')->with(Cart::destroy());


    }

      public function showorder(){
$order=Order::paginate(5);
return view('backend.layouts.orders.ordershow',compact('order'));
    
        }
        public function orderdetails(){
            $orderdetails=OrderDetail::all();
            
            return view('backend.layouts.orders.orderdetails',compact('orderdetails'));
        }

        public function orderview($id){
$order=Order::find($id);
return view('backend.layouts.orders.orderview',compact('order'));
        }
        
        
 public function sellconfirm($id){
    $sell=Order::find($id);
    $sell->order_status='SOLD';
    $sell->save();

    $orderdetails=OrderDetail::where('order_id',$id)->get();
   
    foreach($orderdetails as $data){
    $products=Product::where('id',$data->product_id)->first();
    $products_quantity=$products->quantity;
    
    $order=Order::find($id);
    $order_quantity=$order->total_products;
    $update_quantity=$products_quantity-$order_quantity;
       Product::where('id',$data->product_id)->update(['quantity'=> $update_quantity]);
    }

    return redirect()->route('order.show')->with('message','Your product has been delivered');
        }
       
 public function updateinvoice($id){
            $orderdetails=OrderDetail::with('orderdetailsOrder')->first();
            
               $order=OrderDetail::select('product_name')->where('order_id',$id)->get();

          
            return view('backend.layouts.orders.updateinvoice',compact('orderdetails','order'));
        }
        public function orderformat(){
            $order=Order::truncate();
            $order->delete();
            return redirect()->back()->with('message','Your Date has benn formatted');
        }
        public function orderDetailformat(){
            $order=OrderDetail::truncate();
            $order->delete();
            return redirect()->back()->with('message','Your Date has benn formatted');
        }

}

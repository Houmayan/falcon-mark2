<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;

use function Termwind\render;

class CheckoutController extends Controller
{
    public function checkout()
    {   
        // $status = $request->get('status');
        
       

		 return view('user_panel.checkout');

    }

    public function afterPayment(Request $request)
    {   
        $statusOfSub = $request->get('statusOfSub');
        $name = $request->get('name');
        $price= $request->get('price');
        $method =$request->get('method');
        $plan =$request->get('plan');
        $tprice =$request->get('tprice');
        $user_id =$request->get('user_id');
        $email =$request->get('email');
        $billing_add =$request->get('billing_add');
        $b_number =$request->get('b_number');
        $b_trans =$request->get('b_trans');
        $billing_phone =$request->get('billing_phone');

        

        $prod = new Payment();
        // $prod -> status=$status;
        $prod -> statusOfSub=$statusOfSub;
        $prod -> name=$name;
        $prod -> price=$price;
        $prod -> method=$method;
        $prod -> plan=$plan;
        $prod -> tprice=$tprice;
        $prod -> user_id=$user_id;
        $prod -> email=$email;
        $prod -> billing_add=$billing_add;
        $prod -> b_number=$b_number;
        $prod -> b_trans=$b_trans;
        $prod -> billing_phone=$billing_phone;
        
        $prod -> save();
        return redirect('/payment-success');
    }


}
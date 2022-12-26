<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    public function subcript()
    {   
        $data =Payment::all();
        return view('user_panel.subscription',compact('data'));
    }
}

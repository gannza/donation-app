<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    //
    public  function store(Request $request)
    {
        $payment =Payment::create($request->all());
        return $payment;
    }
}

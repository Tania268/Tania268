<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    public function showPaymentForm()
    {
        return view('payment');
    }

    public function processPayment(Request $request)
    {
        $request->validate([
            'payment_method' => 'required',
            'amount' => 'required|numeric|min:0',
        ]);

        $payment = new Payment();
        $payment->user_id = Auth::id();
        $payment->payment_method = $request->payment_method;
        $payment->amount = $request->amount;
        $payment->save();

        return redirect()->route('payment_success');
    }

    public function paymentSuccess()
    {
        return view('payment_success');
    }
}

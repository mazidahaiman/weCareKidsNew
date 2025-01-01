<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function showPaymentPage()
    {
        return view('payment');
    }

    public function processPayment(Request $request)
    {
        // Validate input
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'card_number' => 'required|digits:16',
            'expiry_date' => 'required',
            'cvv' => 'required|digits:3',
            'subscription_plan' => 'required',
        ]);

        // Simulate payment processing (replace this with actual logic later)
        $subscription = $request->subscription_plan;

        return redirect()->route('payment.page')->with('success', "Your $subscription subscription has been successfully processed!");
    }
}


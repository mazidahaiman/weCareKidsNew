<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    public function subscribe(Request $request)
    {
        $plan = $request->input('plan');
        if ($plan === 'monthly') {
            $amount = 12; // RM12 for monthly
        } elseif ($plan === 'yearly') {
            $amount = 150; // RM150 for yearly
        } else {
            return back()->with('error', 'Invalid plan selected');
        }

        // Here, integrate with a payment gateway (e.g., Stripe, PayPal)
        // For example:
        // $paymentGateway->charge($amount);

        return back()->with('success', "You have subscribed to the $plan plan for RM$amount.");
    }
}

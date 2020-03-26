<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function paymentProcess(){
      \Stripe\Stripe::setApiKey("secret here");
      $amount = 1000;
      $token = $_POST['stripeToken'];
      $charge = \Stripe\Charge::create([
        'amount' => $amount,
        'currency' => 'usd',
        'description' => 'Example charge',
        'source' => $token
      ]);
    }
}

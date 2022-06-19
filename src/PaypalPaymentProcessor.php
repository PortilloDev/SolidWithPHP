<?php 

namespace App;

use App\PayPal\PayPalApi;
use App\Interfaces\PaymentProcessor;




class PayPalPaymentProcessor implements PaymentProcessor
{
    protected$payPalApi;
    
    public function __construct(PayPalApi $payPalApi)
    {
        $this->payPalApi = $payPalApi;
    }

    public function pay()
    {
        $this->payPalApi->chargeCustomer();
    }
}
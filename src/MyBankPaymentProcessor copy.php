<?php 

namespace App;

use App\Interfaces\PaymentProcessor;
use App\MyBank\MyBankApi;

class MyBankPaymentProcessor implements PaymentProcessor
{
    protected $myBankApi;

    public function __construct(MyBankApi $myBankApi)
    {
        $this->myBankApi = $myBankApi;
    }

    public  function pay()
    {
        $this->myBankApi->charge();
    }
}
<?php

class Shop
{
    public function buy(IPayment $payment, $sum, $phone)
    {
        return $payment->response($sum, $phone);
    }
}
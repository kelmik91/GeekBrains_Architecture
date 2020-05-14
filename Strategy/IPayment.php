<?php

abstract class Ipayment
{
    protected $payment;

    public function response($sum, $phone) {
        echo $this->payment . " - оплата на сумму {$sum}. Оплата с номера: " . $phone . PHP_EOL;
    }
}
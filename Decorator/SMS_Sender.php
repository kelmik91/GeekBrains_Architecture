<?php

class SMS_Sender implements ISender
{
    protected $sender;
    private $phone;

    public function __construct($phone, $sender)
    {
        $this->phone = $phone;
        $this->sender = $sender;
    }

    public function send()
    {
        echo 'СМС на телефон ' . $this->phone . PHP_EOL;
        $this->sender->send();
    }
}
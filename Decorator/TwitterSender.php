<?php

class TwitterSender implements ISender
{
    protected $sender;
    private $twitter;

    public function __construct($twitter, $sender)
    {
        $this->twitter = $twitter;
        $this->sender = $sender;
    }

    public function send()
    {
        echo 'Сообщение в twitter ' . $this->twitter . PHP_EOL;
        $this->sender->send();
    }
}
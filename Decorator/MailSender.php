<?php

class MailSender implements ISender
{
    protected $sender;
    private $email;

    public function __construct($email, $sender)
    {
        $this->email = $email;
        $this->sender = $sender;
    }

    public function send()
    {
        echo 'Сообщение на e-mail ' . $this->email . PHP_EOL;
        $this->sender->send();
    }
}
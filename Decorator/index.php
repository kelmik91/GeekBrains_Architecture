<?php

require "ISender.php";
require "MailSender.php";
require "SMS_Sender.php";
require "TwitterSender.php";
require "Sender.php";


$decorator = new MailSender('admin@admin.ru',
    new TwitterSender('twitter',
        new SMS_Sender('+79991234567',
            new Sender())));

$decorator->send();
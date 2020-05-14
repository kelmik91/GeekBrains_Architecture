<?php

require "IPayment.php";
require "KiwiPayment.php";
require "Shop.php";
require "WebMoneyPayment.php";
require "YandexPayment.php";

$shop = new Shop;
$shop->buy(new KiwiPayment, 100, 89991234567);
$shop->buy(new YandexPayment, 200, 89991234567);
$shop->buy(new WebMoneyPayment, 300, 89991234567);
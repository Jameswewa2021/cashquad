<?php

require "Coin.php";
require "vendor/autoload.php";

use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule;

$capsule->addConnection([
    'driver' => "mysql",
    'host' => "localhost",
    'database' => "edusavac_cashquad",
    'username' => "edusavac_cashquad",
    'password' => "cashquad2019"
]);
$capsule->setAsGlobal();
$capsule->bootEloquent();

require "Payment.php";

$coin = new CoinPaymentsAPI();
$coin->Setup("E81a0ab909201a8C61aFaEc38f17AE5e59c257e4738efb171972Df6c8c57Cc80","b2f408070cd57d932e8117d8237ba0111b6141c2c3b79456c6876a3c689dafb1");
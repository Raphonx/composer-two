<?php

use App\Wcs\Hello;
use HelloWorld\SayHello;

require "../vendor/autoload.php";

$toto = new Hello();
echo $toto->talk();

$tata = new SayHello();
echo $tata->world();
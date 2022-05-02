<?php 
@include_once __DIR__ . '/classes/cibo.php';

$croccantini= new Cibo ('Croccantini');
$croccantini->setPrice(100);
$croccantini->applyDiscount(20);
var_dump($croccantini);
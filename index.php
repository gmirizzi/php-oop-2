<?php 
@include_once __DIR__ . '/classes/cibo.php';
@include_once __DIR__ . '/classes/ordine.php';

$croccantini= new Cibo ('Croccantini');
$croccantini->setPrice(100);
$croccantini->applyDiscount(20);
var_dump($croccantini);
echo date('m/y');

$primoOrdine= new Ordine('12/23', 2);
var_dump($primoOrdine);
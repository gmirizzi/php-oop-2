<?php 
@include_once __DIR__ . '/classes/cibo.php';
@include_once __DIR__ . '/classes/ordine.php';

$croccantini= new Cibo ('Croccantini');
$croccantini->setPrice(100);
$croccantini->applyDiscount(20);
var_dump($croccantini);

$primoOrdine= new Ordine(5, 22, 2);
var_dump($primoOrdine);
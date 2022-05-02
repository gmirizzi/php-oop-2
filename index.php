<?php 
@include_once __DIR__ . '/classes/cibo.php';

$croccantini= new Cibo ('Croccantini');
$croccantini->setPrice(100);
var_dump($croccantini);
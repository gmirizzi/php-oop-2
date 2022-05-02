<?php
class Ordine {
    private $id;
    private $user_id;
    private $product_id;

    public function __construct($scadenza, $product_id)
    {   
        if (strtotime(DateTime::createFromFormat('m/y',$scadenza))>strtotime(date('m/y'))) {
            $this->product_id=$product_id;
        }
    }
}
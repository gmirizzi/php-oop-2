<?php
class Ordine {
    private $id;
    private $user_id;
    private $product_id;

    public function __construct($scadenza, $product_id)
    {
        $this->product_id=$product_id;
    }
}
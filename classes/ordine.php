<?php
class Ordine {
    private $id;
    private $user_id;
    private $product_id;

    public function __construct($mese_scadenza, $anno_scadenza, $product_id)
    {   
        if ($anno_scadenza>date('y') || ($anno_scadenza==date('y') & $mese_scadenza>=date('m')) ) {
            $this->product_id=$product_id;
        }
    }
}
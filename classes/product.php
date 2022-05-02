<?php
class Product
{
    protected $id;
    protected $name;
    protected $price;
    protected $sconto=0;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    public function applyDiscount($sconto){
        $discount=$this->price*$sconto/100;
        $this->price-=$discount;
    }
}

<?php

class Product
{
    public $name;
    public $desc;
    public $price;
    public $type;
    

    function __construct($name, $desc, $price, $type){
        $this->name = $name;
        $this->desc = $desc;
        $this->price = $price;
        $this->type = $type;
    }
}
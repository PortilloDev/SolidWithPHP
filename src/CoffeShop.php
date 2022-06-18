<?php

namespace App;

class CoffeShop
{
    protected $products = [];

    public function addProducts(array $products) :void
    {
        $this->products = $products;
    }

    public function getProducts() :array 
    {
        return $this->products;
    }

    public function removeProducts(int $id) :void
    {
         //
    }

    
}



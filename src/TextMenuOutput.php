<?php 

namespace App;

use App\Interfaces\MenuOutput;

class TextMenuOutput implements MenuOutput
{
    public function output(array $products)
    {
        $menu = '';

        $menu .= "ID\tNombre\t\tPrecio\n";
        $menu .= str_repeat('=', 30). "\n";

        foreach ($products as $product)
        {
            $menu .= $product['id'] . "\t"
                    . str_pad($product['name'], 15, ' ') . "\t"
                    . $product['price'] . "\n";
        }


        return $menu ;
    }
}
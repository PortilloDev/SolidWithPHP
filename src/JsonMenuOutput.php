<?php 

namespace App;

use App\Interfaces\MenuOutput;

class JsonMenuOutput implements MenuOutput
{
    public function output(array $products)
    {
        return json_encode($products);
    }
}
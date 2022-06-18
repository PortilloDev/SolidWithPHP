<?php 

namespace App;

use App\Interfaces\MenuOutput;

class Menu 
{
    public function view(array $products, MenuOutput $output)
    {
        return $output->output($products);
    }
}
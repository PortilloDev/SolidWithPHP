<?php 

include_once '../vendor/autoload.php';

use App\CoffeShop;
use App\Menu;

$products = [
    ['id'=> 1, 'name'=> "Cafe colombia", "price" => '3'],
    ['id'=> 2, 'name'=> "Cafe libia", "price" => '4'],
    ['id'=> 3, 'name'=> "Cafe africa", "price" => '5'],
];

$shop = new CoffeShop();

$shop->addProducts($products);

$menu = new Menu();
echo $menu->view($shop->getProducts());
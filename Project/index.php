<?php
/*
require_once "Core/IEntity.php";
require_once "Core/BaseEntity.php";
require_once "Services/JsonDB.php";
require_once "Models/Category.php";
require_once "Models/Product.php";
require_once "Factories/ProductFactory.php";
*/
require_once "autoload.php";

use Project\Factories\ProductFactory;
use Project\Factories\CategoryFactory;
use Project\Services\JsonDB;

$product = ProductFactory::create(
    "Lenovo Laptop",
    899.99,
    "Laptopi",
    "Prijenosna raćunala"
);
echo "<hr>";

$db = JsonDB::getInstance();
$db->save("products.json",$product->toArray());

echo "<hr>";

$p2 = ProductFactory::create(
"Banana",
2.59,
"Voce",
"Ovo je kategorija voce"  
);

$db->save("products.json",$p2->toArray());
echo "<hr>";

$cat1 = CategoryFactory::create("Povrće","Ovo je povrce");
$p3 = ProductFactory::create(
    "krumpir",
    3.99,
    $cat1->name,
    $cat1->description
);
$db->save("products.json",$p3->toArray());
echo "<hr>";

?>
<?php

//require_once "Core/IEntity.php";
//require_once "Core/BaseEntity.php";
//require_once "Services/JsonDB.php";
//require_once "Models/Category.php";
//require_once "Models/Product.php";
//require_once "Factories/ProductFactory.php";

require_once "autoload.php";


use Project\Factories\ProductFactory;
use Project\Services\JsonDB;
use Project\Factories\CategoryFactory;

$product = ProductFactory::create(
    "Lenovo Laptop",
    899.99,
    "Laptopi",
    "Prijenosna racunala"
);
echo "<hr>";

$db = JsonDB::getInstance();
$db->save("products.json",$product->toArray());

echo "<hr>";

$cat1 = CategoryFactory::create("Povrce","Ovo je povrce");
$p3 = ProductFactory::create(
    "Krumpir",
    2.99,
    $cat1->name,
    $cat1->description
);

$db->save("products.json",$p3->toArray());
echo "<hr>";


?>
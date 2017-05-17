<?php
/**
 * Created by PhpStorm.
 * User: wangze
 * Date: 2017/5/16
 * Time: 15:15
 */
// create_product.php
require_once "bootstrap.php";

$newProductName = $argv[1];

$product = new Product();
$product->setName($newProductName);

$entityManager->persist($product);
$entityManager->flush();

echo "Created Product with ID " . $product->getId() . "\n";
<?php
require 'Product.php';
require 'Category.php';

$category = new Category(1,'livre','Regroupement de livres',new DateTime(),new DateTime());

$product = new Product(1,'livre',['https://www.photos.com/livre.png'],45,"Un roman",10,new DateTime(),new DateTime(),$category->getId() );

var_dump($category);
echo "<hr>";
print_r($category);
echo "<hr>";
var_dump($product);
echo "<hr>";
print_r($product);
echo "<hr>";
?>
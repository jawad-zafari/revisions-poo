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
echo "Category ID: " . $category->getId() . "<br>";
echo "Category Name: " . $category->getName() . "<br>";
echo "Category Description: " . $category->getDescription() . "<br>";
echo "Name: " . $product->getName() . "<br>";
echo "ID: " . $product->getId() . "<br>";
echo "Quantity: " . $product->getQuantity() . "<br>";
echo "Photo: " . $product->getPhotos()[0] . "<br>";
echo "Price: " . $product->getPrice() . "<br>";
echo "Description: " . $product->getDescription();

?>
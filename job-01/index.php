<?php
require_once('Product.php'); 

$product = new Product('livre',1,'Un roman',10,['https://www.photos.com/livre.png'],25, new DateTime(),new DateTime());
print_r($product);
echo "<hr>";
echo $product->getName()."<br>";
echo $product->getId()."<br>";
echo $product->getQuantity()."<br>";
echo $product->getPhotos()[0]."<br>";
echo $product->getPrice()."<br>";
echo $product->getDescription();
?>
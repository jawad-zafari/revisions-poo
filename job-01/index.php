<?php
require 'Product.php'; 

$product = new Product('livre',1,'Un roman',10,['https://picsum.photos/200/300'],25, new DateTime(),new DateTime());

var_dump($product);

$product->setPrice(25);

echo $product->getPrice();
?>
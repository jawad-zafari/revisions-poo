<?php
class Product {
    private $name;
    private $id;
    private $description;
    private $quantity;
    private $photos;
    private $price;
    private $createdAt;
    private $updatedAt;

    public function __construct($name,$id, $description,$quantity,$photos,$price, $createdAt, $updatedAt) {
        $this->name = $name;
        $this->id = $id;
        $this->description = $description;
        $this->quantity = $quantity;
        $this->photos = $photos;
        $this->price = $price;
        $this->createdAt = $createdAt;
        $this->updatedAt = $updatedAt;
    }

    public function setId($id) {
        $this->id = $id;
    }
    public function setName($name) {
        $this->name = $name;
    }
    public function setPhotos($photos) {
        $this->photos = $photos;
    }
    public function setPrice($price) {
        $this->price = $price;
    }
    public function setDescription($description) {
        $this->description = $description;
    }
    public function setQuantity($quantity) {
        $this->quantity = $quantity;
    }
    public function setCreatedAt($createdAt) {
        $this->createdAt = $createdAt;
    }
    public function setUpdatedAt($updatedAt) {
        $this->updatedAt = $updatedAt;
    }
    public function getName() {
        return $this->name;
    }
    public function getId() {
        return $this->id;
    }
    public function getDescription() {
        return $this->description;
    }
    public function getQuantity() {
        return $this->quantity;
    }
    public function getPhotos() {
        return $this->photos;
    }
    public function getPrice() {
        return $this->price;
    }
    public function getCreatedAt() {
        return $this->createdAt;
    }
    public function getUpdatedAt() {
        return $this->updatedAt;
    }
}
?>
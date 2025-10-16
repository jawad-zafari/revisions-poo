<?php
class Category {
    private $id;
    private $name;
    private $description;
    private $createdAt;
    private $updatedAt;
 public function __construct($id, $name, $description, $createdAt, $updatedAt) {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->createdAt = $createdAt;
        $this->updatedAt = $updatedAt;
    }
   
}
?>
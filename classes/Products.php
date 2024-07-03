<?php 

class Products {
    private $name;
    private $category;
    private $price;

    public function __construct($name, $category, $price){
        $this->name = $name;
        $this->category = $category;
        $this->price = $price;
    }


    public function getName(){
        return $this->name;
    }
    public function setName($name){
        return $this->name = $name;
    }
    public function getCategory(){
        return $this->category;
    }
    public function setCategory($category){
        return $this->category = $category;
    }
    public function getPrice(){
        return $this->price;
    }
    public function setPrice($price){
        return $this->price = $price;
    }
}
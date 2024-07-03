<?php  

class ProductsToys extends Products{
    private $materialType;
    private $durability;

    public function __construct($name, $category, $price, $materialType, $durability){
        parent::__construct($name, $category, $price);
        $this->materialType = $materialType;
        $this->durability = $durability;
    }

    public function getMaterialType(){
        return $this->materialType;
    }
    public function setMaterialType($materialType){
        return $this->materialType = $materialType;
    }
    public function getDurability(){
        return $this->durability;
    }
    public function setDurability($durability){
        return $this->durability = $durability;
    }
}
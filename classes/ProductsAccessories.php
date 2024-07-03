<?php  

class ProductsAccessories extends Products{
    private $type;
    private $size;

    public function __construct($name, $category, $price, $type, $size){
        parent::__construct($name, $category, $price);
        $this->type = $type;
        $this->size = $size;
    }

    public function getType(){
        return $this->type;
    }
    public function setType($type){
        return $this->type = $type;
    }
    public function getSize(){
        return $this->size;
    }
    public function setSize($size){
        return $this->size = $size;
    }
}
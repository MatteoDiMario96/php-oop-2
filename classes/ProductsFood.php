<?php  

class ProductsFood extends Products{
    private $expiryDate;
    private $weight;

    public function __construct($name, $category, $price, $expiryDate, $weight){
        parent::__construct($name, $category, $price);
        $this->expiryDate = $expiryDate;
        $this->weight = $weight;
    }

    public function getExpire(){
        return $this->expiryDate;
    }
    public function setExpire($expiryDate){
        return $this->expiryDate = $expiryDate;
    }
    public function getWeight(){
        return $this->weight;
    }
    public function setWeight($weight){
        return $this->weight = $weight;
    }
}
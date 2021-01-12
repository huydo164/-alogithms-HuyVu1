<?php

class Product{
    private $name;
    private $price;
    private $quality;
    private $categoryId;

    public function __construct($name, $price, $quality, $categoryId){
        $this->name = $name;
        $this->price = $price;
        $this->quality = $quality;
        $this->categoryId = $categoryId;
    }
    public function getPrice(){
        return $this->price;
    }
};

$product = array(
     new Product("CPU",750,10,1),
     new Product("RAM",50,2,2),
     new Product("HDD",70,1,2),
     new Product("Main",400,3,1),
     new Product("Keyboard",40,8,4),
     new Product("Mouse",25,50,4),
     new Product("VGA",60,3,3),
     new Product("Monitor",120,28,2),
     new Product("Case",120,28,5),
);


function minByPrice($listProduct){
    $count = count($listProduct);
    $max = 0;
    for($i = 1; $i < $count -1; $i++ ){
        if($listProduct[$max]->getPrice() < $listProduct[$i]->getPrice()){
            $max = $i;
        }
    }
    return $listProduct[$max];
}

var_dump(minByPrice($product));
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
    public function getName(){
        return $this->name;
    }
    public function getPrice(){
        return $this->price;
    }
    public function getQuality(){
        return $this->quality;
    }
    public function getCategory(){
        return $this->categoryId;
    }
};

$product = array(
     new Product("CPU",750,10,1),
     new Product("RAM",50,2,2),
     new Product("HDD",70,1,2),
     new Product("Main",400,3,1),
     new Product("Keyboadrd",40,8,4),
     new Product("Mouse",25,50,4),
     new Product("VGA",60,3,3),
     new Product("Monitor",120,28,2),
     new Product("Case",120,28,5),
);

//Tìm kiếm theo CategoryId;
function findCategory($listProduct, $categoryId){
    $arr = [];
    for ($i = 0; $i < count($listProduct); $i++){
        if($listProduct[$i]->getCategory() == $categoryId){
            $arr[] = $listProduct[$i];
        }
    };
    return $arr;
};

var_dump(findCategory($product, 1));


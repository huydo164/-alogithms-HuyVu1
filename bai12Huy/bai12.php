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
};

function sortByName($listProduct)  { 
    for ($i = 0; $i < count($listProduct); $i++)
    {       
        $loop = $i; 
        $current = $listProduct[$i];
        while($loop > 0 && (strlen($listProduct[$loop - 1]->getName()) < strlen($current->getName())))
        {
            $listProduct[$loop] = $listProduct[$loop - 1];
            $loop -= 1; 
        }
        $listProduct[$loop] = $current;
    }
    return $listProduct;
}

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

var_dump(sortByName($product));
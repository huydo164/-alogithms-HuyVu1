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
    public function getId(){
        return $this->categoryId;
    }
};

class Category{
    private $id;
    private $name;

    public function __construct($id, $name){
        $this->id = $id;
        $this->name = $name;
    }
    public function getName(){
        return $this->name;
    }
    public function getId(){
        return $this->id;
    }
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

$category = array(
     new Category(1,"Comuter"),
     new Category(2, "Memory"),
     new Category(3, "Card"),
     new Category(4, "Acsesory"),
);


function sortByCategoryName($listProduct,$listCategory)  { 
    $array = array();
    for($i = 0; $i < count($listCategory); $i++){
        $loop = $i;
        $current = $listCategory[$i];

        while($loop > 0 && strcmp($listCategory[$i - 1]->getName(), $current->getName() < 0)){
            $listCategory[$loop] = $listCategory[$loop - 1];
            $loop -= 1;
        }
        $listCategory[$loop] = $current;
    }
    for($i= 0 ; $i < count($listCategory) ; $i++)
        for($j = 0 ; $j <count($listProduct) -1  ; $j++)       
        {
            if($listProduct[$j]->getId() == $listCategory[$i]->getId())
            {
                $array[] = $listProduct[$j];
            }
        }
    return $array;
}
var_dump(sortByCategoryName($product, $category));
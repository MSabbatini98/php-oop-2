<?php

class Prodotto {

    //* attributi 
    protected $name; //string
    public $description; //string
    protected $status; //string
    protected $materiale; //string
    protected $price; //float

    //* construttore 
    public function __construct($name, $description, $price)
    {
        $this -> name = $name;
        $this -> description = $description;
        $this -> price = $price;
    } 


    //* metodi
    public function getNomeProdotto() 
    {
        return $this -> name;  
    }
    public function setPrice()
    {
        return $this -> price . '€';  
    }

}

class EcoFriendly extends Prodotto {
    public function __construct($name, $description, $price, $material, $color)
    {
        parent::__construct($name, $description, $price);
        $this -> material  = $material;
        $this -> color = $color;
        
    }
}

class ReUse extends Prodotto {

    public function __construct($name, $description, $price, $status, $original_price)
    {
        parent::__construct($name, $description, $price);
        $this -> status = $status;
        $this -> original_price = $original_price;
        
    }
}
$item_0 = new Prodotto('Spazzola peli del cane', 'Spazzola riutilizzabile per peli del cane', 'yes', 15.99);
$item_1 = new EcoFriendly('Borraccia', 'borraccia termica da 1l', 12.99, 'acciaio', 'blu');
$item_2 = new EcoFriendly('Cotton Fiock', 'Cotton fiock in bambu', 7.49, 'bambu e cotone', 'marrone & bianco');
$item_3 = new ReUse('Vaso da giardino', 'vaso da giardino rettangolare, 20x40x15cm', 5.35, 'come nuovo', 15);

$item  = [
    $item_0,
    $item_1,
    $item_2,
    $item_3,
];  

?>
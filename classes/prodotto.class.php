<?php

class Prodotto {

    //* attributi 
    protected $name; //string
    public $description; //string
    protected $status; //string
    protected $materiale = "N/A"; //string
    protected $price; //float
    protected $sconto = 0; //int

    //* construttore 
    public function __construct($name, $description, $price,  $sconto = NULL, $material = NULL )
    {
        $this -> name = $name;
        $this -> description = $description;
        $this -> price = $price;
        $this -> sconto = $sconto;
        $this -> material = $material;
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

    public function setSconto() 
    {
        $this->sconto = '0';
        return $this -> sconto;
    }

    public function getMaterial()
    {
        return $this -> material;  
    }
}

class EcoFriendly extends Prodotto {
    public function __construct($name, $description, $price,  $material, $color)
    {
        parent::__construct($name, $description, $price);
        $this -> material  = $material;
        $this -> color = $color;
        
    }
    
    public function getMaterial()
    {
        return $this -> material;  
    }
}

class ReUse extends Prodotto {

    public function __construct($name, $description, $price,  $status, $material = NULL)
    {

        parent::__construct($name, $description, $price, $material);
        $this -> status = $status;
        $this -> material  = $material;

    }

    public function setSconto() 
    {
        if ($this-> status == "new") {
            $this->sconto = '30%';
        }  elseif ($this-> status == "used") {
            $this->sconto = '70%';
        }  elseif ($this-> status == "used as new") {
            $this->sconto = '50%';
        } else {
            $this->sconto = '0%';
        }
        return $this -> sconto;

    }

    public function getMaterial()
    {
        return $this -> material;  
    }
}

?>
<?php

class Animal{

    protected $legs = 2;
    protected $cold_blooded = false; 
    protected $name = "";
    
    public function __construct($name){
        $this->name = $name;
    }

    public function getName(){
        return $this->name;
    }

    public function getLegs(){
        return $this->legs;
    }
    
    public function getColdBlooded(){
        return (boolval($this->cold_blooded) ? 'true' : 'false');
    }

}


?>
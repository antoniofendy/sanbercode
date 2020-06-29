<?php

    class Frog extends Animal{
        
        function __construct($name){
            $this->legs = 4;
            //Katak hewan berdarah dingin
            $this->cold_blooded = true;

            $this->name = $name;
        }

        public function jump(){
            echo "hop hop";
        }

    }

?>
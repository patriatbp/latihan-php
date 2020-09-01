<?php

class Katak extends Animal{
    public $legs = 4;

    public function get_legs(){
        return $this->legs;
    }
    public function jump(){
        echo "hop hop";
    }
}
?>
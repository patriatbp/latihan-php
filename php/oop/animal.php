<?php

class Animal{
    public $name;
    public $legs = 2;
    public $cold_blooded = "false";

    public function __construct($name){
        $this->name = $name;
    }
    public function get_name(){
        return $this->name;
    }
    public function get_legs(){
        return $this->legs;
    }
    public function get_cold_blooded(){
        return $this->col_blooded;
    }
}
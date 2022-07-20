<?php 

class ObjectClass{

    protected $shapes = [];

    public function __construct($shapes){
        $this->shapes = $shapes;
    }

    public function shapes(){

        return $this->shapes;
    }

    

}
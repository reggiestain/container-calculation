<?php 

Class Calculation{

    public $transport = [];

    private $container;

    private $object;

    public function __construct($transport){
        $this->transport = $transport;
        $this->object = new ObjectClass($transport);
        $this->container = new Container();
    }

    public function numberOfContainers(){

        $bigContainer =  $this->container->big();
        $smallContainer =  $this->container->small();
        $msg = "";

        foreach ($this->object->shapes() as $shape) {
            if(is_a($shape, 'Square')) {
                if(pow($shape->length, 2) <= $bigContainer['area']){
                   $squareArea[] = pow($shape->length, 2);
              }elseif(pow($shape->length, 2) > $bigContainer['area']){
                $msg = "The square with length ".$shape->length.      
                       " is too big for the available container sizes. The rest of the objects will fit in ";
              }
            }elseif(is_a($shape, 'Circle')) {
                if(pi() * pow($shape->radius, 2) <= $bigContainer['area']) {
                   $circleArea[] = pi() * pow($shape->radius, 2);
                }elseif(pi() * pow($shape->radius, 2) > $bigContainer['area']){
                    $msg = "The Circle with radius ".$shape->radius.      
                           " is too big for the available container sizes. The rest of the objects will fit in ";
                }
            }
        }
            
        $totalArea = array_sum($squareArea) + array_sum($circleArea);
    
        if($bigContainer['area'] >= $totalArea){
            $msg .= "1 big container";
        }elseif($totalArea > $bigContainer['area']){
            $mergeArray = array_merge($circleArea, $squareArea);
            foreach($mergeArray as $value) {
                if($value <= $smallContainer['area']) {
                   $msg .="Small";
                }else{
                   $totalReminder[] = $value;
                }
            }  
            if($bigContainer['area'] >= array_sum($totalReminder)){
               $msg .= " and a big container.";
            }elseif(array_sum($totalReminder) > $bigContainer['area']){
               $msg .=" and 2 big containers.";
            }

        }
         
        return $msg;
    }
}
<?php

Class Container implements SizeInterface{
    
    public function big($length = 200, $width = 300){    

          $size = ['leghth'=>$length, 'width'=>$width];
          $area = $this->getArea($length, $width);  

        return ['size'=>$size, 'area'=>$area];
    }

    public function small($length = 100, $width = 100){

          $size = ['leghth'=>$length, 'width'=>$width];
          $area = $this->getArea($length, $width);
            
       return ['size'=>$size, 'area'=>$area];
    }

    private function getArea($length, $width){

          if(is_numeric($length) && is_numeric($width)){

        return $length * $width;
      }
    }

}
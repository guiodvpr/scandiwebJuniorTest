<?php

class furniture extends product{

    protected $typeValue;

  
    function getTypeValue(){
        return $this->typeValue;
       }
    

   function setTypeValue($typeValue){
    $this->typeValue='Dimentions: '.$typeValue;
   }
}
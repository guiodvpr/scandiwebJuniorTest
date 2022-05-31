<?php

class book extends product{

    protected $typeValue;

   
    function getTypeValue(){
        return $this->typeValue;
       }
    

   function setTypeValue($typeValue){
    $this->typeValue=$typeValue.' KG';
   }
}
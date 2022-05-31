<?php

class dvd extends product{

    protected $typeValue;
    protected  $di;
    
    
    public function getTypeValue(){
        return $this->typeValue;
       }
    

   public function setTypeValue($typeValue){
    $this->typeValue='Size: '.$typeValue. ' MB';
   }

}
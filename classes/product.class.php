<?php


abstract class product{
    protected $sku;
    protected $title;
    protected $price;
    protected $type;



    public function getSku(){
        return $this->sku;
    }
    public function getTitle(){
        return $this->title;
    }
    public function getPrice(){
        return $this->price;
    }
    public function getType(){
        return $this->type;
    }
    
    public function setSku( $skuNew){
         $this->sku=$skuNew;
    }
    
    public function setTitle($titleNew){
         $this->title=$titleNew;
    }
    public function setPrice( $priceNew){
        $this->price=$priceNew;
    }
    public function setType( $typeNew){
        $this->type=$typeNew;
    }

    abstract public function getTypeValue();
    abstract public function setTypeValue($typeValue);

}
<?php
include_once 'bootstrap.php';
require './classes/product.class.php';
require './classes/furniture.class.php';
require './classes/dvd.class.php';
require './classes/book.class.php';

$data = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $type = intval($_POST['productType']);

    if (in_array($type, [1,2,3])){
        $sku   = strval($_POST['sku']);
        $title = strval($_POST['name']);
        $price = doubleval($_POST['price']);
        $type  = intval($_POST['productType']);

        $type_value ='';
        switch ($type) {
            case 1:
                $product = new dvd();
                $type_value= strval($_POST['input_size']);;
            break;
            case 2:
                $product = new book();
                $type_value= strval($_POST['input_weight']);
            break;
            case 3:
                $product = new furniture();
                $type_value= strval($_POST['input_dimensions_h'].' X '.$_POST['input_dimensions_w'].' X '.$_POST['input_dimensions_l']);
            break;
        }

        $product->setTitle($title);
        $product->setSku($sku);
        $product->setPrice($price);
        $product->setType($type);
        $product->setTypeValue($type_value);

        $sql = "insert into products(title,SKU, price, type,type_value) VALUES ('".$product->getTitle()."','".$product->getSku()."','".$product->getPrice()."','".$product->getType()."','".$product->getTypeValue()."')";

        if ($conn->query($sql) === TRUE) {
            header("location:index.php");
        }
    }
}
echo $twig->render('addProduct.html');

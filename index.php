<?php

include_once 'bootstrap.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    if (isset($_POST['delete_products']) && is_array($_POST['delete_products'])){
        $delete_id_list = [];

        foreach ($_POST['delete_products'] as $product_id){
            $product_id = intval($product_id);

            if ($product_id > 0){
                $delete_id_list[] = $product_id;
            }
        }

        if (sizeof($delete_id_list) > 0){
            $conn->query('DELETE FROM `products` WHERE id IN (' . implode(',', $delete_id_list) . ')');
        }
    }
}


$data = [];

$result = $conn->query('SELECT * FROM `products` ORDER BY SKU ASC');

if ($result->num_rows > 0){
    $data['products'] = [];

    while ($row = $result->fetch_assoc()){
        $data['products'][] = $row;
    }
}

echo $twig->render('index.html', $data);

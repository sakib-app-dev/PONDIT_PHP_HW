<?php

if($_SERVER['REQUEST_METHOD'] !== 'POST'){
    echo 'Only post req allow';
    die();
}
include_once"./../../app/class/Product.php";


$product= new Product;

if($product->createProduct($_POST)){

    header('Location:  ./../index.php' );
}else{
    header('Location:  ./product-create.php' );
}

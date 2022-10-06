<?php

if($_SERVER['REQUEST_METHOD'] !== 'POST'){
    echo 'Only post req allow';
    die();
}
include_once"./../../app/class/Category.php";
// echo $_POST['category_name'];

$category= new Category;
$category->updateCategory($_POST);

// header('Location:  ./index.php' );

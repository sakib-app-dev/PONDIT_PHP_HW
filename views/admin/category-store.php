<?php

if($_SERVER['REQUEST_METHOD'] !== 'POST'){
    echo 'Only post req allow';
    die();
}
include_once"./../../app/class/Category.php";


$category= new Category;

if($category->createCategory($_POST)){

    header('Location:  ./../index.php' );
}else{
    header('Location:  ./createCategory.php' );
}
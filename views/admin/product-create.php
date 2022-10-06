<?php

include_once "./../include/header.php";
session_start();
if (isset($_SESSION['errors'])) {
    unset($_SESSION['errors']);
}
?>
<div class="border p-5">
    <h2 class="text-center">ProductForm</h2>
    <form action="./product-store.php" method="post">
        <div class="mb-3">
            <label for="product_name" class="form-label">Product Name:</label>
            <input type="text" class="form-control" id="product_name" name="product_name" placeholder="Enter Product name...">
        </div>
        <div class="mb-3">
            <label for="product_discription" class="form-label">Category Description:</label>
            <textarea class="form-control" name="product_discription" id="product_discription" cols="30" rows="4" placeholder="Enter Product Discription..."></textarea>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Product Price:</label>
            <input type="text" class="form-control" id="price" name="price" placeholder="Enter Product Price...">
        </div>
        <div class="mb-3">
            <label for="product_qty" class="form-label">Product Available Quantity:</label>
            <input type="text" class="form-control" id="product_qty" name="product_qty" placeholder="Enter Product Qty...">
        </div>
        <div class="mb-3">
            <label for="product_category" class="form-label">Category:</label>
            <input type="text" class="form-control" id="product_category" name="product_category" placeholder="select option...">
        </div>
        <div class="mb-3">
            <label for="product_img" class="form-label">Image:</label>
            <input type="img" class="form-control" id="product_img" name="product_img">
        </div>

        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>

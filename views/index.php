<?php 

include_once "./include/header.php";
include_once "./include/menu.php";
?>
<div class="container" style="height: 100vh;">
    <div class="row">
        <div class="col-md-3 border mt-5 text-center"  >
            <hr>
            <a href="index.php" class="btn btn-primary">Categories</a>
            <hr>
            <a href="./admin/createCategory.php" class="btn btn-warning">Create Category</a>
            <hr>
            <a href="./admin/products.php" class="btn btn-danger">Products</a>
            <hr>
            <a href="./admin/product-create.php" class="btn btn-info">Create Product</a>
            <hr>
        </div>
        <div class=" col-md-9 mt-5">
                <?php
                echo 
                
                include_once "./admin/categories.php"
                ?>
        </div>

    </div>
</div>

<?php
include_once "./include/footer.php";

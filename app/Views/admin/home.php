<?php 

    $this->extend('templates/admin_template'); 
 
    $this->section('content');  
 
    echo "<div class='welcome'><h1>Welcome ".session()->get('fname')."</h1></div>";
 
?>

<div class="dashboard">
    <a href="/admin/addCategory"><button class="primary-cta">Add Category</button></a>
    <a href="/admin/editCategory"><button class="primary-cta">Edit Category</button></a>
    <a href="#"><button class="primary-cta">Add Subcategory</button></a>
    <a href="#"><button class="primary-cta">Edit Subcategory</button></a>
    <a href="/admin/addProduct"><button class="primary-cta">Add Product</button></a>
    <a href="#"><button class="primary-cta">Edit Product</button></a>
    <a href="#"><button class="primary-cta">Add User</button></a>
    <a href="#"><button class="primary-cta">Edit User</button></a>
</div>


<?php $this->endSection(); ?>
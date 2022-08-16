<?php 

    $this->extend('templates/admin_template'); 
 
    $this->section('content'); 
 
?>

<form style="margin-top: 100px; text-align: center;" id = "registrationForm" method="post">
    <h1>Add a product</h1>
    <input class="input" type="text" name="fname" id="fname" placeholder="Product Name*">
    <input class="input" type="text" name="fname" id="fname" placeholder="Product Description">
    <input class="input" type="text" name="fname" id="fname" placeholder="Price">
    <input class="input" type="text" name="fname" id="fname" placeholder="Quantity">
    <input class="input" type="text" name="fname" id="fname" placeholder="Category">
    <button class="cta" type="submit" name="register">ADD PRODUCT</button>
</form>

<?php $this->endSection(); ?>
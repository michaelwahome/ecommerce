<?php 

    $this->extend('templates/admin_template'); 
 
    $this->section('content'); 
 
?>

<form style="margin-top: 100px; text-align: center;" id = "registrationForm" method="post">
    <h1>Add a category</h1>
    <input class="input" type="text" name="fname" id="fname" placeholder="Category Name*">
    <button class="cta" type="submit" name="register">ADD CATEGORY</button>
</form>

<?php $this->endSection(); ?>
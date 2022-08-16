<?php 

    $this->extend('templates/main_template'); 
 
    $this->section('content'); 
 
?>

<div class="logout">
    <h1>Are you sure you want to logout?</h1>
    <div class="dashboard">
        <a href="/users/processLogout"><button class="primary-cta">Yes</button></a>
        <a href="/users/home"><button class="primary-cta">Return to main menu</button></a>
    </div>
</div>

<?php $this->endSection(); ?>
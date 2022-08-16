<?php 

    $this->extend('templates/admin_template'); 
 
    $this->section('content'); 
 
?>

<div class="logout">
    <h1>Are you sure you want to logout?</h1>
    <div class="dashboard">
        <a href="/admin/processLogout"><button class="primary-cta">Yes</button></a>
        <a href="/admin/home"><button class="primary-cta">Return to main menu</button></a>
    </div>
</div>

<?php $this->endSection(); ?>
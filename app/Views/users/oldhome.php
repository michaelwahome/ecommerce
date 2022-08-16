<?php 

    $this->extend('/templates/main_template');

    $this->section('content');

    echo "<div class='welcome'><h1>Welcome ".session()->get('fname')."</h1></div>"; 
 
?>

<div class="top-half-homepage">
    <div class="category category-man">
        <div class="card homepage-card">
            <img src="../images/man.svg" alt="Man">    
            <h2>Men</h2>
        </div>
        <div class="card card-man">
            
            <h2>Formal</h2>
        </div>
        <div class="card card-man">
            
            <h2>Casual</h2>
        </div>
        <div class="card card-man">
            <h2>Sports</h2>
        </div>
    </div>
    <div class="category category-woman">
        <div class="card homepage-card">
            <img src="../images/woman.svg" alt="Man">
            <h2>Women</h2>
        </div>
        <div class="card card-woman">
            
            <h2>Formal</h2>
        </div>
        <div class="card card-woman">
            
            <h2>Casual</h2>
        </div>
        <div class="card card-woman">
            
            <h2>Sports</h2>
        </div>
    </div>
</div>
<div class="bottom-half-homepage">
    <div class="category category-child">
        <div class="card homepage-card">
            <img src="../images/children.svg" alt="Man">
            <h2>Children</h2>
        </div>
        <div class="card card-child">
            
            <h2>Formal</h2>
        </div>
        <div class="card card-child">
            
            <h2>Casual</h2>
        </div>
        <div class="card card-child">
            
            <h2>Sports</h2>
        </div>   
    </div>
    <div class="category category-pet">
        <div class="card homepage-card">
            <img src="../images/pet.svg" alt="Man">
            <h2>Pets</h2>
        </div>
        <div class="card card-pet">
            
            <h2>Dogs</h2>
        </div>
        <div class="card card-pet">
            
            <h2>Cats</h2>
        </div>
        <div class="card card-pet">
            
            <h2>Other</h2>
        </div>   
    </div>
</div>

<?php $this->endSection();?>
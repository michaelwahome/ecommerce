<?php 

    $this->extend('/templates/main_template');

    $this->section('content');

    echo "<div class='welcome'><h1>Welcome ".session()->get('fname')."</h1></div>"; 

    echo "<br><br><br>" ;

    print_r($subcategories);
 
?>

<?php foreach($subcategories as $subcategory){ ?>
    <a style="text-decoration: none;" href="#">   
        <div class="card">
            <h1><?php echo $subcategory[0]; ?></h1>
        </div>
    </a>
<?php } ?>

<?php $this->endSection();?>
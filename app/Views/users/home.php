<?php 
    //$session = session();

    $this->extend('/templates/main_template');

    $this->section('content');

    //echo "<div class='welcome'><h1>Welcome ".session()->get('fname')."</h1></div>";
 
?>

<?php $i = 0 ?>

<?php foreach($categories as $category){ ?>
    <a style="text-decoration: none;" href="/users/subcategories/<?php echo $i; ?>">   
        <div class="card">
            <h1><?php echo $category['category_name']; ?></h1>
        </div>
    </a>
    <?php $i++; ?>
<?php } ?>

<?php $this->endSection();?>
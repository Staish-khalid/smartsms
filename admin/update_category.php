<?php

    require 'config/dbc.php';
    
    $id = $_POST['id'];
    $create_date = $_POST['create_date'];
    $title = $_POST['title'];
    $slug = $_POST['slug'];
    $meta_description = $_POST['meta_description'];
    $meta_keyword = $_POST['meta_keyword'];
    

    mysqli_query($connection, "UPDATE category SET create_date='$create_date', title='$title', slug='$slug', meta_description='$meta_description', meta_keyword='$meta_keyword' WHERE id = $id") or die (mysqli_error($connection));

    header('Locaton:category.php');
?>
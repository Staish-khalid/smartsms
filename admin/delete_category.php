<?php 
require 'config/dbc.php';

$id = $_GET['id'];

mysqli_query($connection, "DELETE FROM category WHERE id=$id");
header("Location:category.php");
?>
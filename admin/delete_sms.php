<?php

    require 'config/dbc.php';

    $id = $_GET['id'];

    mysqli_query($connection, "DELETE FROM message WHERE id=$id");

    header("Location:sms.php");

?>

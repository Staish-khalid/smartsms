<?php

require 'config/dbc.php';

    $date = $_POST['create_date'];
    $category_id = $_POST['category_id'];
    $member_id = 1;
    $title = $_POST['title'];
    $slug = $_POST['slug'];
    $content = $_POST['content'];
    $status = 'DEACTIVATE';
    $meta_description = $_POST['x'];
    $meta_keyword = $_POST['meta_keyword'];

    mysqli_query($connection, "INSERT INTO message(create_date, category_id, member_id, title, slug, content, status, meta_description, meta_keyword)
    VALUES('$date', '$category_id', '$member_id', '$title', '$slug', '$content', '$status', '$meta_description', '$meta_keyword')")
    or die(mysqli_error($connection));

header("Location:sms.php");

?>
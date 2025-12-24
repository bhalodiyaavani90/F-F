<?php

    include("../include/config.php");

    $id = $_GET['id'];

    $q = "delete from category
        where cat_id = $id";

        mysqli_query($link,$q);

        header("location:category_view.php");
?>
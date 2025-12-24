<?php

    include("../include/config.php");

    $id = $_GET['id'];

    $q = "delete from gallery
        where g_id = $id";

        mysqli_query($link,$q);

        header("location:gallery_view.php");
?>
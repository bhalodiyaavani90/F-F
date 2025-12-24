<?php

    include("../include/config.php");

    $id = $_GET['id'];

    $q = "delete from slider
        where s_id = $id";

        mysqli_query($link,$q);

        header("location:slider_view.php");
?>
<?php

    include("../include/config.php");

    $id = $_GET['id'];

    $q = "delete from ourteams
        where ab_id = $id";

        mysqli_query($link,$q);

        header("location:ourteam_view.php");
?>
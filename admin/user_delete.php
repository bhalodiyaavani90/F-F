<?php

    include("../include/config.php");

    $id = $_GET['id'];

    $q = "delete from register
        where r_id = $id";

        mysqli_query($link,$q);

        header("location:user_view.php");
?>
<?php

    include("../include/config.php");

    $id = $_GET['id'];

    $q = "delete from contact_us
        where con_id = $id";

        mysqli_query($link,$q);

        header("location:contact_us.php");
?>
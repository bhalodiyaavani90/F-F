<?php
        session_start();
        include("include/config.php");

        if(! empty($_GET))
        {
            $id = $_GET['id'];

            $dq = "delete from orders
                where o_id = $id";

                mysqli_query($link,$dq);
                header("location:order_history.php");
        }
        else
        {
            header("location:order_history.php");
        }
?>
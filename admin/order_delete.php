<?php
        include("../include/config.php");
        session_start();

        if(! empty($_GET))
        {
            session_start();
            $id = $_GET['id'];

            $dq = "delete from orders where o_id = $id";
            mysqli_query($link,$dq);

            $_SESSION['del'] = "Order Successfully Deleted";
            header("location:view_order.php");
        }

        else{
            header("location:view_order.php");
        }
?>
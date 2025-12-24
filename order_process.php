<?php
        session_start();

        include("include/config.php");

        if(! empty($_POST))
        {
            extract($_POST);
            $t  = time();
            $pid = $_SESSION['cart'];

                foreach($pid as $id=>$val)
                {
                    $pid = $val['pid'];
                    $qty = $val['qty'];
                    $rate = $val['price'];
                    $nm = $val['nm'];

                    $q = "insert into orders
                        (o_nm,o_uid,o_clothes,o_qty,o_rate,o_pin,o_address,o_time)
                        values('$nm','$uid','$pid','$qty','$rate','$pin','$address','$t')";

                        mysqli_query($link,$q);
                }

                $_SESSION['done'] = "Your Order Has Been Successfully Submited";

                header("location:order_history.php");
        }

        else
        {
            header("location:order.php");
        }


?>
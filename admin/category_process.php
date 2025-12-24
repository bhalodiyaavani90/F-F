<?php
    session_start();
        if(! empty($_POST))
        {
                $error = array();
                extract($_POST);

                if(empty($cnm))
                {
                    $error[] = "Please enter category Name";
                }


                if(! empty($error))
                {
                    
                   $_SESSION['error'] = $error;
                   header("location:category.php");
                }
                else
                {
                        include("../include/config.php");

                        $q = "insert into category
                            (cat_nm,cat_time)
                            values('".addslashes($cnm)."','$t')";

                        mysqli_query($link,$q) or die(mysqli_error($link));

                        $_SESSION['done'] = "Done! Successfully Category Added.";
                        header("location:category.php");
                }
        }
        else
        {
                header("location:category.php");
        }
?>
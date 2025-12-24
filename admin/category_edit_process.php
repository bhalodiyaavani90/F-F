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
                   header("location:category_edit.php?id=$catid");
                }
                else
                {
                        include("../include/config.php");

                        $q = "update category
                           set cat_nm = '".addslashes($cnm)."'
                           where cat_id = $catid";

                        mysqli_query($link,$q) or die(mysqli_error($link));

                        $_SESSION['done'] = "Done! Successfully Category Updated.";
                        header("location:category.php");
                }
        }
        else
        {
                header("location:category.php");
        }
?>
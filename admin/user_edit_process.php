<?php
    session_start();
        if(! empty($_POST))
        {
                $error = array();
                extract($_POST);

                if(empty($fnm))
                {
                    $error[] = "Please enter Full Name";
                }

                if(empty($unm))
                {
                    $error[] = "Please enter User Name";
                }

                if(empty($email))
                {
                        $error[] = "Please enter Email Address";
                }

                if(empty($cno))
                {
                    $error[] = "Please enter Contact No";
                }
                else if(! is_numeric($cno))
                {
                    $error[] = "Please enter Valid Contact No";
                }

                if(! empty($error))
                {
                    
                   $_SESSION['error'] = $error;
                   header("location:user_edit.php?id=$rid");
                }
                else
                {
                        include("../include/config.php");

                        $q = "update register
                        set r_fnm = '$fnm',
                        r_unm = '$unm',
                        r_email = '$email',
                        r_mno = '$cno'
                        where r_id = $rid";

                        mysqli_query($link,$q) or die(mysqli_error($link));

                        $_SESSION['done'] = "Done! Successfully User Updated.";
                        header("location:user_view.php");
                }
        }
        else
        {
                header("location:user_view.php");
        }
?>
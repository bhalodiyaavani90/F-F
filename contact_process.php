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

            if(empty($mno))
            {
                $error[] = "Please enter Mobile No";
            }

            elseif(! is_numeric($mno))
            {
                 $error[] = "Please enter Valid Mobile no";
            }

            elseif(strlen($mno) !=10)
            {
                $error[] = "Please enter Valid No";
            }

            if(empty($email))
            {
                $error[] = "Please enter E-mail Address";
            }

            if(empty($sub))
            {
                $error[] = "Please enter Your Subject";
            }

            if(empty($msg))
            {
                $error[] = "Please enter Message";
            }


            if(! empty($error))
            {
                $_SESSION['error'] = $error;
                header("location:contact.php");
            }
            else 
            {
                include("include/config.php");

                $q = "insert into contact_us
                    (con_fnm,con_mno,con_email,con_subject,con_msg,con_time)
                    values('".addslashes($fnm)."','$mno','$email','".addslashes($sub)."','".addslashes($msg)."','$t')";

                mysqli_query($link,$q) or die(mysqli_error($link));

                $_SESSION['done'] = "Done! Successfully Contact Added.";
                header("location:contact.php");
            }
    }
    else
    {
        header("location:contact.php");
    }
?>
<?php   session_start();

        if(! empty($_POST))
        {
            $error = array();
            extract($_POST);

                if(empty($fnm))
                {
                    $error['fnm'] = "Please enter Full Name";
                }


                if(empty($unm))
                {
                    $error['unm'] = "Please enter User Name";
                }

                if(empty($email))
                {
                    $error['email'] = "Please enter Email Address";
                }

                if(empty($pwd) || empty($cpwd))
                {
                    $error['pwd'] = "Please enter Password";
                }
                else if($pwd != $cpwd)
                {
                    $error['pwd'] = "Don't Match Password";
                }
                else if(strlen($pwd) < 5)
                {
                    $error['pwd'] = "Please enter Minimum 5 Digit Password";
                }


                if(empty($cno))
                {
                    $error['cno'] = "Please enter Contact No";
                }
                else if(! is_numeric($cno))
                {
                    $error['cno'] = "Please enter Valid Contact No";
                }


                if(! empty($error))
                {
                   $_SESSION['error'] = $error;
                   $_SESSION['register'] = $_POST;

                   header("location:register.php");
                }
                else
                {
                       include("include/config.php");

                      $q = "insert into register
                       (r_fnm,r_unm,r_pwd,r_email,r_mno,r_time)
                       values('$fnm','$unm','$pwd','$email','$cno',$t)";

                      mysqli_query($link,$q);
                      
                      $_SESSION['done'] = "Done! Successfully Registration Completed.";
                      header("location:register.php");
                }

        }
        else
        {
            header("location:register.php");
        }


?>
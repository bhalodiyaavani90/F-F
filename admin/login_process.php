<?php session_start();
    
    if(! empty($_POST))
    {

        extract($_POST);
        if(empty($unm) || empty($pwd))
        {
            //echo "Please enter Username or Password";
             echo '<p style="color:red; font-weight:bold; 
             font-style:italic; font-size:22px; font-family:Georgia,
              serif;">Please enter Username or Password!!!!!</p>';
           
         

        }
        else
        {

            include("../include/config.php");

            $q = "select * from admin
                where a_unm = '$unm'
                and a_pwd = '$pwd'";

            $res = mysqli_query($link,$q) or die(mysqli_error($link));

            $row = mysqli_fetch_assoc($res);

            if(empty($row))
            {
               // echo "Wrong Username or Password";
              echo '<p style="color:red; font-weight:bold; 
             font-style:italic; font-size:22px; font-family:Georgia,
              serif;">Wrong Username Or Password!!!!!</p>';
            }
            else
            {
                $_SESSION['admin']['unm'] = $row['a_unm'];
                $_SESSION['admin']['id'] = $row['a_id'];
                $_SESSION['admin']['status'] = true;

                header("location:index.php");
            }
        }
    }
    else
    {
        header("location:login.php");
    }

?>
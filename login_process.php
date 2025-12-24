<?php
     session_start(); 

    if (!empty($_POST)) {

        extract($_POST);
      $_SESSION['error'] = array();	

        include('include/config.php');

        $q = "select * from register
        where r_unm = '$unm' and 
        r_pwd = '$pwd'";

        $res = mysqli_query($link,$q);

        $row = mysqli_fetch_assoc($res);

        if (empty($row)) {
           $_SESSION['error'][] = "wrong username or password";			

            header("location:login.php");
            }
        else{
            $_SESSION['client']['unm'] = $row['r_unm'];
            $_SESSION['client']['uid'] = $row['r_id'];
            $_SESSION['client']['status'] = $row['r_status'];

        header("location:index.php");
    }

}else{
    header("location:login.php");
}


?>
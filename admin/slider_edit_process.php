<?php
    session_start();
        if(! empty($_POST))
        {
                $error = array();
                extract($_POST);

                if(empty($stitle))
                {
                    $error[] = "Please enter Slider Title";
                }

                if(! empty($_FILES['simg']['name']))
                 {         
                        $ext = strtoupper(substr($_FILES['simg']['name'],-4));
                
                        if(!($ext==".JPG" || $ext=="JPEG" || $ext==".PNG" || $ext==".GIF"))
                        {
                         $error[] = "Wrong Image Type";
                        }
                }
            
                 /* elseif($_FILES['img']['size'] > (50 * 1024))
                 {
                        $error[] = "Please select Maximum 50KB";
                 } */

                if(! empty($error))
                 {
                         $_SESSION['error'] = $error;
                        header("location:slider_edit.php?id=$sid");
                 }
                else
                {
                        include("../include/config.php");

                        if(! empty($_FILES['simg']['name']))
                        {    
                                $img_nm = $t."_".$_FILES['simg']['name'];
                                move_uploaded_file($_FILES['simg']['tmp_name'],"../upload/slider/".$img_nm);

                                $q = "update slider
                                set s_title = '".addslashes($stitle)."',
                                 s_img = '$img_nm'
                                 where s_id = $sid";
                        }
                        else
                        {
                                 $q = "update slider
                                set s_title = '".addslashes($stitle)."'
                                where s_id = $sid";
                        }

                        mysqli_query($link,$q) or die(mysqli_error($link));

                        $_SESSION['done'] = "Done! Successfully Slider Update.";
                        header("location:slider.php");
                }
        }
        else
        {
                header("location:slider.php");
        }
?>
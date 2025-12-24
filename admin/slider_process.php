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

                $ext = strtoupper(substr($_FILES['simg']['name'],-4));

                 if(empty($_FILES['simg']['name']))
                 {
                        $error[] = "Please Select Image";
                 }
                elseif(!($ext==".JPG" || $ext=="JPEG" || $ext==".PNG" || $ext==".GIF"))
                {
                         $error[] = "Wrong Image Type";
                }

                 /* elseif($_FILES['img']['size'] > (50 * 1024))
                {
                         $error[] = "Please select Maximum 50KB";
                }*/

                if(! empty($error))
                 {
                         $_SESSION['error'] = $error;
                        header("location:slider.php");
                 }
                else
                {
                        include("../include/config.php");

                        $img_nm = $t."_".$_FILES['simg']['name'];

                        move_uploaded_file($_FILES['simg']['tmp_name'],"../upload/slider/".$img_nm);

                        $q = "insert into slider
                            (s_title,s_img,s_time)
                            values('".addslashes($stitle)."','$img_nm','$t')";

                        mysqli_query($link,$q) or die(mysqli_error($link));

                        $_SESSION['done'] = "Done! Successfully Slider Added.";
                        header("location:slider.php");
                }
        }
        else
        {
                header("location:slider.php");
        }
?>
<?php
    session_start();
        if(! empty($_POST))
        {
                $error = array();
                extract($_POST);

                if(empty($gtitle))
                {
                    $error[] = "Please enter Gallery Title";
                }

                $ext = strtoupper(substr($_FILES['gimg']['name'],-4));

                 if(empty($_FILES['gimg']['name']))
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
                        header("location:gallery.php");
                 }
                else
                {
                        include("../include/config.php");

                        $img_nm = $t."_".$_FILES['gimg']['name'];

                        move_uploaded_file($_FILES['gimg']['tmp_name'],"../upload/gallery/".$img_nm);

                        $q = "insert into gallery
                            (g_title,g_img,g_time)
                            values('".addslashes($gtitle)."','$img_nm','$t')";

                        mysqli_query($link,$q) or die(mysqli_error($link));

                        $_SESSION['done'] = "Done! Successfully Gallery Added.";
                        header("location:gallery.php");
                }
        }
        else
        {
                header("location:gallery.php");
        }
?>
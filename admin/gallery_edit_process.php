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

                if(! empty($_FILES['gimg']['name']))
                 {         
                        $ext = strtoupper(substr($_FILES['gimg']['name'],-4));
                
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
                        header("location:gallery_edit.php?id=$gid");
                 }
                else
                {
                        include("../include/config.php");

                        if(! empty($_FILES['gimg']['name']))
                        {    
                                $img_nm = $t."_".$_FILES['gimg']['name'];
                                move_uploaded_file($_FILES['gimg']['tmp_name'],"../upload/gallery/".$img_nm);

                                $q = "update gallery
                                set g_title = '".addslashes($gtitle)."',
                                 g_img = '$img_nm'
                                 where g_id = $gid";
                        }
                        else
                        {
                                 $q = "update gallery
                                set g_title = '".addslashes($gtitle)."'
                                where g_id = $gid";
                        }

                        mysqli_query($link,$q) or die(mysqli_error($link));

                        $_SESSION['done'] = "Done! Successfully Gallery Update.";
                        header("location:gallery.php");
                }
        }
        else
        {
                header("location:gallery.php");
        }
?>
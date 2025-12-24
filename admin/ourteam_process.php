<?php
    session_start();
        if(! empty($_POST))
        {
                $error = array();
                extract($_POST);

                if(empty($ofnm))
                {
                    $error[] = "Please enter Full Name";
                }

                if(empty($opost))
                {
                    $error[] = "Please enter Developer Post";
                }

                if(empty($oflink))
                {
                    $error[] = "Please enter Facebook Link";
                }

                if(empty($otlink))
                {
                    $error[] = "Please enter Twitter Link";
                }

                if(empty($oinlink))
                {
                    $error[] = "Please enter Linkedin Link";
                }

                $ext = strtoupper(substr($_FILES['oimg']['name'],-4));

                 if(empty($_FILES['oimg']['name']))
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
                        header("location:ourteam.php");
                 }
                else
                {
                        include("../include/config.php");

                        $img_nm = $t."_".$_FILES['oimg']['name'];

                        move_uploaded_file($_FILES['oimg']['tmp_name'],"../upload/ourteam/".$img_nm);

                        $q = "insert into ourteams
                            (ab_fnm,ab_post,ab_flink,ab_tlink,ab_inlink,ab_img,ab_time)
                            values('".addslashes($ofnm)."','".addslashes($opost)."','".addslashes($oflink)."','".addslashes($otlink)."',
                            '".addslashes($oinlink)."','$img_nm','$t')";

                        mysqli_query($link,$q) or die(mysqli_error($link));

                        $_SESSION['done'] = "Done! Successfully Our Team Added.";
                        header("location:ourteam.php");
                }
        }
        else
        {
                header("location:ourteam.php");
        }
?>
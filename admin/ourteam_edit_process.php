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

                if(! empty($_FILES['oimg']['name']))
                 {         
                        $ext = strtoupper(substr($_FILES['oimg']['name'],-4));
                
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
                        header("location:ourteam_edit.php?id=$abid");
                 }
                else
                {
                        include("../include/config.php");

                        if(! empty($_FILES['oimg']['name']))
                        {    
                                $img_nm = $t."_".$_FILES['oimg']['name'];
                                move_uploaded_file($_FILES['oimg']['tmp_name'],"../upload/ourteam/".$img_nm);

                                $q = "update ourteams
                                set ab_fnm = '".addslashes($ofnm)."',
                                ab_post = '".addslashes($opost)."',
                                ab_flink = '".addslashes($oflink)."',
                                ab_tlink = '".addslashes($otlink)."',
                                ab_inlink = '".addslashes($oinlink)."',
                                 ab_img = '$img_nm'
                                 where ab_id = $abid";
                        }
                        else
                        {
                                 $q = "update ourteams
                                 set ab_fnm = '".addslashes($ofnm)."',
                                 ab_post = '".addslashes($opost)."',
                                 ab_flink = '".addslashes($oflink)."',
                                 ab_tlink = '".addslashes($otlink)."',
                                 ab_inlink = '".addslashes($oinlink)."'
                                 where ab_id = $abid";
                        }

                        mysqli_query($link,$q) or die(mysqli_error($link));

                        $_SESSION['done'] = "Done! Successfully Our Team Update.";
                        header("location:ourteam.php");
                }
        }
        else
        {
                header("location:ourteam.php");
        }
?>
<?php session_start();

        if(! empty($_POST))
        {
            extract($_POST);
            $error = array();

            if(empty($pnm))
            {
                $error[] = "Please enter Product Name";
            }

          

            if(empty($desc))
            {
                $error[] = "Please enter Description";
            }

            if(empty($price))
            {
                $error[] = "Please enter Price";
            }
            elseif(! is_numeric($price))
            {
                $error[] = "Please enter Valid Price";
            }

            if(empty($discount))
            {
                $error[] = "Please enter Discount";
            }
            elseif(! is_numeric($discount))
            {
                $error[] = "Please enter Valid Discount";
            }


            $ext = strtoupper(substr($_FILES['img']['name'],-4));

            if(empty($_FILES['img']['name']))
            {
                $error[] = "Please Select Image";
            }
            elseif(!($ext==".JPG" || $ext=="JPEG" || $ext==".PNG" || $ext==".GIF" || $ext==".JFIF"))
            {
                $error[] = "Wrong Image Type";
            }
           /* elseif($_FILES['img']['size'] > (50 * 1024))
            {
                $error[] = "Please select Maximum 50KB";
            } */



            if(! empty($error))
            {
                $_SESSION['error'] = $error;
                header("location:product.php");
            }
            else {

                     include("../include/config.php");

                     $img_nm = $t."_".$_FILES['img']['name'];

                     move_uploaded_file($_FILES['img']['tmp_name'],"../upload/".$img_nm);

                    $q = "insert into product_add
                        (p_nm,p_cat,p_process,p_desc,p_price,p_discount,p_img,p_fdesc,p_addinfo,p_time)
                        values('".addslashes($pnm)."',$category,'".addslashes($processing)."','".addslashes($desc)."',
                        $price,$discount,'$img_nm','".addslashes($fdesc)."','".addslashes($addinfo)."','$t')";

                    mysqli_query($link,$q);

                    $_SESSION['done'] = "Done! Successfully Product Added.";
                    header("location:product.php");

            }
        }
        else
        {
            header("location:product.php");
        }
?>
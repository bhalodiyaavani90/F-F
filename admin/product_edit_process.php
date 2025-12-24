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



            if(! empty($_FILES['img']['name']))
            {         
                $ext = strtoupper(substr($_FILES['img']['name'],-4));
                
                if(!($ext==".JPG" || $ext=="JPEG" || $ext==".PNG" || $ext==".GIF"))
                 {
                     $error[] = "Wrong Image Type";
                 }
            }
            
           /* elseif($_FILES['img']['size'] > (50 * 1024))
            {
                $error[] = "Please select Maximum 50KB";
            } */


            if(empty($fdesc))
            {
                $error[] = "Please enter Full Description";
            }

            if(empty($addinfo))
            {
                $error[] = "Please enter Additional Information";
            }

            if(! empty($error))
            {
                $_SESSION['error'] = $error;
                header("location:product_edit.php?id=$pid");
            }
            else {

                     include("../include/config.php");

                 if(! empty($_FILES['img']['name']))
                 {    
                     $img_nm = $t."_".$_FILES['img']['name'];
                     move_uploaded_file($_FILES['img']['tmp_name'],"../upload/".$img_nm);

                     $q = "update product_add
                     set p_nm = '".addslashes($pnm)."',
                     p_cat = $category,
                     p_process = '".addslashes($processing)."',
                     p_desc = '".addslashes($desc)."',
                     p_price = $price,
                     p_discount = $discount,
                     p_img = '$img_nm',
                     p_fdesc = '".addslashes($fdesc)."',
                     p_addinfo = '".addslashes($addinfo)."'
                     where p_id = $pid";
                 }
                 else
                 {
                    $q = "update product_add
                        set p_nm = '".addslashes($pnm)."',
                        p_cat = $category,
                        p_process = '".addslashes($processing)."',
                        p_desc = '".addslashes($desc)."',
                        p_price = $price,
                        p_discount = $discount,
                        p_fdesc = '".addslashes($fdesc)."',
                        p_addinfo = '".addslashes($addinfo)."'
                        where p_id = $pid";
                 }

                    mysqli_query($link,$q);

                    $_SESSION['done'] = "Done! Successfully Product Updated.";
                    header("location:product.php");

            }
        }
        else
        {
            header("location:product.php");
        }
?>
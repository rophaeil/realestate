<?php

if(!empty($_FILES['new_img']['name'])){
    // <Delete Old image> from data/images/users/$old_name
    $path = "data\images\side_ads\\" . $_POST['old_img'] ;
    if(unlink($path)){
    
    }
    // </Delete Old image> 
    // <upload new image>
        $imgName = $_FILES['new_img']['name'];
        $imgType = $_FILES['new_img']['type'];
        $imgTmp = $_FILES['new_img']['tmp_name'];
        $imgSize = $_FILES['new_img']['size'];

        $extension = pathinfo($imgName , PATHINFO_EXTENSION);
        
        $newImgName = $_POST['old_img'];
        $uploadOk = 1;
            if($imgSize > 80000000){              // image size check
                $uploadOk = 2;
            
            }elseif($extension != 'png' && $extension != 'jpg' && $extension != 'jpeg'){       // image format check
                $uploadOk = 3;
            }
            if(move_uploaded_file($imgTmp , "C:\\xampp\htdocs\beetcom\data\images\side_ads\\" . $newImgName)  ){
                echo "Image Uploaded Successfuly";
            }
    // </ upload new image>
    header("refresh:0;../../myprop_side_ads.php");
}else{
    echo "Empty File...Make Sure that You Upload w new Photo";
    header("refresh:0;../../myprop_side_ads.php");
    
}
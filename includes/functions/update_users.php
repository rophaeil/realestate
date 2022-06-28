<?php
// include('includes/template/header.php');
session_start();
if(!empty($_POST['newFname'])){
    
$page_title = 'Edit Page';
include("functions.php");
include("model.class.php");

if(!empty($_POST['newSname'])){
    if(!empty($_FILES['new_img']['name'])){
    // <Delete Old image> from data/images/users/$old_name
    $path = "data\images\users\\" . $_POST['old_img'] ;
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
            if($imgSize > 800000){              // image size check
                $uploadOk = 2;
            
            }elseif($extension != 'png' && $extension != 'jpg' && $extension != 'jpeg'){       // image format check
                $uploadOk = 3;
            }
            if(move_uploaded_file($imgTmp , "C:\\xampp\htdocs\beetcom\data\images\users\\" . $newImgName)  ){
                echo "Image Uploaded Successfuly";
            }
    // </ upload new image>
}
        $newFname = $_POST["newFname"];
        $newSname = $_POST["newSname"];
        $newphone = $_POST["newphone"];
        $newAddress= $_POST["newaddress"];
        $newZip = $_POST["newzipCode"];
        $newdob = $_POST["newdob"];
        $id = $_SESSION['id'] ;
$stmt = $conn->prepare("UPDATE users SET Fname =?, Sname=?, phone=?, adress=?, zip=?, dob=?WHERE users.id=?");
$stmt->execute(array(
        $newFname,
        $newSname,
        $newphone,
        $newAddress,
        $newZip,
        $newdob,
        $id
));

    header("refresh:0;../../personal.php");
}

}else{


    header("refresh:0;../../personal.php");

}


<?php
// include('includes/template/header.php');
session_start();    
if(!empty($_POST["newFname"])){
$page_title = 'Edit Page';
include("functions.php");
include("model.class.php");
if(isset($_POST['newemail'])){
    if(!empty($_FILES['new_img']['name'])){
    // <Delete Old image> from data/images/users/$old_name
    $path = "..\..\..\data\images\users\\" . $_POST['old_img'] ;
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
    $updateStmt = $conn->prepare("UPDATE users SET Fname=? , Sname=? , email=? , phone=?, adress=?, zip=?, dob=?, ssn=?, accountType=?, activated=? WHERE users.id=?");
    $updateStmt->execute(array(
        $_POST["newFname"],
        $_POST["newSname"],
        $_POST["newemail"],
        $_POST["newphone"],
        $_POST["newaddress"],
        $_POST["newzipCode"],
        $_POST["newdob"],
        $_POST["newssn"],
        $_POST["accountType"],
        $_POST["activated"],
        $_POST["id"]        
    
    )
);
header("Cache-Control: no-cache, must-revalidate");
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header("Content-Type: application/xml; charset=utf-8");
    header("refresh:0;../../users.php");
}

}else{
    header("refresh:0;../../users.php");

}


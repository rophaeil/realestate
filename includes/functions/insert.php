<?php
session_start();
include("model.class.php");
$user = new users();
if(isset($_POST) && !empty($_POST)){

// ============================Fetch personal data from "reg.php"

    $fName  = $_POST['Fname']; 
    $sName=$_POST["Sname"];
    $adress =$_POST["adress"];
    $zip=  filter_var( $_POST["zip"] , FILTER_SANITIZE_NUMBER_INT);
    $dob=$_POST["dob"];
    $email=  filter_var( $_POST["email"] ,FILTER_SANITIZE_EMAIL);
    $phone=$_POST["phone"];
    $ssn= filter_var( $_POST["ssn"] , FILTER_SANITIZE_NUMBER_INT);
    $password = $_POST['password'];
    $Cpassword = $_POST['Cpassword'];
// ==================================Checking Insert Errors 
    if($user->checkemail($email) >0){// Check if email exist
        echo "<h1 style='color:red'>Sorry.....But This Email is already Exist.</h1>";
        header('refresh:3;url=../../reg.php');
    }else{
    if($password != $Cpassword){                //Check Password match Confirm Password===============
        echo "<h1 style='color:red'>Password Doesn't Match</h1>";
        header('refresh:3;url=../../reg.php');
    }else{
        //======================================Rename and inserting image && hashing Password && inserting all data=============== 

        // ==================== uploading img script ==========================
        $imgName = $_FILES['img']['name'];
        $imgType = $_FILES['img']['type'];
        $imgTmp = $_FILES['img']['tmp_name'];
        $imgSize = $_FILES['img']['size'];

        $extension = pathinfo($imgName , PATHINFO_EXTENSION);
        $randNum = rand(0 , 100000);
        $rename = $fName . "_Upload_" . date('ymd') . $randNum;
        $newImgName = $rename . '.' . $extension;
        $uploadOk = 1;
            if($imgSize > 800000){              // image size check
                $uploadOk = 2;
            
            }elseif($extension != 'png' && $extension != 'jpg' && $extension != 'jpeg'){       // image format check
                $uploadOk = 3;
            }
            echo $uploadOk;
        if($uploadOk == 1){
        if(move_uploaded_file($imgTmp , "C:\\xampp\htdocs\beetcom\data\images\users\\" . $newImgName)  ){
            echo "Image Uploaded Successfuly";
        }else{
            echo "Can's upload such image...Check the size of image and image Extension";
            header('refresh:;url=../../reg.php');
        }
        }
        // ==================== uploading img script ==========================






        $Fname = $_POST['Fname'];
        $Sname = $_POST['Sname'];
        $adress = $_POST['adress'];
        $zip = $_POST['zip'];
        $dob = $_POST['dob'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $ssn = $_POST['ssn'];

        $hashpassword = password_hash( $_POST['password'], PASSWORD_DEFAULT);




        // ___________________________________________________________SQL Inserting Query ___________________________
        $stmt = $conn->prepare("INSERT INTO users(Fname, Sname, adress, zip, dob, email, password, ssn, phone, user_img)
        VALUES(?,?,?,?,?,?,?,?,?,?)");
                $stmt->execute(array(
                    $Fname,
                    $Sname,
                    $adress,
                    $zip,
                    $dob,
                    $email,
                    $hashpassword,
                    $ssn,
                    $phone,
                    $newImgName
                ));


            header('refresh:2;url=../../index.php');

        // ___________________________________________________________SQL Inserting Query ___________________________
        }
    }
}else{// Empty Data

    echo "Data Not Completed";
    header('refresh:1;url=../../reg.php');
}
<?php
session_start();
include("model.class.php");
$ads = new side_ads();
if(isset($_POST) && !empty($_POST)){
$user_id = $_SESSION['id'];

$stmt = $conn->prepare("SELECT * FROM side_ads WHERE user_id = $user_id");
$stmt->execute();
$count = $count=$stmt->rowCount();


    if($count == 0){


    // ============================Fetch personal data from "reg.php"

    $coName  = $_POST['coName']; 
    $package=$_POST["pkg"];
    $url =$_POST["url"];
    if($package == 1){
        $duration = 1;
    }elseif($package == 2){
        $duration = 4;
    }elseif($package == 3){
        $duration = 12;
    }


        // ==================== uploading img script ==========================
        $imgName = $_FILES['bannerImg']['name'];
        $imgType = $_FILES['bannerImg']['type'];
        $imgTmp = $_FILES['bannerImg']['tmp_name'];
        $imgSize = $_FILES['bannerImg']['size'];
        $extension = pathinfo($imgName , PATHINFO_EXTENSION);
        $randNum = rand(0 , 100000);
        $rename = $coName . "_Upload_" . date('ymd') . $randNum;
        $newImgName = $rename . '.' . $extension;
        $uploadOk = 1;
            if($imgSize > 10000000){              // image size check
                $uploadOk = 2;
            }elseif($extension != 'png' && $extension != 'jpg' && $extension != 'jpeg'){       // image format check
                $uploadOk = 3;

            }
        if($uploadOk == 1){
        if(move_uploaded_file($imgTmp , "C:\\xampp\htdocs\beetcom\data\images\side_ads\\" . $newImgName)  ){
            echo "Image Uploaded Successfuly";
        }else{
            echo "Can's upload such image...Check the size of image and image Extension";
        }
        }
        echo "UploadOk img: " . $uploadOk;



        // ==================== uploading img script ==========================


        // ___________________________________________________________SQL Inserting Query ___________________________
        $stmt = $conn->prepare("INSERT INTO side_ads(user_id,coName, package, duration, url, ads_img)
        VALUES(?,?,?,?,?,?)");
                $stmt->execute(array(
                    $user_id,
                    $coName,
                    $package,
                    $duration,
                    $url,
                    $newImgName
                ));
            header('refresh:2;url=../../myprop_side_ads.php');

    }else{    // previously create ads 
        echo "<h1> Sorry but you are already request a Side Ads before. </h1>";
        header('refresh:2;url=../../index.php');
    }


        // ___________________________________________________________SQL Inserting Query ___________________________

}else{// Empty Data

    echo "Data Not Completed";
    header('refresh:1;url=../../index.php');
}
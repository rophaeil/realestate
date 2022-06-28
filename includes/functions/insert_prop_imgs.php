<?php
session_start();
include("model.class.php");
$prop = new properties();
$data = $prop->all();
// $newPropId = count($data)+1;


if(isset($_POST['submit']) && !empty($_FILES) ){



    for($i=0; $i<count($_FILES['images']['tmp_name']);$i++){
        $propId = $_POST['prop_id'];
        
        // Inserting image and renaming it
        $imgName = $_FILES['images']['name'][$i];
        $imgType = $_FILES['images']['type'][$i];
        $imgTmp = $_FILES['images']['tmp_name'][$i];
        $error = $_FILES['images']['error'][$i];
        $imgSize = $_FILES['images']['size'][$i];;

        $extension = pathinfo($imgName , PATHINFO_EXTENSION);
        $randNum = rand(0 , 100000);
        $rename = $_SESSION['Fname'] . "_Upload_" . date('ymd') . $randNum;
        $newImgName = $rename . '.' . $extension;
        $uploadOk = 1;
            if($imgSize > 800000){              // image size check
                $uploadOk = 2;
            
            }elseif($extension != 'png' && $extension != 'jpg' && $extension != 'jpeg'){       // image format check
                $uploadOk = 3;
    
            
            }

            if(move_uploaded_file($imgTmp , "C:\\xampp\htdocs\beetcom\data\images\properties\\" . $newImgName)  ){
                // echo "Image Uploaded Successfuly" . count($_FILES['images']['tmp_name']);
            }
        // Inserting Images name to databases to this specific property
        $stmt = $conn->prepare("INSERT INTO prop_imgs(property_image, property_id)
        VALUES(?,?)");
                $stmt->execute(array(
                    $newImgName,
                    $propId
                ));
    }

}

header("refresh:0;../../my_prop.php")








?>
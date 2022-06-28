<?php
session_start();
include("model.class.php");
if(isset($_SESSION['id'])){
    if(isset($_POST['submit'])){
        $user = new users();
        $user_data = $user->findbyid($_SESSION['id']);
        $prop = new properties();
        $prop_data = $prop->findAllby("owner_id", $_SESSION['id']);
        $prop_owned = count($prop_data);
// =============================== Define Limits =====
        if($user_data['accountType'] == 0){
            $limit = 2;
        }elseif($user_data['accountType'] == 1){
            $limit = 5;
        }elseif($user_data['accountType'] == 2){
            $limit = 12;
        }elseif($user_data['accountType'] == 3){
            $limit = 28;
        }


        $id = $_SESSION['id'];
        $propType = $_POST['prop_type'];
        $title = $_POST['title'];
        $deliveryType = $_POST['delivery_type'];
        $propType = $_POST['prop_type'];
        $location = $_POST['address'];
        $bedroom = $_POST['bedroom'];
        $bathroom = $_POST['bathroom'];
        $livingroom = $_POST['livingroom'];
        $kitchen = $_POST['kitchen'];
        $area = $_POST['area'];
        $price = $_POST['price'];
        $description = $_POST['description'];
        

    if($prop_owned < $limit){// Insert property
        $stmt = $conn->prepare("INSERT INTO properties(owner_id, title, prop_type, bedrooms, bathrooms, kitchen, livingrooms, area, price, location, description, delivery_type)VALUES('$id','$title','$propType','$bedroom','$bathroom','$kitchen','$livingroom','$area','$price','$location','$description','$deliveryType')");
        $stmt->execute();
        header("refresh:0;../../my_prop.php");

    }else{// Say sorry 
    }
echo "<h2>Sorry but you exceed the Limit of adding properties.</h2>";
echo "<h3>You can <a href='../../my_prop.php'>Delete</a> some of your Properties </h3>";
echo "<h1>OR</h1>";
echo "<h3>You Can <a href='../../ads.php'>Upgrade Your Account</a> and Choose one of our Packages According to your needs....</h3>";

    
    // header("refresh:;../../my_prop.php");











    }else{
        header("refresh:0;../../index.php");
    }
}else{
    header("refresh:0;../../index.php");
}
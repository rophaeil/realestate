<?php
include("model.class.php");
$interest = new interests();
$prop = new properties();

session_start();
$prop_id = $_POST['prop_id'];
$user_id = $_SESSION['id'];
// echo "<h2>" . $prop_id . "<br>" .  $user_id . "</h2>";
// echo $interest->checkFav($prop_id , $user_id);
$properties = $prop->all();


if($interest->checkFav($prop_id , $user_id) != 0){ //was interested in and remove this interest
    $interest->deleteFav($prop_id , $user_id);    //Delete row from interests
    }else{
    //Not Previously interested
    $interest->enterFav($prop_id , $user_id);    //Add row from interests
    
}
// 1] loop properties
// 2] select * from interests where prop_id == i
// 3] count(results)
// 4] update properties set interests = count(results) where property.id = i
foreach($properties as $property){
    $id = $property['id'];
    $stmt = $conn->prepare("SELECT * FROM interests WHERE property_id='$id'");
    $stmt->execute();
    // echo "=> " . $stmt->rowCount() . "<br>";
}

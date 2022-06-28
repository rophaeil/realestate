<?php
include("model.class.php");
global $conn;
$id = $_GET['id'];
$prop = new properties;
$data = $prop->findbyid($id);

// <Delete Old image> from data/images/users/$old_name
    if(isset($data['user_img']) && !empty($data['user_img'])){
    $path = "..\..\..\data\images\users\\" . $data['user_img'];
    if(unlink($path)){
    }
    }
$stmt = $conn->prepare("DELETE FROM properties WHERE id = $id");
$stmt->execute();
header('refresh:0;url=../../properties.php');
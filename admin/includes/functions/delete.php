<?php
include("model.class.php");
global $conn;
$id = $_GET['id'];
$user = new users;
$data = $user->findbyid($id);

// <Delete Old image> from data/images/users/$old_name
    if(!empty($data['user_img'])){
        $path = "..\..\..\data\images\users\\" . $data['user_img'];
        if(unlink($path)){
        
        }
    }
$stmt = $conn->prepare("DELETE FROM users WHERE id = $id");
$stmt->execute();
header('refresh:0;url=../../users.php');
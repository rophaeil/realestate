<?php
// include('includes/template/header.php');
session_start();    
if(isset($_POST["id"])){
$page_title = 'Edit Page';  
include("functions.php");
include("model.class.php");

    if(!empty($_POST['id'])){
            $updateStmt = $conn->prepare("UPDATE users SET userRole=? , accountType=? , activated=? WHERE users.id=?");
        $updateStmt->execute(array(
            $_POST["role"],
            $_POST["accountType"],
            $_POST["activated"],
            $_POST["id"]        
        
        )    
    );
    echo $_POST["role"] . "<br>" . $_POST["accountType"] . "<br>" . $_POST["activated"] . "<br>" . $_POST["id"] ;

        header("refresh:0;../../auth.php");
    }

}else{
    header("refresh:0;../../auth.php");
    
}


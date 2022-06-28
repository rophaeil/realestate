<?php
session_start();
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
    if($password != $Cpassword){
        echo "<h1 style='color:red'>Password Doesn't Match</h1>";
        header('refresh:1;url=reg.php');
    
    }else{
//======================================hashing Password && inserting data=============== 
    include("model.class.php");

    $Fname = $_POST['Fname'];
    $Sname = $_POST['Sname'];
    $adress = $_POST['adress'];
    $zip = $_POST['zip'];
    $dob = $_POST['dob'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $ssn = $_POST['ssn'];

    $hashpassword = password_hash( $_POST['password'], PASSWORD_DEFAULT);

    $stmt = $conn->prepare("INSERT INTO users(Fname, Sname, adress, zip, dob, email, password, ssn, phone)
    VALUES(?,?,?,?,?,?,?,?,?)");
            $stmt->execute(array(
                $Fname,
                $Sname,
                $adress,
                $zip,
                $dob,
                $email,
                $hashpassword,
                $ssn,
                $phone
            ));
    

        header('refresh:2;url=../../index.php');
    }
}else{// Empty Data


    header('refresh:1;url=../../layout/reg.php');
}
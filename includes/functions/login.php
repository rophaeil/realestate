<?php
Session_START();
$email =$_POST['email'];
$pass = $_POST['pass'];
include("model.class.php");
$users = new users();


$ifExist = $users->checkemail($email);

    if($ifExist > 0){                                     // Email is Exist
        
        $data = $users->findbyemail($email);
        $DBemail = $data['email'];
        $hashedPass = $data['password'];
        $Fname = $data['Fname'];
        $Sname = $data['Sname'];
        $userRole = $data['userRole'];
        $user_img = $data['user_img'];
        $id = $data['id'];


//Check password is MATCHED
            
            if( password_verify( $pass , $hashedPass)){
                echo "Loged In";

                $_SESSION['id'] = $id;
                $_SESSION['email'] = $email;
                $_SESSION['Fname'] = $Fname;
                $_SESSION['Sname'] = $Sname;
                $_SESSION['userRole'] = $userRole;
                $_SESSION['user_img'] = $user_img ; 
                
                header('refresh:0;url=../../index.php');
            }else{
        echo $pass . "<br>" . $hashedPass . "<br>";
            
        
        
        
        
        echo "<br>Wrong Password";
            header('refresh:1;url=../../index.php');
        }
    
    }else{
        echo $email . "<br>We are sorry..... but This Email Doesn't EXIST :(";
        header('refresh:2;url=../../index.php');
    }




?>
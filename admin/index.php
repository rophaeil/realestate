<?php
$page_title = 'Beetcom Admin';
include('includes/template/header.php');
include('includes/functions/model.class.php');
$user = new users();
$auth = false;
if(!empty($_SESSION) && $_SESSION['userRole'] == 1){     //=====================  previoulsy loged in
header('refresh:0;url=dashboard.php');

}elseif(!empty($_POST)){  // if trying to login and session is empty
$email = $_POST['email'];                  // Check email & password while logging in
$pass = $_POST['pass'];
$ifExist = $user->checkemail($email);
    if($ifExist){   // email exist
        $data = $user->findbyemail($email);

            if( password_verify($pass , $data['password']) && $data['userRole'] == 1){ //CHECK password and User Role
                $_SESSION['id'] = $data['id'];
                $_SESSION['Fname'] = $data['Fname'] ;
                $_SESSION['Sname']  = $data['Sname'] ;
                $_SESSION['adress']  = $data['adress'];
                $_SESSION['zip'] = $data['zip'];
                $_SESSION['dob'] = $data['dob'];
                $_SESSION['email'] = $data['email'];
                $_SESSION['ssn'] = $data['ssn'];
                $_SESSION['userRole'] = $data['userRole'];
                $_SESSION['phone'] = $data['phone'];
                $_SESSION['user_img'] = $data['user_img'];


                header('refresh:0;url=dashboard.php');
            }else{ // ==============================================  Wrong  Password
                
                echo "<div class='alert alert-danger' role='alert'>
                Not Authorized.
                </div>";
                header('refresh:2;url=');
            }
    }else{   // Email Does not exist
    $auth = false;
    echo "<div class='alert alert-danger' role='alert'>
    Sorry....But You are not AUTHORIZED to exist here
    </div>";
    header('refresh:2;url=');
    }
}else{                  // If session &Post are empty 



//  ========================== LOGIN FORM start ========================================= 
include('includes/template/animation.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- --------------css files ------------>
    <link rel="stylesheet" href="layout/css/normalize.css">
    <link rel="stylesheet" href="layout/css/style.css">
    <link rel="icon" type="image/x-icon" href="layout/img/logo.jpg" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="includes/libraries/fontawesome/all.min.css">
    <link rel="stylesheet" href="includes/libraries/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="includes/libraries/fontawesome-free-6.0.0-web/css/all.min.css">    
    <title>Beetcom Admin</title>
    <style>
        body{
            background-color: #161616;
        }
    </style>
</head>
<body>

<form class="login" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <h4 class="text-center" style="color:#FFF">Admin Login</h4>
    <input class="form-control" type="email" name="email" placeholder="Email" autocomplete="off">
    <input class="form-control" type="password" name="pass" placeholder="Password" autocomplete="new-password">

    <input class="btn btn-primary " style="width: 100%;" type="submit" value="Login">

</form>

<!-- ========================== LOGIN FORM end========================================= -->
<!-- =========================================================================  ADMIN DASHBOARD PAGE start =========================== -->
<?php 
}
include('includes/template/footer.php');
?>
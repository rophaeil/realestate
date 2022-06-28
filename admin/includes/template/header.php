
<?php 

if( !isset($_SESSION) && empty($_SESSION)){
session_start(); 
}
include_once('includes/functions/functions.php')

?>

<!DOCTYPE html>
<html lang="en"
    >

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- --------------css files ------------>
    <link rel="icon" type="image/x-icon" href="layout/img/logo.jpg" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="includes/libraries/fontawesome/all.min.css">
    <link rel="stylesheet" href="includes/libraries/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="includes/libraries/fontawesome-free-6.0.0-web/css/all.min.css">




    <title><?php getTitle(); ?></title>

</head>
<body>

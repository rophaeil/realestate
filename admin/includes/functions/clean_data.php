<?php


include('model.class.php'); 
$prop = new properties(); 
$data = $prop->all();

//  echo "<pre>";
//  print_r($data);
//  echo "</pre>";

// echo $key;
// echo $value['id'];
// echo $value['price'];

// ================================================================ CLEAN PRICE

// foreach($data as $key => $value){

  // $value['price'] = trim($value['price']); // trim outer spaces
// $price1 = trim($value['price'] , 'EGP');   // trim 'EGP'
// $price2 = str_replace(',', '', $price1);      // trim inner spaces

// $x = $price2;
// $y = $value['id'];
// // echo $price2;

// $sql = "UPDATE properties SET price ='$price2' WHERE id = $y";

// echo $y . " ==========>> " . $price2;

// // Prepare statement
// $stmt = $conn->prepare($sql);
//   // execute the query
// $stmt->execute();
// }



// ================================================================ Clean Area 
/*
foreach($data as $key => $value){
  $value['area'] = trim($value['area']);
  $value['area'] = trim($value['area'] , 'sqm');
  
  $x = $value['area'];
  $y = $value['id'];
  $sql = "UPDATE properties SET area ='$x' WHERE id = $y";
  
    // Prepare statement
  $stmt = $conn->prepare($sql);
  
    // execute the query
  $stmt->execute();
  }
  */
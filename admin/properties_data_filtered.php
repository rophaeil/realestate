<?php
include("includes/functions/model.class.php");
$prop = new properties;
$text = $_POST['dataSearch']['srch'];
$prop_type = $_POST['dataSearch']['prop_type'];
$delivery_type = $_POST['dataSearch']['delivery_type'];
$price =$_POST['dataSearch']['price'];
$approve =$_POST['dataSearch']['approve'];


if($price)

if(empty($price) && empty($delivery_type && empty($prop_type) )){
    // only search for text
}
// ================================================================== price =================================
if($price == 0){
    $priceQuery = "properties.price < 5000000";
}elseif($price == 1){
    $priceQuery = "properties.price BETWEEN 0 AND 250000";
}elseif($price == 2){
    $priceQuery = "properties.price BETWEEN 250000 AND 500000";
}elseif($price == 3){
    $priceQuery = "properties.price BETWEEN 500000 AND 1000000";
}elseif($price == 4){
    $priceQuery = "properties.price BETWEEN 1000000 AND 2000000";
}elseif($price == 5){
    $priceQuery = "properties.price BETWEEN 2000000 AND 4000000";
}elseif($price == 6){
    $priceQuery = "properties.price > 4000000";
}
// ================================================================== property Type =================================
if($prop_type == "0"){
    $prop_typeQuery = "properties.prop_type IN ('Villa', 'Penthouse','Apartment','Townhouse','Chalet','iVilla','Duplex','Twin House','Hotel Apartment')";
}else{
    $prop_typeQuery = "properties.prop_type = '" . $prop_type . "'"; 
}
// ================================================================== approve =================================

    $approveQuery = "properties.approved = '" . $approve . "'"; 

// ================================================================== Delivery Type =================================
$delivery_typeQuery = "properties.delivery_type = '" . $delivery_type . "'";
// ================================================================== text search =================================
if(!empty($text)){
    //function with search
    $textQuery = "properties.title LIKE '%" . $text . "%' OR properties.location LIKE '%" . $text . "%'" ;
}else{
    // function without search
    $textQuery = "properties.title LIKE '%'" ;
}

// echo $prop_typeQuery . "<br>";
// echo $delivery_typeQuery . "<br>";
// echo $priceQuery . "<br>";
// echo $textQuery . "<br>";

    // function without price 
    // search like "%___%"
    // property_type == Property
    // delivery type == Buy
    // echo $prop_type . "<br>";
    // echo $textQuery . "<br>" . $prop_typeQuery . "<br>" .$delivery_typeQuery . "<br>" . $priceQuery;
$data = $prop->find_prop($textQuery, $prop_typeQuery,$delivery_typeQuery, $priceQuery , $approveQuery);


?>

<table class="table ">
<thead class=" table-dark">
    <tr>
        <th scope="col">Property ID</th>
        <th scope="col">Prop. Type</th>
        <th scope="col">Area</th>
        <th scope="col">Price</th>
        <th scope="col">Location</th>
        <th scope="col">Class</th>
        <th scope="col">Approved</th>
        <th scope="col">Delivery Type</th>
        <th scope="col"></th>
    </tr>
</thead>
<tbody>
    <?php
            for($i =0; $i<count($data);$i++){
            ?>
            <tr>
                <th scope="row"><?php echo$data[$i]['id']?></th>
                <td><?php echo$data[$i]['prop_type']?></td>
                <td><?php echo$data[$i]['area']?></td>
                <td><?php echo number_format( $data[$i]['price'] );?></td>
                <td><?php echo$data[$i]['location']?></td>
                <td><?php echo$data[$i]['class']?></td>
                <td><?php if($data[$i]['approved'] == 0){  echo"Susbended";}elseif($data[$i]['approved'] == 1){ echo"Approved";}elseif($data[$i]['approved'] == 2){ echo"Denied";}?></td>
                <td><?php echo$data[$i]['delivery_type']?></td>
                <td>
                <a href="edit_prop.php?id=<?php echo$data[$i]['id'] ;?>"><button type="button" class="btn btn-primary">Edit</button></a>
                <br>
                <br>
                <a href="includes/functions/delete_prop.php?id=<?php echo$data[$i]['id'] ;?>"><button type="button" class="btn btn-danger">Delete</button></a>
                </td>
            </tr>
            <?php
            }?>
</tbody>
</table>


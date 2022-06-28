<?php
include('model.class.php');
$location = $_GET['location'];
$prop_type = $_GET['prop-type'];
$delivery = $_GET['delivery-type'];
$prop = new properties();
$data = $prop->find_prop($location,$prop_type,$delivery);
if($data == false){
    echo"<h2>There is no such search</h2>";
}else{
?>
<!---------------------------------filter  -->
        <div class="site-section site-section-sm bg-light">
        <div class="container">
        
            <div class="row">
            <div class="col-lg-10">
                <div class="row">

<?php
if(count($data) > 20){
    $max = 20;
}else{
    $max = count($data);
}
for($i= 0;$i< $max;$i++){
?>
            <div class="col-md-6 col-lg-6 mb-4">
                <div class="property-entry h-100">
                <a href="property-details.html" class="property-thumbnail">
                    <div class="offer-type-wrap">
                    <!-- Delivery Type -->
                    <span class="offer-type bg-danger"><?php echo"Sale" ?></span>
                    </div>
                    <!-- img -->
                    <img src="img/slid2.jpg" alt="Image" class="img-fluid">
                </a>
                <div class="p-4 property-body">
                    <!-- Favourite  Icon-->
                    <a href="#" class="property-favorite"><i class="fa-regular fa-heart"></i></span></a>
                    <!-- Property Type(Villa / Apartment ) -->
                    <h2 class="property-title"><a class="address" href="property-details.html"><?php echo $data[$i]['prop_type']; ?></a></h2>
                    <!-- Properties Title -->
                    <span class="property-location d-block mb-3"><span class="property-icon icon-room"></span> <?php echo $data[$i]['title']; ?></span>
                    <!-- Price -->
                    <strong class="property-price text-primary mb-3 d-block text-success"><?php echo $data[$i]['price']; ?></strong>
                    <ul class="property-specs-wrap mb-3 mb-lg-0">
                    <li>
                        <!-- Bed rooms -->
                        <span class="property-specs">Bed rooms</span>
                        <span class="property-specs-number"><?php echo $data[$i]['bedrooms']; ?></span>
                    </li>
                    <li>
                        <!-- bath rooms -->
                        <span class="property-specs">bath rooms</span>
                        <span class="property-specs-number"><?php echo $data[$i]['bathrooms']; ?></span>
                    </li>

                    <li>
                        <!-- living rooms -->
                        <span class="property-specs">living rooms</span>
                        <span class="property-specs-number"> <?php echo $data[$i]['livingrooms']; ?></span>
                    </li>

                    <!--Property Area   -->
                    <li>
                        <span class="property-specs">SQ meter</span>
                        <span class="property-specs-number"><?php echo $data[$i]['area']; ?></span>
                        
                    </li>
                    </ul>
                </div>
                </div>
            </div>
<?php } 
}
?> 
        </div>
            </div>
            </div>
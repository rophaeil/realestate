<?php
if(isset($_GET['location']) && isset($_GET['prop-type'])){
$page_title = 'Properties';
include('includes/template/header.php');
include('includes/template/nav.php');
include('includes/functions/model.class.php');

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






<!--------------------------   FILTER-->
<section class="section section__height container" id="services">
        <div class="site-section site-section-sm pb-0">
            <div class="container">
                <div class="row">
                <!-------------------------------------------------------------------------Form Start  -->

                    <div class="row  align-items-end">

                    <!------ Location -->
                    <div class="col-md-3">  
                        <label for="select-city">Select Location</label>
                        <div class="select-wrap">
                        <span class="icon icon-arrow_drop_down"></span>
                        <input type="text" name="location" id="select-city" class="form-control d-block rounded-0" style="font-size: large;" placeholder="What Area You are looking for?">

                        </div>
                    </div> 
                    <!-- Property Type -->
                    <div class="col-md-3">
                        <label for="list-types">Property Types</label>
                        <div class="select-wrap">
                        <span class="icon icon-arrow_drop_down"></span>
                        
                        <select name="prop-type" id="list-types" class="form-control d-block rounded-0" style="font-size: large;">
                            <option value="Apartment">Apartment</option>
                            <option value="Villa">Villa</option>
                            <option value="Duplex">Duplex</option>
                            <option value="Penthouse">Penthouse</option>
                            <option value="Townhouse">Townhouse</option>
                            <option value="Chalet">Chalet</option>
                            <option value="iVilla">iVilla</option>
                            <option value="Twin House">Twin House</option>
                            <option value="Hotel Apartment">Hotel Apartment</option>
                        </select>
                        
                        </div>
                    </div>
                    <!-- Sale / Rent -->
                    <div class="col-md-3"> 1
                        <label for="offer-types">Offer Type</label>
                        <div class="select-wrap">
                        <span class="icon icon-arrow_drop_down"></span>
                        <select name="delivery-type" id="offer-types" class="form-control d-block rounded-0" style="font-size: large;">
                            <option value="Sale">For Sale</option>
                            <option value="Rent">For Rent</option>
                        </select>
                        </div>
                    </div> 
                    <button id="find">FIND</button>
                    </div>
                    <!-------------------------------------------------------------------------Form End  -->

            </div>
    </section>

<!---------------------------------filter  -->

    <section class="gallery">
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
                    <img src="layout/img/slid2.jpg" alt="Image" class="img-fluid">
                </a>
                <div class="p-4 property-body">
                    <!-- Favourite  Icon-->
                    <a href="#" class="property-favorite"><i class="fa-regular fa-heart"></i></span></a>
                    <!-- Property Type(Villa / Apartment ) -->
                    <h2 class="property-title"><a class="address" href="property-details.html"><?php echo $data[$i]['prop_type']; ?></a></h2>
                    <!-- Properties Title -->
                    <span class="property-location d-block mb-3"><span class="property-icon icon-room"></span> <?php echo $data[$i]['title']; ?></span>
                    <!-- Price -->
                    <strong class="property-price text-primary mb-3 d-block text-success"><?php echo number_format( $data[$i]['price'] ); ?></strong>
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
<script src="js/jquery.js"></script>
<script>
    $(document).ready(function(){
        
        $('#find').on('click',function () {
            
            // alert(propTypeValue);

            $.ajax({
                url:'data.php',
                type:'get',
                data: 'location='+ $('#select-city').val() +'&prop-type=' +  $('#list-types').val() +'&delivery-type=' + $('#delivery-type').val(),
                success:function(data){
                    $('.gallery').html(data);
                },
                cache:false
            })
        })
        
    
    
    
    
    
    
    
    })
</script>
<?php

include('includes/template/footer.php');
}else{
    header('location:index.php');
}
?>
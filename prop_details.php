<?php 
include('includes/functions/model.class.php');
if(!empty($_GET['id'])){
$prop_id = $_GET['id'];


$prop = new properties();
$prop_data = $prop->findby('id' ,$prop_id);

$images = new prop_imgs();
$img = $images->findAllby("property_id", $prop_id);




$page_title = 'BeetCom';
include("includes/template/header.php");
include("includes/template/nav.php");



// echo"<pre>";
// print_r($_SESSION);
// echo"</pre>";


?>    <div class="site-section site-section-sm">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner" style="height: 450px;">
                  
                  <div class="carousel-item active">
                    <img src="data/images/properties/<?php echo $img[0]['property_image'] ?>" class="d-block w-100 img-fluid" style="height: 100%;position: relative;top:0" alt="...">
                    </div>
                    <?php for($i=1;$i<count($img);$i++){ ?>
                  
                  <div class="carousel-item">
                    <img src="data/images/properties/<?php echo $img[$i]['property_image'] ?>" class="d-block w-100 img-fluid" style="height:auto;position: relative;top:0" ;alt="...">
                  
                  </div>
                  <?php }?>




                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
              </div>
              <div class="bg-white property-body border-bottom border-left border-right">
                <div class="row mb-5">
                  <div class="col-md-6">
                    <strong class="text-success h1 mb-3 price-p"><?php echo number_format($prop_data['price'] ) . " EGP";?></strong>
                  </div>
                  <div class="col-md-6 d-flex justify-content-evenly">
                    <ul class="property-specs-wrap mb-3 mb-lg-0 ">
                    <li>
                      <span class="property-specs">Beds</span>
                      <span class="property-specs-number d-flex justify-content-center"><?php echo $prop_data['bedrooms'] ?></span>
                      
                    </li>
                    <li>
                      <span class="property-specs">Baths</span>
                      <span class="property-specs-number d-flex justify-content-center"><?php echo $prop_data['bathrooms'] ?></span>
                      
                    </li>
                    <li>
                      <span class="property-specs">Space</span>
                      <span class="property-specs-number d-flex justify-content-center"><?php echo $prop_data['area'] ?></span>
                      
                    </li>
                  </ul>
                  </div>
                </div>
                <div class="row mb-5">
                  <div class="col-md-6 col-lg-4 text-center border-bottom border-top py-3">
                    <span class="d-inline-block text-black mb-0 caption-text">Home Type</span>
                    <strong class="d-block"><?php echo $prop_data['prop_type'] ?></strong>
                  </div>
                  <div class="col-md-6 col-lg-4 text-center border-bottom border-top py-3">
                    <span class="d-inline-block text-black mb-0 caption-text">From</span>
                    <strong class="d-block"><?php echo $prop_data['dateOfAddition'] ?></strong>
                  </div>
                  <div class="col-md-6 col-lg-4 text-center border-bottom border-top py-3">
                    <span class="d-inline-block text-black mb-0 caption-text">Price/m</span>
                    <strong class="d-block"><?php echo number_format($prop_data['price'] /$prop_data['area']);  ?></strong>
                  </div>
                </div>
                <h2 class="h4 text-black text-center">More Info</h2>
                <h4> <?php echo $prop_data['title'] ?>  </h4>
                <p><?php echo $prop_data['description'] ?> </p>
                <p>Location : <?php echo $prop_data['location'] ?> </p>

                <div class="row no-gutters mt-5">
                  <div class="col-12">
                    <h2 class="h4 text-black mb-3 d-flex justify-content-center">Gallery</h2>
                  </div>
                  <?php
                  for($i=0;$i<count($img);$i++){
                  ?>
                  <div class="col-sm-6 col-md-4 col-lg-3">
                  <img src="data/images/properties/<?php echo $img[$i]['property_image'] ?>" alt="Image" class="img-fluid">
                  </div>
                  <?php
                  }
                  ?>
                  </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <div class="row d-flex justify-content-center">
            <div class="col-lg-6 mt-5">
              <div class="bg-white widget border rounded">
  
                <h3 class="h4 text-black widget-title mb-3 text-center">Contact Agent</h3>
                <form action="" class="form-contact-agent">
                <div class="form-group mt-3">
                    <input type="text" id="name" class="form-control" placeholder="Name">
                  </div>
                  <div class="form-group mt-3">
                    <input type="email" id="email" class="form-control" placeholder="Email">
                  </div>
                  <div class="form-group mt-3">
                    <input type="text" id="phone" class="form-control" placeholder="Phone Number">
                  </div>
                  <div class="form-group mt-3 d-flex justify-content-center">
                    <input type="submit" id="phone" class="btn btn-primary" value="Send Message">
                  </div>
                </form>
              </div>
            </div>
          </div>
          </div>
        </div>
          </div>
        </div>
      </div>





      <?php 
include("includes/template/footer.php"); 
}else{
  header("refresh:0;index.php");
}
?>
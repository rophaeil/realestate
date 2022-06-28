<?php 
include('includes/functions/model.class.php');
$prop = new properties();
$data = $prop->all();

$interst = new interests();
if( isset( $_POST['liked'] ) ){
  $prop_id = $_POST['prop_id'];
  $interst->enterFav($prop_id , $_SESSION['id']);
}
include("includes/template/header.php");
$page_title = 'BeetCom';
include("includes/template/nav.php");
?>
	<!-- Slider main container -->
  <div class="hero-wrap" style="background-image: url(../beetcom/layout/img/2272186909_de0f7e5da1_o.jpg);" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="overlay-2"></div>
      <div class="container">
        <div class="row no-gutters slider-text justify-content-center align-items-center">
          <div class="col-lg-8 col-md-6 ftco-animate d-flex align-items-end">
          	<div class="text text-center w-100">
	            <h1 class="mb-4">Excellent Space <br>For Your Next Home <br>All The More In</h1>
	            <!-- <p><a href="#" class="btn btn-primary py-3 px-4 search-btn">Search Properties</a></p> -->
              <h1 class="mb-4" id="text-box">Beetcom</h1>
            </div>
            
          </div>
        </div>
      </div>
      <div class="mouse">
				<a href="#" class="mouse-icon">
					<div class="mouse-wheel"><span class="ion-ios-arrow-round-down"></span></div>
				</a>
			</div>
    </div>
	

<!--------------------------   FILTER-->
<?php
include("includes/template/filter.php");
?>
<!--------------------------   Filter -->
<div id="check">

</div>


<!----------------------------------------------------------------------------------- Start Property -->
<div id="ajaxData">








</div>




<div class=" ads col-lg-2 mb-4 position-relative">
  <p class="ad">
    <?php include("includes/functions/manage_side_ads.php"); ?>
    <a href="side_ads_form.php">join Us and Creat a Side Ads...</a>
  </p>
</div>



<!-- ----------------------------------------------------------------------------------Premium Section -->
<section class="ftco-section ftco-fullwidth <?php ?>">
    	<div class="overlay"></div>
    	<div class="container">
    		<div class="row justify-content-center">
          <div class="col-md-12 heading-section text-center ftco-animate mb-5">
            <h2 class="mb-2 mt-3">Why Choose Us?</h2>
          </div>
        </div>
    	</div>
    	<div class="container-fluid px-0">
    		<div class="row d-md-flex text-wrapper align-items-stretch">
					<div class="one-half mb-md-0 mb-4 img d-flex align-self-stretch" style="background-image:url(layout/img/about.jpg); border-radius: 27px;margin-left:17px;"></div>
					<div class="one-half half-text d-flex justify-content-end align-items-center">
						<div class="text-inner pl-md-5">
							<div class="row d-flex">
			          <div class="col-md-12 d-flex align-self-stretch ftco-animate">
			            <div class="media block-6 services-wrap d-flex">
			            	<div class="icon d-flex justify-content-center align-items-center"><span class="">$</span></div>
			              <div class="media-body pl-4">
			                <h3>No Downpayment</h3>
			                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
			              </div>
			            </div>      
			          </div>
			          <div class="col-md-12 d-flex align-self-stretch ftco-animate">
			            <div class="media block-6 services-wrap d-flex">
			            	<div class="icon d-flex justify-content-center align-items-center"><span class="flaticon-wallet"></span></div>
			              <div class="media-body pl-4">
			                <h3>All Cash Offer</h3>
			                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
			              </div>
			            </div>      
			          </div>
			          <div class="col-md-12 d-flex align-self-stretch ftco-animate">
			            <div class="media block-6 services-wrap d-flex">
			            	<div class="icon d-flex justify-content-center align-items-center"><span class="flaticon-file"></span></div>
			              <div class="media-body pl-4">
			                <h3>Experts in Your Corner</h3>
			                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
			              </div>
			            </div>      
			          </div>
			          <div class="col-md-12 d-flex align-self-stretch ftco-animate">
			            <div class="media block-6 services-wrap d-flex">
			            	<div class="icon d-flex justify-content-center align-items-center"><span class="flaticon-locked"></span></div>
			              <div class="media-body pl-4">
			                <h3>Locked in Pricing</h3>
			                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
			              </div>
			            </div>      
			          </div>
			        </div>
            </div>
					</div>
    		</div>
    	</div>
    </section>

		<section class="ftco-counter ftco-section img" id="section-counter">
			<div class="overlay"></div>
    	<div class="container">
    		<div class="row">
          <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate counter-row">
            <div class="block-18">
              <div class="text text-border d-flex align-items-center">
                <strong class="number" data-number="305">0</strong>
                <span>Area <br>Population</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate counter-row">
            <div class="block-18">
              <div class="text text-border d-flex align-items-center">
                <strong class="number" data-number="1090">0</strong>
                <span>Total <br>Properties</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate counter-row">
            <div class="block-18">
              <div class="text text-border d-flex align-items-center">
                <strong class="number" data-number="209">0</strong>
                <span>Average <br>House</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate counter-row">
            <div class="block-18">
              <div class="text d-flex align-items-center">
                <strong class="number" data-number="67">0</strong>
                <span>Total <br>Branches</span>
              </div>
            </div>
          </div>
        </div>
    	</div>
    </section>
    
<!-- Gallery By Location -->
<section class="ftco-section testimony-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <h2 class="mb-3 mt-5">Clients' Review</h2>
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel ftco-owl">
              <div class="item">
                <div class="testimony-wrap py-4">
                  <div class="text">
                    <p class="mb-4">I did not have the financial ability to pay all this amount of money at once but I found the financial facilities</p>
                    <div class="d-flex align-items-center">
                    	<div class="pl-3">
		                    <p class="name">Michael Emad</p>
		                    <span class="position">Business Analyst</span>
		                  </div>
	                  </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4">
                  <div class="text">
                    <p class="mb-4">One of the best realestate web-site that satisfied my needs</p>
                    <div class="d-flex align-items-center">
                    	<div class="pl-3">
		                    <p class="name">Michael Nasser</p>
		                    <span class="position">Web Developer</span>
		                  </div>
	                  </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4">
                  <div class="text">
                    <p class="mb-4">Very good customer service and excellent after-purchase services. I did not expect to find workers to finish my apartment, but <strong>Beetcom</strong> they saved me all this at the lowest costs</p>
                    <div class="d-flex align-items-center">
                    	<div class="pl-3">
		                    <p class="name">Mario Magdi</p>
		                    <span class="position">System Analyst</span>
		                  </div>
	                  </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4">
                  <div class="text">
                    <p class="mb-4">I was confused about the prices due to the great disparity in the prices that exist in the market while I found in <strong>Beetcom</strong> the best price and the best place. It is very difficult to have both but <strong>Beetcom</strong> achieve this</p>
                    <div class="d-flex align-items-center">
                    	<div class="pl-3">
		                    <p class="name">Marina Robile</p>
		                    <span class="position">Business Analyst</span>
		                  </div>
	                  </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4">
                  <div class="text">
                    <p class="mb-4">I didn't expect to be treated with the utmost professionalism. I was happy to cooperate with <strong>Beetcom</strong> Real people, they helped me to the fullest.</p>
                    <div class="d-flex align-items-center">
                    	<div class="pl-3">
		                    <p class="name">Mazen Mohamed</p>
		                    <span class="position">System Analyst</span>
		                  </div>
	                  </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
<!-- ------------------------------------------------------- -->


<?php
include("includes/template/footer.php");
// if(empty($_SESSION['email'])){ // not previously logged in
?>

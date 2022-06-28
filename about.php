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
?>

<?php
include("includes/template/nav.php");
?>
	<!-- Slider main container -->
    <section class="hero-wrap hero-wrap-2 ftco-degree-bg js-fullheight" style="background-image: url('../beetcom/layout/img/slider4.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
      <div class="overlay-2"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate pb-5 mb-5 text-center">
            <h1 class="mb-3 bread">About Us</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>About us <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section ftco-no-pb">
			<div class="container">
				<div class="row">
					<div class="col-md-6 img img-3 d-flex justify-content-center align-items-center" style="background-image: url('../beetcom/layout/img/mahmoud-diab-o4n7cF2NVV8-unsplash.jpg'); border-radius: 15px;">
					</div>
					<div class="col-md-6 wrap-about pl-md-5 ftco-animate">
	          <div class="heading-section">
	            <h2 class="mb-4">Welcome To <strong>BeetCom</strong> a Real Estate Agency</h2>

	            <p>Established in 2022, We are here to help you to get the life you desrve.<br>It's not a property, or a better home you look for, but for better future.</p>
	            <p>We have successfully delivered on schedule several <strong>BeetCom</strong> resorts in Ain Sokhna, the North Coast, EL PATIO residential compounds in EL Shorouk City and New Cairo, as well as in 6th of October City and Sheikh Zayed.</p>

	          </div>
					</div>
				</div>
			</div>
		</section>

        <section class="ftco-section" id="vision">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-4 about-card">
    				<h3 style="font-weight: 600; font-size: 20px;" class="text-center mision">Our Mission</h3>
    				<p class="text-center">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
    			</div>
    			<div class="col-md-4 about-card">
    				<h3 style="font-weight: 600; font-size: 20px;" class="text-center mision">Our Vission</h3>
    				<p class="text-center">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
    			</div>
    			<div class="col-md-4 about-card">
    				<h3 style="font-weight: 600; font-size: 20px;" class="text-center mision">Our Value</h3>
    				<p class="text-center">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
    			</div>
    		</div>
    	</div>
    </section>
	

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


<!--------------------------   FILTER-->

<!--------------------------   Filter -->
<div id="check">

</div>


<!----------------------------------------------------------------------------------- Start Property -->

















</div>
<!-- ----------------------------------------------------------------------------------Premium Section -->
	  
    
<!-- Gallery By Location -->


<!-- Clients Counter -->
<script src="includes/libraries/jquery/jquery.js"></script>
<script>
	$("#home-li,#about-li,#services-li,#contact-li").on("click",function(){
		$("#home-li,#about-li,#services-li,#contact-li").removeClass('active')
		$(this).addClass('active')
	});

</script>
<!-- Footer -->

<!-- ------------------------------------------------------- -->


<?php
include("includes/template/footer.php");
// if(empty($_SESSION['email'])){ // not previously logged in
?>
	<!-- ----------------------Login -->
<!-- <div class="login-form">
		<form id="login" method="post" action="login.php">
			<div class="mb-3">
				<label for="exampleInputEmail1" class="form-label">Email address</label>
				<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
				<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
			</div>
			<div class="mb-3">
				<label for="exampleInputPassword1" class="form-label">Password</label>
				<input type="password" class="form-control" id="exampleInputPassword1" name="password">
			</div>
			<div class="mb-3 form-check">
				<input type="checkbox" class="form-check-input" id="exampleCheck1">
				<label class="form-check-label" for="exampleCheck1">Check me out</label>
			</div>
			<button type="submit" class="btn btn-primary">Sign In</button>
			<button type="submit" class="btn btn-primary"><a href="reg.php">Registration</a></button>

		</form>
	</div>	 -->
<!--------------------------End of login  -->
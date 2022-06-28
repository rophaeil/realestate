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
    <section class="hero-wrap hero-wrap-2 ftco-degree-bg js-fullheight" style="background-image: url('layout/img/header-Contact-us.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="overlay-2"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate pb-5 mb-5 text-center">
            <h1 class="mb-3 bread">Contact Us</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Contact <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section contact-section">
      <div class="container">
        <div class="row d-flex mb-5 contact-info justify-content-center">
        	<div class="col-md-8">
        		<div class="row mb-5">
		          <div class="col-md-4 text-center py-4">
		          	<div class="icon mb-3 d-flex align-items-center justify-content-center">
		          		<span class="icon-map-o"></span>
		          	</div>
		            <p><span>Address:</span> 198 Abo ElFada Street, Zamalik, Cairo</p>
		          </div>
		          <div class="col-md-4 text-center py-4">
		          	<div class="icon mb-3 d-flex align-items-center justify-content-center">
		          		<span class="icon-mobile-phone"></span>
		          	</div>
		            <p><span>Phone:</span> <a href="tel://1234567920">+20 128 829 3741</a></p>
		          </div>
		          <div class="col-md-4 text-center py-4">
		          	<div class="icon mb-3 d-flex align-items-center justify-content-center">
		          		<span class="icon-envelope-o"></span>
		          	</div>
		            <p><span>Email:</span> <a href="mailto:info@yoursite.com">beetcom@gmail.com</a></p>
		          </div>
		        </div>
          </div>
        </div>
        <div class="row block-9 justify-content-center mb-5">
          <div class="col-md-6 align-items-stretch d-flex">
            <form action="#" class="bg-light p-5 contact-form">
              <div class="form-group">
                <input type="text" class="form-control rounded-pill" placeholder="Your Name">
              </div>
              <div class="form-group">
                <input type="text" class="form-control rounded-pill" placeholder="Your Email">
              </div>
              <div class="form-group">
                <input type="text" class="form-control rounded-pill" placeholder="Subject">
              </div>
              <div class="form-group">
                <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5 rounded-pill" id="contact-btn">
              </div>
            </form>
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

<?php 
if( empty($_SESSION) && !isset($_SESSION)){
session_start(); 
}
$prop = new properties();
$data = $prop->all();

?>
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
            <div class="container">
            <a class="brand navbar-brand" href="index.php" style="font-size: 35px;"> <img style="width:50px" class="logo" src="layout/img/logo.png" alt="logo">eetcom</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto" >
                <li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
                <li class="nav-item"><a href="services.php" class="nav-link">Services</a></li>
                <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>


                <li class="nav-item">

                <?php
// include("../../includes/template/");
if(empty($_SESSION['email'])){ // not previously logged in
?>
<button type="button" class="btn nav-link" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@fat">Log In</button>
    <!-- Hidden login Form ---------------------->

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
    <div class="modal-content bg-light border-0">
	<div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Log In</h5>
		
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
    <div class="modal-body">


        <form method="post" action="includes/functions/login.php">
        <div class="mb-3">
		<label for="recipient-name" class="col-form-label">Email:</label>
		<input type="email" class="form-control" id="recipient-name" name="email" required>
        </div>
        <div class="mb-3">
		<label for="message-text" class="col-form-label">Password:</label>
		<input type="password" class="form-control" id="recipient-pass" name="pass" required>
		</div>
		<a class="create" href="reg.php">Create Account?</a>

		
		<div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Log In</button>
		</div>

		</form>
    </div>

    </div>
	</div>
</div>
    <!-- END Of Hidden login Form ------------------>
<?php }elseif(isset($_SESSION['email']) && !empty($_SESSION['email'])){
?>
<!-------------------------------------- Profile Icon  -->


<div class="dropdown nav-link">
  <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  <i class="fa-solid fa-user"></i>
  </button>
  <div class="dropdown-menu" role="menu" aria-labelledby="menu1" aria-labelledby="dropdownMenuButton">
  <h4 class="offcanvas-title text-center"><?php  echo $_SESSION['Fname'] ?></h4>
    <a class="dropdown-item" href="myaccount.php?id=<?php echo $_SESSION['id']?>"><button class="dropdown-item" type="button">My Account</button></a>
    <a class="dropdown-item" href="fav.php"><button class="dropdown-item" type="button">My Favourite</button></a>
    <a class="dropdown-item" href="includes\functions/logout.php"><button class="dropdown-item danger" type="button">LogOut</button></a>

  </div>
</div>


<?php } ?>

                </li>
                </ul>
            </div>
            </div>
        </nav>
    <!-- END nav -->



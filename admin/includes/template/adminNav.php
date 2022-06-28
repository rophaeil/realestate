

<!--------------- Nav bar ---------------------->
<div class="header">
        <div class="container">
            <span class="toggle">
                <span></span>
                <span></span>
                <span></span>
            </span>
            
            <a class="brand" href="#">
                <img class="logo" src="layout/img/logo.jpg" alt="logo">
            </a>

<button type="button" class="btn btn-dark rounded-pill" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@fat">Log In</button>
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

<!-------------------------------------- Profile Icon  -->

<div class="offcanvas offcanvas-end" id="demo">
    <div class="offcanvas-header">
    <h1 class="offcanvas-title"></h1>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
    </div>
    <div class="offcanvas-body">
            <button class="dropdown-item" type="button">My Account</button>
            <button class="dropdown-item" type="button">My Favourite</button>
            
            <a href="includes\functions/logout.php"><button class="btn btn-danger " type="button">LogOut</button></a>
    
    </div>
</div>


    <button class="btn btn-dark rounded-pill" type="button" data-bs-toggle="offcanvas" data-bs-target="#demo">
    <i class="fa-solid fa-user"></i>
    </button>

<!-- <div class="dropdown">
		<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
		
	</button>
	<ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
    <li><button class="dropdown-item" type="button">My Account</button></li>
    <li><button class="dropdown-item" type="button">My Favourite</button></li>
    <li><a href="includes\functions/login.php"><button class="dropdown-item" type="button">LogOut</button></a></li>
	</ul>
</div> -->
<!------------------------------- End of Profile Icon  -->

        </div>
    </div>


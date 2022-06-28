<?php
  $user_id = $_SESSION['id'];
  $user = new users();
  $user_data = $user->findby("id", $user_id);
?>
          <!-- Navbar -->
          <nav
          class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
            id="layout-navbar"
          >
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
              <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="bx bx-menu bx-sm"></i>
              </a>
            </div>

            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
              <!-- Search -->
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item"><a href="index.php" class="nav-link my-a">Home</a></li>
                  <li class="nav-item"><a href="about.php" class="nav-link my-a">About</a></li>
                  <li class="nav-item"><a href="services.php" class="nav-link my-a">Services</a></li>
                  <li class="nav-item"><a href="contact.php" class="nav-link my-a">Contact</a></li>
                </ul>
              <!-- </div> -->
              <!-- /Search -->

              <ul class="navbar-nav flex-row align-items-center ms-auto">
                <!-- Place this tag where you want the button to render. -->
                <li class="nav-item lh-1 me-3">

                </li>

                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                      <img src="data/images/users/<?php echo $user_data['user_img'] ?>" alt class="w-px-40 h-auto rounded-circle" />
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item" href="myaccount.php">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar avatar-online">
                              <img src="data/images/users/<?php echo $user_data['user_img'] ?>" alt class="w-px-40 h-auto rounded-circle" />
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <span class="fw-semibold d-block"><?php echo $user_data['Fname'] . " " . $user_data['Sname']?></span>
                          
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
<!--                   
                    <li>
                      <a class="dropdown-item" href="personal.html">
                        <i class="fa-solid fa-info me-3 ms-1"></i>
                        <span class="align-middle">My Information</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="prop.html">
                        <i class="fa-solid fa-house me-2"></i>
                        <span class="align-middle">My Property</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="add-prop.html">
                        <i class="fa-solid fa-plus me-2"></i>
                        <span class="align-middle">Add Property</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="fav.html">
                        <i class="fa-solid fa-heart me-2"></i>
                        <span class="align-middle">My Favourites</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="ads.html">
                        <i class="fa-solid fa-rectangle-ad me-2"></i>
                        <span class="align-middle">Advertisement</span>
                      </a>
                    </li> -->
                    
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="includes\functions/logout.php">
                        <i class="bx bx-power-off me-2"></i>
                        <span class="align-middle">Log Out</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <!--/ User -->
              </ul>
              </div>
            </nav>
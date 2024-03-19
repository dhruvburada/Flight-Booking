<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- Custom CSS -->
    <style>
      #changepswd: {
        /* Add custom styles here */
      }
    </style>
</head>
<body>

<!-- Navigation Bar START -->

<?php include 'Header.php';?>

<!-- Navigation Bar END -->

<section style="background-color: #eee;">
  <div class="container py-5">
    <!-- Breadcrumb Navigation -->
    <div class="row">
      <div class="col">
        <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">User</a></li>
            <li class="breadcrumb-item active" aria-current="page">User Profile</li>
          </ol>
        </nav>
      </div>
    </div>

    <!-- Profile Section -->
    <div class="row">
      <!-- Profile Card -->
      <div class="col-lg-4">
        <div class="card mb-4">
          <div class="card-body text-center">
            <!-- Profile Picture -->
            <img src="img/profile_pic/dhruvburada.png" alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
            <!-- User Name -->
            <h5 class="my-3">Dhruv Burada</h5>
            <!-- Buttons for Profile Actions -->
            <div class="d-flex justify-content-center mb-2">
              <button type="button" class="btn btn-primary" id="changepswd" onclick="document.getElementById('profilePic').click();">Change Profile Pic</button>
              <button type="button" class="btn btn-outline-primary ms-1"><a href="ChangePassword.php" style="text-decoration:none;">Change Password</a></button>
            </div>
          </div>
        </div>

        <!-- Side Menu with Links -->
        <div class="card mb-4 mb-lg-0">
          <div class="card-body p-0">
            <ul class="list-group list-group-flush">
              <!-- List of Links -->
              <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <i class="fas fa-home fa-lg text-warning"></i>
                <p class="mb-0"><a href="index.php" style="text-decoration:none;">Home</a></p>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <i class="fas fa-lock fa-lg" style="color: #55acee;"></i>
                <p class="mb-0"><a href="ChangePassword.php" style="text-decoration:none;">Change Password</a></p>
              </li>
              <li class= "list-group-item d-flex justify-content-between align-items-center p-3">
                <i class= "fas fa-history fa-lg" style= "color: #55acee;"></i>
                <p class= "mb-0"><a href= "OrderHistory.php" style= "text-decoration:none;">Order History</a></p>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <!-- User Information Section -->
      <div class= "col-lg-8">
        <!-- User Details Card -->
        <div class= "card mb-4">
          <div class= "card-body">
            <!-- User Details Rows -->
            <!-- First Name Row -->
            <div class= "row">
              <div class= "col-sm-3">
                <p class= "mb-0">First Name</p>
              </div>
              <div class= "col-sm-9">
                <p class= "text-muted mb-0">Dhruv</p>
              </div>
            </div>

            <!-- Last Name Row -->
            <hr>
            <div class= "row">
              <div class= "col-sm-3">
                <p class= "mb-0">Last Name</p>
              </div>
              <div class= "col-sm-9">
                <p class= "text-muted mb-0">Burada</p>
              </div>
            </div>

            <!-- Email Row -->
            <hr>
            <div class= "row">
              <div class= "col-sm-3">
                <p class= "mb-0">Email</p>
              </div>
              <div class= "col-sm-9">
                <p class= "text-muted mb-0">dburada367@rku.ac.in</p>
              </div>
            </div>

            <!-- Phone Row -->
            <hr>
            <div class= "row">
              <div class= "col-sm-3">
                <p class= "mb-0">Phone</p>
              </div>
              <div class= "col-sm-9">
                <p class= "text-muted mb-0">+91 8488997323</p>
              </div>
            </div>

            <!-- Nationality Row -->
            <hr>
            <div class= "row">
              <div class= "col-sm-3">
                <p class= "mb-0">Nationality</p>
              </div>
              <div class= "col-sm-9">
                <p class= "text-muted mb-0">Indian</p>
              </div>
            </div>

            <!-- Age Row -->
            <hr>
            <div class= "row">
              <div class= "col-sm-3">
                <p class= "mb-0">Age</p>
              </div>
              <div class= "col-sm-9">
                <p class= "text-muted mb-0">18</p>
              </div>
            </div>
          </div>
        </div>

                <!-- Points Card and Progress Bars -->
                <div class="row">
          <div class="col-md-4">
            <div class="card mb-4 mb-md-0">
              <div class="card-body">
                <p class="mb-2">Points<span class="text-primary font-italic me-1"> Earned </span></p>
                <p class="mb-1" style="font-size: .77rem;">500 Points</p>
                <div class="progress rounded" style="height: 5px;">
                  <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                </div>

                <p class="mb-2 mt-2">Points <span class="text-primary font-italic me-1 ">Redeemed</span></p>
                <p class="mb-1" style="font-size: .77rem;">400 Points</p>
                <div class="progress rounded" style="height: 5px;">
                  <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                
                <p class="mb-2 mt-2">Points <span class="text-primary font-italic me-1 ">Balance</span></p>
                <p class="mb-1" style="font-size: .77rem;">100 Points</p>
                <div class="progress rounded" style="height: 5px;">
                  <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </div>
          </div>

          <!-- Address Information Card -->
          <div class="col-md-8">
            <div class="card mb-4">
              <div class="card-body">
                <div class="row">
                  <div class="col-sm-3">
                    <p class="mb-0">Country</p>
                  </div>
                  <div class="col-sm-9">
                    <p class="text-muted mb-0">India</p>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-sm-3">
                    <p class="mb-0">State</p>
                  </div>
                  <div class="col-sm-9">
                    <p class="text-muted mb-0">Gujarat</p>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-sm-3">
                    <p class="mb-0">Postal Code</p>
                  </div>
                  <div class="col-sm-9">
                    <p class="text-muted mb-0">360311</p>
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
</body>
</html>
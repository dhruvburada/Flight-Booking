<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>

<!-- Navigation Bar START -->

<?php include 'Header.php';?>

<!-- Navigation Bar END -->

<section style="background-color: #eee;">
  <div class="container py-5">
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

    <div class="row">
      <div class="col-lg-4">
        <div class="card mb-4">
          <div class="card-body text-center">
            <img src="dhruvburada.png" alt="avatar"
              class="rounded-circle img-fluid" style="width: 150px;">
            <h5 class="my-3">Dhruv Burada</h5>
            <div class="d-flex justify-content-center mb-2">
            <button type="button" class="btn btn-primary" onclick="document.getElementById('profilePic').click();">Change Profile Pic</button>
              <button type="button" class="btn btn-outline-primary ms-1"><a href="ChangePassword.php" style="text-decoration:none;">Change Password</a></button>
            </div>
          </div>
        </div>
        <div class="card mb-4 mb-lg-0">
          <div class="card-body p-0">
          <ul class="list-group list-group-flush">
    <li class="list-group-item d-flex justify-content-between align-items-center p-3">
    <i class="fas fa-home fa-lg text-warning"></i>
        <p class="mb-0"><a href="index.php" style="text-decoration:none;">Home</a></p>
    </li>
    <li class="list-group-item d-flex justify-content-between align-items-center p-3">
        <i class="fas fa-lock fa-lg" style="color: #55acee;"></i>
        <p class="mb-0"><a href="ChangePassword.php" style="text-decoration:none;">Change Password</a></p>
    </li>
    <li class="list-group-item d-flex justify-content-between align-items-center p-3">
        <i class="fas fa-history fa-lg" style="color: #55acee;"></i>
        <p class="mb-0"><a href="OrderHistory.php" style="text-decoration:none;">Order History</a></p>
    </li>
</ul>

          </div>
        </div>
      </div>
      <div class="col-lg-8">
        <div class="card mb-4">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Full Name</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">Dhruv Burada</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Email</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">dburada367@rku.ac.in</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Phone</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">+91 8488997323</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Alternate Mobile</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">+91 9824215486</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Address</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">Gondal , Rajkot 360311</p>
              </div>
            </div>
          </div>
        </div>
          <div class="col-md-6">
            <div class="card mb-4 mb-md-0">
              <div class="card-body">
                <p class="mb-4"><span class="text-primary font-italic me-1">Rewards</span> Earned
                </p>
                <p class="mb-1" style="font-size: .77rem;">80 Points</p>
                <div class="progress rounded" style="height: 5px;">
                  <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>
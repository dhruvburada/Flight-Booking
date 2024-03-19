
<script src="https://kit.fontawesome.com/68e8fc477f.js" crossorigin="anonymous"></script>

<style>
  
/* Styles for smooth hover effects */
.nav-item:hover .nav-link {
  transition: all 0.3s ease;
  background-color: #E6E6FA;
  border-radius:20px; /* Change this to your desired hover color */
}

/* Style for active page */
.nav-item.active .nav-link {
  background-color: #007bff; /* Change this to your desired active page color */
  color: #fff; /* Change this to your desired text color for active page */
  border-radius: 15px; /* Adjust the border-radius to your preference for rounded corners */
}


.navbar

{
  background:none !important;
}

.nav-intem 
{
  color:white !important;
  font-weight:5px !important;
}
</style>

<!-- Nav BAR -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Flight GO</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact us</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Pages
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="BillingDetails.php">Billing Details</a></li>
            <li><a class="dropdown-item" href="OrderHistory.php">Order History</a></li>
            <li><a class="dropdown-item" href="TicketDetails.php">Confirm Booking</a></li>
            <li><a class="dropdown-item" href="ChangePassword.php">Change Password</a></li>
            <li><a class="dropdown-item" href="MyProfile.php">My Profile</a></li>
            <li><a class="dropdown-item" href="Rewards.php">Rewards Page</a></li>
            <li><hr class="dropdown-divider"></li>
            <li style="text-align: center;">just for preview</li>
          </ul>
        </li>
      </ul>

      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <span class="d-none d-lg-inline"><i class="fas fa-user"></i></span>
            <span class="d-inline d-lg-none">My Profile</span>
          </a>
          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profileDropdown">
            <li><a class="dropdown-item" href="MyProfile.php">View My Profile</a></li>
            <li><a class="dropdown-item" href="ChangePassword.php">Change Password</a></li>
            <li><a class="dropdown-item" href="#">Log Out</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- Nav Bar End -->

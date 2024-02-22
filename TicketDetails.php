<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirm Booking</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <style>
.tg-innerbanner {
    position: relative;
    height: 450px;
    background-image: url('booking-hero 2.jpg'); /* Image URL */
    background-size: cover;
    background-position: right !important;
    color: #fff;
    text-align: center;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    /* Darker overlay */
    background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('booking-hero 2.jpg');
}

    .tg-breadcrumb {
        padding: 0;
        margin: 0;
        color: #fff;
        list-style: none;
        text-align: center;
        text-transform: capitalize;
        font-size: 14px;
        margin-top: 20px; /* Adjust spacing */
    }
    .tg-breadcrumb li {
        display: inline;
        margin-right: 5px; /* Adjust spacing between breadcrumb items */
    }
    .tg-breadcrumb li:not(.tg-active):hover {
        cursor: pointer;
        text-decoration: underline;
    }

    .tg-box {
        width: 100%;
        padding-top : 20px;
        border: 1px solid #e6e6e6; /* Add border */
        border-radius: 5px; /* Rounded corners */
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Shadow effect */
        margin-top : 25px;
        padding:15px;
    }

    .tg-widgetpersonprice {
        padding: 30px;
    }

    .tg-widgetpersonprice ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .tg-widgetpersonprice ul li {
        padding: 10px 0;
    }

    .tg-widgetpersonprice ul li:last-child {
        border-bottom: none; /* Remove bottom border from the last item */
    }

    .container{margin:2px;}

/* CSS targeting only small screen container */
@media (max-width: 768px) {
    .panel.d-xs-block.d-md-none ul.list-unstyled li {
        display: flex;
        justify-content: space-between;
        align-items: right; 
    }

    .panel.d-xs-block.d-md-none ul.list-unstyled li strong {
        text-align:left; /* Pushes the strong text to the right */
    }
}


#feedback-form-wrapper #floating-icon > button {
  position: fixed;
  right: 0;
  top: 50%;
  transform: rotate(-90deg) translate(50%, -50%);
  transform-origin: right;
}

#feedback-form-wrapper .rating-input-wrapper input[type="radio"] {
  display: none;
}
#feedback-form-wrapper .rating-input-wrapper input[type="radio"] ~ span {
  cursor: pointer;
}
#feedback-form-wrapper .rating-input-wrapper input[type="radio"]:checked ~ span {
  background-color: #4261dc;
  color: #fff;
}
#feedback-form-wrapper .rating-labels > label{
  font-size: 14px;
    color: #777;
}

    
   
</style>

<style>
    /* Custom CSS styles */
    .container {
        margin-top: 50px;
            width: 80%;
            margin-top:50px;
            margin: 50px auto; Center align container
    }
    .panel {
        border: 1px solid #ddd;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        padding: 20px;
        margin-bottom: 20px;
    }

    .panel ul {
            padding-left: 0; /* Remove default padding */
            margin-bottom: 0; /* Remove default margin */
        }
        .panel ul li {
            margin-bottom: 5px; /* Add spacing between list items */
        }
</style>
<body>

    </style>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- Bootstrap JS -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<!-- NavBar Start -->
    
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
              <li><a class="dropdown-item" href="TicketDetails.php">Confirm Booking</a></li>
              <li><a  class="dropdown-item" href="Rewards.php">Rewards Page</a></li>
              <li><hr class="dropdown-divider"></li>
              <li style="text-align: center;">just for preview</li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>

<!-- Nav Bar End -->

<!-- Inner Banner -->

  <section class="tg-innerbanner">
    <h1>Congratulations !</h1>
    <p>Your Ticket is booked</p>
    <ul class="tg-breadcrumb">
        <li>Home</li>
        <li>Pages</li>
        <li class="tg-active">Flight Confirmation</li>
    </ul>
</section>

<!-- Inner Banner -->

<div class="container">
    <!-- Container 1 -->
    <div class="panel d-none d-sm-none d-md-block">
        <div class="row">
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12">
                <h5>Flight Details</h5>
            </div>
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-6">
                <ul class="list-unstyled">
                    <li>Order Number</li>
                    <li>Number of Seats</li>
                    <li>Day of Travel</li>
                    <li>Flight From</li>
                    <li>Flight To</li>
                </ul>
            </div>
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-6">
                <ul class="list-unstyled">
                    <li>#3560</li>
                    <li>4</li>
                    <li>September 6, 2017</li>
                    <li>Ahemdabad</li>
                    <li>America</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Container 1 for Extra Small Screens -->
    <div class="panel d-xs-block d-md-none">
        <h5>Flight Detail</h5>
        <ul class="list-unstyled">
            <li><strong>Order Number: </strong> #3560</li>
            <li><strong>Number of Seats: </strong> 4</li>
            <li><strong>Day of Travel: </strong> September 6, 2017</li>
            <li><strong>Flight From: </strong> Ahemdabad</li>
            <li><strong>Flight To: </strong>America</li>
        </ul>
    </div>    

    <!-- Container 2 -->
    <div class="panel d-none d-sm-none d-md-block">
        <div class="row">
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12">
                <h5>Billing Detail</h5>
            </div>
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-6">
                <ul class="list-unstyled">
                    <li>First Name</li>
                    <li>Last Name</li>
                    <li>Email</li>
                    <li>Phone</li>
                </ul>
            </div>
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-6">
                <ul class="list-unstyled">
                    <li>Dhruv</li>
                    <li>Burada</li>
                    <li>dburada367@rku.ac.in</li>
                    <li>+91 8488997323</li>
                </ul>
            </div>
        </div>
    </div> 
    <!-- Container 2 for Extra Small Screens -->
    <div class="panel d-xs-block d-md-none">
        <h5>Billing Detail</h5>
        <ul class="list-unstyled">
            <li><strong>First Name:</strong> Dhruv</li>
            <li><strong>Last Name:</strong> Burada</li>
            <li><strong>Email:</strong> dburada367@rku.ac.in</li>
            <li><strong>Phone:</strong> +91 8488997323</li>
        </ul>
    </div>    
    <!-- Container 3 -->
    <div class="panel d-none d-sm-none d-md-block">
        <div class="row">
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12">
                <h5>Payment Details</h5>
            </div>
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-6">
                <ul class="list-unstyled">
                    <li>Person Base Price</li>
                    <li>Sub Total</li>
                    <li>Rewards Points Earned</li>
                    <li>Rewards Points Discount</li>
                    <hr>
                    <li>Total</li>
                </ul>
            </div>
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-6">
                <ul class="list-unstyled">
                    <li>3000 ₹</li>
                    <li>15000 ₹</li>
                    <li>+10 ₹</li>
                    <li>-500 ₹</li>
                    <hr>
                    <li>4000 ₹</li>

                </ul>
            </div>
        </div>
    </div>

    <!-- Container 3 For Extra Small Screen -->

    <div class="panel d-xs-block d-md-none">
        <h5>Payment Details</h5>
        <ul class="list-unstyled">
            <li><strong>Person Base Price: </strong> 3000 ₹</li>
            <li><strong>Sub Total: </strong> 15000 ₹</li>
            <li><strong>Rewards Points Earned: </strong> +10 ₹</li>
            <li><strong>Rewards Points Discount: </strong> -500 ₹</li>
            <hr>
            <li><strong>Total: </strong>40000 ₹</li>
        </ul>
    </div>    
    
</div>

    
     <!-- Modal -->
     <div class="modal" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ticket Confirmation</h5>
      </div>
      <div class="modal-body">
        We will send you ticket via your email once we verify your payments.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal" aria-label="Close">I understand</button>
      </div>
    </div>
  </div>
</div>

<div class="row justify-content-center">
        <div class="col-12 text-center">
            <button type="button" class="btn btn-secondary">Contact Us</button>
            <button type="button" class="btn btn-primary">Home</button>
         </div>
</div>

<div id="feedback-form-wrapper">
  <div id="floating-icon">
    <button type="button" class="btn btn-primary btn-sm rounded-0" data-toggle="modal" data-target="#feedbackModal">
      Feedback
    </button>

  </div>
  <div id="feedback-form-modal">
    <div class="modal fade" id="feedbackModal" tabindex="-1" aria-labelledby="feedbackModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="feedbackModalLabel">Feedback Form</h5>
            </button>
          </div>
          <div class="modal-body">
            <form>
              <div class="form-group">
                <label for="exampleFormControlTextarea1">How likely you would like to recommand us to your friends?</label>
                <div class="rating-input-wrapper d-flex justify-content-between mt-2">
                  <label><input type="radio" name="rating" /><span class="border rounded px-3 py-2">1</span></label>
                  <label><input type="radio" name="rating" /><span class="border rounded px-3 py-2">2</span></label>
                  <label><input type="radio" name="rating" /><span class="border rounded px-3 py-2">3</span></label>
                  <label><input type="radio" name="rating" /><span class="border rounded px-3 py-2">4</span></label>
                  <label><input type="radio" name="rating" /><span class="border rounded px-3 py-2">5</span></label>
                  <label><input type="radio" name="rating" /><span class="border rounded px-3 py-2">6</span></label>
                  <label><input type="radio" name="rating" /><span class="border rounded px-3 py-2">7</span></label>
                  <label><input type="radio" name="rating" /><span class="border rounded px-3 py-2">8</span></label>
                  <label><input type="radio" name="rating" /><span class="border rounded px-3 py-2">9</span></label>
                  <label><input type="radio" name="rating" /><span class="border rounded px-3 py-2">10</span></label>
                </div>
                <div class="rating-labels d-flex justify-content-between mt-1">
                  <label>Very unlikely</label>
                  <label>Very likely</label>
                </div>
              </div>
              <div class="form-group">
                <label for="input-one">What made you leave us so early?</label>
                <input type="text" class="form-control" id="input-one" placeholder="">
              </div>
              <div class="form-group">
                <label for="input-two">Would you like to say something?</label>
                <textarea class="form-control" id="input-two" rows="3"></textarea>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Submit</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<script>
  $(document).ready(function(){
    $("#myModal").modal('show');
  });
</script>

</body>
</html>
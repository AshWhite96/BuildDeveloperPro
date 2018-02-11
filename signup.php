<?php
		include_once 'includes/header.php';
?>
<script type="text/javascript">

$(document).ready(function () {
 
window.setTimeout(function() {
    $(".alert").fadeTo(1000, 0).slideUp(1000, function(){
        $(this).remove(); 
    });
}, 5000);
 
});
</script>
<section>

	<div class="container">    
  		<div class="row">
  			<h3 class="col-sm-offset-3 col-sm-6 text-center">SIGNUP</h3></div><hr>
  		</div>
    	<div class="row">
    			<div class="col-sm-offset-1 col-sm-2"></div> 
      				<div class="col-sm-6">
      					<form class="form" role="form" accept-charset="utf-8" action="system/signup.sys.php" method="post">
      						<div class="row">
      							<div class="col-xs-6">
      								<input class="input-lg form-control" type="text" name="firstname" placeholder="First Name">
      							</div>
      							<div class="col-xs-6">
      								<input class="input-lg form-control" type="text" name="surname" placeholder="Surname">
      							</div>
      						</div>
      								<input type="email" name="email" class="form-control input-lg" placeholder="Your Email">
      								<input type="password" name="password" class="form-control input-lg" placeholder="Password">
      								<input type="password" name="confirm_password" class="form-control input-lg" placeholder="Confirm Password">
      								<center><button class="btn btn-lg btn-primary signup-btn" type="submit" name="submit">Sign Up</button></center>
      					</form>

                <?php
                    $full_url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                    if (strpos($full_url, "signup=empty") == true) {
                      echo '<div class="alert alert-danger"><strong>YOU DID NOT FILL IN ALL THE FIELDS!</strong></div>';
                      exit();
                    }
                    elseif (strpos($full_url, "signup=invalidchar") == true) {
                      echo '<div class="alert alert-danger"><strong>YOU ENTERED INCORRECT CHARACTERS!</strong></div>';
                      exit();
                    }
                    elseif (strpos($full_url, "signup=invalidEmail") == true) {
                      echo '<div class="alert alert-danger"><strong>YOU ENTERED AN INCORRECT EMAIL FORMAT!</strong></div>';
                      exit();
                    }
                    elseif (strpos($full_url, "signup=invalidUser") == true) {
                      echo '<div class="alert alert-danger"><strong>YOUR EMAIL IS ALREADY REGISTERED ON OUR SYSTEM</strong></div>';
                      exit();
                    }
                    elseif (strpos($full_url, "signup=success") == true) {
                      echo '<div class="alert alert-success"><strong>YOUR ACCOUNT HAS BEEN CREATED!</strong></div>';
                      exit();
                    }
                ?>


				</div>
    	</div>
  	</div>
</section>

<?php 
		include_once 'includes/footer.php';
?>

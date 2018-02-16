<?php


		include_once 'includes/header.php';
?>

<section>
	<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-12"> 
      

      <?php 
      		if (isset($_SESSION['u_id'])) {
            include 'apptest.php';

      		}

      		?>
      <hr>
    </div>
  </div>
</div>	
</section>

<?php 
		include_once 'includes/footer.php';
?>

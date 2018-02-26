<?php
    session_start();
?>
<!DOCTYPE html>
<head>
  <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<header>
  <nav class="navbar navbar-default navbar-inverse" role="navigation" id="mainNav">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
        <a class="navbar-brand js-scroll-trigger" href="index.php">
        <img src="../img/BDPlogo.png" width="40" height="40" class="d-inline-block align-top pull-left" alt="Build Developer Pro">Build Developer Pro
      </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav ">
        <?php 
          if (isset($_SESSION['u_id'])) {
            echo '<li><a href="build.php">My Build</a></li>';
          }

          ?>
          <li><a href="#about">About</a></li>
          <li><a href="index.php">Blog</a></li>
          <li><a href="index.php">Help</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><p class="navbar-text">Already have an account?</p></li>
        <li class="dropdown">
          <?php
          if (isset($_SESSION['u_id'])) {
            echo '<a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Logout</b> <span class="caret"></span></a>';
          } else {
              echo '<a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Login or SignUp</b> <span class="caret"></span></a>';
          }

        ?>
          <!--<a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Login</b> <span class="caret"></span></a>-->
      <ul id="login-dp" class="dropdown-menu">
        <li>
           <div class="row">
              <div class="col-md-12">
                  <?php
                      if (isset($_SESSION['u_id'])) {
                        echo "Are you sure you'd like to logout?";
                      } else {
                        echo '<div class="social-buttons">
                          <a href="#" class="btn btn-fb"><i class="fa fa-facebook"></i> Facebook</a>
                          <a href="#" class="btn btn-tw"><i class="fa fa-twitter"></i> Twitter</a>
                        </div>';
                      }


                  ?>
                
                 <div class="nav-login">
                        <?php
                            if (isset($_SESSION['u_id'])) {
                              echo 
                                    '<form action="system/logout.sys.php" method="POST">
                                      <div class="text-center"><button class="btn btn-primary" type="submit" name="submit">Logout</button></div>
                                    </form>';
                            } else {
                                  echo '<form class="form" role="form" method="POST" action="system/login.sys.php" accept-charset="UTF-8" id="login-nav">
                                            <div class="form-group">
                                              <label class="sr-only">Email address</label>
                                              <input type="email" name="email" class="form-control" placeholder="Email" required>
                                            </div>
                                            <div class="form-group">
                                              <label class="sr-only">Password</label>
                                              <input type="password" name="password" class="form-control" placeholder="Password" required>
                                            </div>
                                            <div class="form-group">
                                              <button type="submit" name="submit" class="btn btn-primary btn-block">Sign in</button>
                                            </div>
                                        </form>' ;
                            }
                        ?>
                        

                    
                  </div>
              </div>

              <?php
                if (isset($_SESSION['u_id'])) {

                } else {
                  echo '<div class="bottom text-center">
                            New here ? <a href="signup.php"><b>Sign Up</b></a>
                        </div>';
                }
              ?>
              
           </div>
        </li>
      </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</header>
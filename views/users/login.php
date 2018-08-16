<?php  require_once $_SERVER['DOCUMENT_ROOT'] . '/config/config.php'; ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <meta charset="utf-8"/>

    <!-- Bootstrap -->
    <link href="<?php echo ASSETS ?>bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- styles -->
    <link href="<?php echo ASSETS ?>css/styles.css" rel="stylesheet">

  </head>
  <body class="login-bg">
  	<div class="header">
	     <div class="container">
	        <div class="row">
	           <div class="col-md-12">
	              <!-- Logo -->
	              <div class="logo">
	                 <h1><a href="/">Home</a></h1>
	              </div>
	           </div>
	        </div>
	     </div>
	</div>

	<div class="page-content container">
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<div class="login-wrapper">
			        <div class="box">
			            <div class="content-wrap">
			                <h6>Sign In</h6>
                      <form action="" method="post">
  			                <input class="form-control" name="username" type="text" placeholder="Username">
  			                <input class="form-control" name="password" type="password" placeholder="Password">
  			                <div class="action">
  			                    <button class="btn btn-primary signup" name="login" type="submit">Login</a>
  			                </div>
                      </form>
			            </div>
			        </div>
			    </div>
			</div>
		</div>
	</div>
  <?php
      if( isset($_POST['login']) )
      {
          require_once $_SERVER['DOCUMENT_ROOT'] . '/app/controllers/Auth.php';
          $user  = new Auth;
          $login = $user->login($_POST);
          echo $login;
      }
  ?>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo ASSETS ?>bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo ASSETS ?>js/custom.js"></script>
  </body>
</html>

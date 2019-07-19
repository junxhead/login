<!DOCTYPE html>
<html>
<head>
	<title>Setelah login</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light mb-3">
		    <div class="container">

		        <a class="navbar-brand" href="#">
		            <i class="fab fa-laravel"></i>
		        </a>
		        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		            <span class="navbar-toggler-icon"></span>
		        </button>

		        <div class="collapse navbar-collapse" id="navbarSupportedContent">
		            <ul class="navbar-nav mr-auto">
		                <li class="nav-item active">
		                    <a class="nav-link" href="#">Home</a>
		                </li>
		               
		            </ul>
		            <ul class="navbar-nav ml-auto">
		                <li class="nav-item">
		                    <a class="nav-link" href="logout.php"><i class="fa fa-sign-out-alt"></i> Logout</a>
		                </li>
		            </ul>
		        </div>
		    </div>
		</nav>
		<div class="container">
		    <div class="row">
		        <div class="col-lg-12">
                <?php 
	session_start();
	if($_SESSION['status']!="login"){
		header("location:vlogin.php?pesan=belum_login");
	}
	?>

	<h4>Selamat datang, <?php echo $_SESSION['username']; ?>! anda telah login.</h4>

		        </div>
		    </div>
		</div>

	

</body>
</html>
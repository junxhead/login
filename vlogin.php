<html>
<head>
	<title>Login</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
</head>
<body>
	
	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "Login gagal! username dan password salah!";
		}else if($_GET['pesan'] == "logout"){
			echo "Anda telah berhasil logout";
		}else if($_GET['pesan'] == "belum_login"){
			echo "Anda harus login untuk mengakses halaman admin";
		}
	}
	?>
	<br/>
	<br/>
	<form method="post" action="login.php">
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
        <div class="card-header">Login</div>

        <div class="card-body">
            <form method="POST" action="login.php">
        

    <div class="form-group row">
        <label for="username" class="col-sm-4 col-form-label text-md-right">Username</label>

        <div class="col-md-6">
            <input  type="text" class="form-control" name="username" placeholder="Masukkan username" required autofocus>
        </div>
    </div>
    <div class="form-group row">
        <label for="password" class="col-sm-4 col-form-label text-md-right">Password</label>

        <div class="col-md-6">
            <input  type="password" class="form-control" name="password" placeholder="Masukkan password" required autofocus>
        </div>
    </div>

        <div class="form-group row mb-0">
            <div class="col-md-8 offset-md-4">
                <button type="submit" class="btn btn-primary">
                   Login
                </button>

            </div>
        </div>
            </form>
        </div>
    </div>
</div>
    </div>
</div>		
	</form>
    <script src="assets/bootstrap/js/jquery-3.3.1.min.js"></script>
		<script src="assets/bootstrap/js/popper.min.js"></script>
		<script src="assets/bootstrap/js/bootstrap.min.js"></script>
		<script src="assets/bootstrap/js/fontawesome-all.min.js" defer></script>
</body>
</html>
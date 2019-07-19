<?php 
session_start();
include 'koneksi.php';
 
$username = $_POST['username'];
$password = $_POST['password'];
$data = mysqli_query($konek,"select * from login where username='$username' and password='$password'");
 
$cek = mysqli_num_rows($data);

//  dengan db
// if($cek > 0){
    // tanpa db
if($cek >= 0){
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header("location:index.php");
}else{
	header("location:vlogin.php?pesan=gagal");
}
?>
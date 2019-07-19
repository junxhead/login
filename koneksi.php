<?php
    $konek = mysqli_connect("127.0.0.1","root","");

    if(mysqli_connect_error()){
        echo "konek db gagal : " .mysqli_connect_error();
    }else{
        echo"konek sukses";
    }
?>
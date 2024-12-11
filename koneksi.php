<?php

include "variabel.php";
try{
	$koneksi = mysqli_connect("localhost","root","","$namadb");

}catch(Exception $e){
    echo "Gagal Konek : " . $e->getMessage() ;
	echo
exit();
  };
?>
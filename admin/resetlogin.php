<?php

require("../config/config.default.php");
require("../config/config.function.php");
	$kode=$_POST['kode'];
	$query = mysqli_query($koneksi, 'delete from login where id_log in ('.$kode.')');
	if($query){
		echo 1;
	}
	else{
		echo 0;
	}


	?>
	
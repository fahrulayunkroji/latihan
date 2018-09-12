<?php
if(isset($_POST['tambah'])){
	include('config.php');

	$id = $_POST['no'];
	$nama = $_POST['nama'];

	$input = mysql_query("INSERT INTO data VALUES(NULL, '$id','$nama')") or die(mysql_error());
}

?>
<?php

include 'config.php';

?>

<h3> Form pencarian data </h3>
<a href="tambah.php">input data</a>

<form action="nama.php" method="get">
	<label>Cari :</label>
	<input type="text" name="cari">
	<input type="submit" value="cari">
</form>

<?php
if (isset($_GET['cari'])) {
	$cari = $_GET['cari'];
	echo "<b>Hasil pencarian : " .$cari. "</b>";

	
}
?>

<table border="1">
	<tr>
	<th>No</th>
	<th>Nama</th>
	</tr>
<?php
if(isset($_GET['cari'])){
	$cari = $_GET['cari'];
	$data = mysql_query("select * from data where nama like '%". $cari. "%'");

} else {
	$data = mysql_query("select * from data");
}
$no = 1;
while($d = mysql_fetch_array($data)){
	?>
	<tr>
		<td><?php echo $no++; ?></td>
		<td><?php echo $d['nama']; ?></td>
	</tr>

	
	<?php 
}

?>



</table>
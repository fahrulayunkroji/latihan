<?php

include 'config.php';

?>

<h3> Form pencarian data barang</h3>

<form action="barang.php" method="get">
	<label>Car :</label>
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
	<th>Nama Barang</th>
	</tr>
<?php
if(isset($_GET['cari'])){
	$cari = $_GET['cari'];
	$data = mysql_query("select * from barang where barang like '%". $cari. "%'");

} else {
	$data = mysql_query("select * from barang");
}
$no = 1;
while($d = mysql_fetch_array($data)){
	?>
	<tr>
		<td><?php echo $no++; ?></td>
		<td><?php echo $d['barang']; ?></td>
	</tr>
	<?php 
}
?>

</table>
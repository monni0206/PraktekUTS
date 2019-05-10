<?php
include "koneksi.php";
$id=$_GET["id"];
$sql="select * from provinsi where kode_provinsi='$id'";
$query=mysqli_query($conn,$sql);
$data=mysqli_fetch_array($query);
?>
<!doctype html>
<html lang="en">
 <head>
  <title>Edit Provinsi</title>
 </head>
 <body>
  <form method="post" action="updateprovinsi.php">
	<table>
	<tr>
		<td>Kode Provinsi</td>
		<td>:</td>
		<td><input type="text" name="kode_provinsi" value="<?php echo $data[0]; ?>"></td>
	</tr>
	<tr>
		<td>Nama Provinsi</td>
		<td>:</td>
		<td><input type="text" name="nama_provinsi" value="<?php echo $data[1]; ?>"></td>
	</tr>
	<tr>
		<td><input type="submit" value="Simpan"></td>
		<td><input type="reset" value="Batal"></td>
		<td></td>
	</tr>
	</table>
  </form>
  <strong>Data Provinsi</strong>
  <table width=30% border=2 cellspacing=0 cellpadding=0>
  <tr>
	<td align=center>Kode Provinsi</td>
	<td align=center>Nama Provinsi</td>
	<td align=center>Aksi</td>
  </tr>
  <?php
  include "koneksi.php";
  $sql="select * from provinsi";
  $query=mysqli_query($conn,$sql);
  while($data=mysqli_fetch_array($query)){
  echo"<tr>";
	echo"<td align=center>$data[0]</td>";
	echo"<td align=center>$data[1]</td>";
	echo"<td align=center><a href=./editprovinsi.php?id=$data[0]>Edit</a> | <a href=./delprovinsi.php?id=$data[0]>Hapus</a></td>";
  echo"</tr>";
  }
  ?>
  </table>
  </body>
  </html>
<?php
include "koneksi.php";
$id=$_GET["id"];
$sql="select * from kecamatan where kode_kec='$id'";
$query=mysqli_query($conn,$sql);
$data=mysqli_fetch_array($query);
?>
<!doctype html>
<html lang="en">
 <head>
  <title>Edit Kecamatan</title>
 </head>
 <body>
  <form method="post" action="updatekecamatan.php">
	<table>
	<tr>
		<td>Kode Kabupaten</td>
		<td>:</td>
		<td><input type="text" name="kode_kab" value="<?php echo $data[0]; ?>"></td>
	</tr>
	<tr>
		<td>Kode Kecamatan</td>
		<td>:</td>
		<td><input type="text" name="kode_kec" value="<?php echo $data[1]; ?>"></td>
	</tr>

	<tr>
		<td>Nama Kecamatan</td>
		<td>:</td>
		<td><input type="text" name="nama_kec" value="<?php echo $data[2]; ?>"></td>
	</tr>
	<tr>
		<td><input type="submit" value="Update"></td>
		<td><input type="reset" value="Batal"></td>
		<td></td>
	</tr>
	</table>
  </form>
  <strong>Data Kecamatan</strong>
  <table width=40% border=2 cellspacing=0 cellpadding=0>
  <tr>
	<td align=center>Kode Kabupaten</td>
	<td align=center>Kode Kecamatan</td>
	<td align=center>Nama Kecamatan</td>
	<td align=center>Aksi</td>
  </tr>
  <?php
  include "koneksi.php";
  $sql="select * from kecamatan";
  $query=mysqli_query($conn,$sql);
  while($data=mysqli_fetch_array($query)){
  echo"<tr>";
	echo"<td align=center>$data[0]</td>";
	echo"<td align=center>$data[1]</td>";
	echo"<td align=center>$data[2]</td>";
	echo"<td align=center><a href=./editkecamatan.php?id=$data[0]>Edit</a>|<a href=./delkecamatan.php?id=$data[0]>Hapus</a></td>";
  echo"</tr>";
  }
  ?>
  </table>
  </body>
  </html>
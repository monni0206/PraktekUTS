<?php
include "koneksi.php";
$id=$_GET["id"];
$sql="select * from kabupaten where kode_kab='$id'";
$query=mysqli_query($conn,$sql);
$data=mysqli_fetch_array($query);
?>
<!doctype html>
<html lang="en">
 <head>
  <title>Edit Kabupaten</title>
 </head>
 <body>
  <form method="post" action="updatekabupaten.php">
	<table>
	<tr>
		<td>Kode Provinsi</td>
		<td>:</td>
		<td><input type="text" name="kode_provinsi" value="<?php echo $data[0]; ?>"></td>
	</tr>
	<tr>
		<td>Kode Kabupaten</td>
		<td>:</td>
		<td><input type="text" name="kode_kab" value="<?php echo $data[1]; ?>"></td>
	</tr>

	<tr>
		<td>Nama Kabupaten</td>
		<td>:</td>
		<td><input type="text" name="nama_kab" value="<?php echo $data[2]; ?>"></td>
	</tr>
	<tr>
		<td><input type="submit" value="Update"></td>
		<td><input type="reset" value="Batal"></td>
		<td></td>
	</tr>
	</table>
  </form>
  <strong>Data Kabupaten</strong>
  <table width=30% border=2 cellspacing=0 cellpadding=0>
  <tr>
	<td align=center>Kode Provinsi</td>
	<td align=center>Kode Kabupaten</td>
	<td align=center>Nama Kabupaten</td>
	<td align=center>Aksi</td>
  </tr>
  <?php
  include "koneksi.php";
  $sql="select * from kabupaten";
  $query=mysqli_query($conn,$sql);
  while($data=mysqli_fetch_array($query)){
  echo"<tr>";
	echo"<td align=center>$data[0]</td>";
	echo"<td align=center>$data[1]</td>";
	echo"<td align=center>$data[2]</td>";
	echo"<td align=center><a href=./editkabupaten.php?id=$data[0]>Edit</a> | <a href=./delkabupaten.php?id=$data[0]>Hapus</a></td>";
  echo"</tr>";
  }
  ?>
  </table>
  </body>
  </html>
<!doctype html>
<html lang="en">
 <head>
 	<h2>Input Data Provinsi</h2>
  <title>Data Provinsi</title>
  <script>
		function hanyaAngka(evt) {
		  var charCode = (evt.which) ? evt.which : event.keyCode
		   if (charCode > 31 && (charCode < 48 || charCode > 57)) {
		   		alert("Masukan data berupa angka!")
		   		return false;
		   } else {
		   		return true;
		   }
		}
	</script>
 </head>
 <body>
  <form method="post" action="simpanprovinsi.php">
	<table>
	<tr>
		<td>Kode Provinsi</td>
		<td>:</td>
		<td><input type="text" name="kode_provinsi" onkeypress="return hanyaAngka(event)"></td>
	</tr>
	<tr>
		<td>Nama Provinsi</td>
		<td>:</td>
		<td><input type="text" name="nama_provinsi"></td>
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
  $sql="select * from Provinsi";
  $query=mysqli_query($conn,$sql);
  while($data=mysqli_fetch_array($query)){
  echo"<tr>";
	echo"<td align=center>$data[0]</td>";
	echo"<td align=center>$data[1]</td>";
	echo"<td align=center><a href=./editprovinsi.php?id=$data[0]>Edit</a>  |  <a href=./delprovinsi.php?id=$data[0]>Hapus</a></td>";
  echo"</tr>";
  }
  ?>
  </table>
 </body>
</html>

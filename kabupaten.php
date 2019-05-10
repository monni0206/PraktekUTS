<!doctype html>
<html lang="en">
 <head>
 <h2>Input Data Kabupaten</h2>
  <title>Data Kabupaten</title>
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
  <form method="post" action="simpankabupaten.php">
	<table>
	<tr>
		<td>Kode Provinsi</td>
		<td>:</td>
		<td><select name="kode_provinsi">
			<?php
			include "koneksi.php";
			$sql="select * from provinsi";
			$query=mysqli_query($conn,$sql);
			while($data=mysqli_fetch_array($query)){
			echo "<option value='$data[0]'>$data[1]</option>";
			}
			?>
		</select> 
		
		</td>
	</tr>
	<tr>
		<td>Kode Kabupaten</td>
		<td>:</td>
		<td><input type="text" name="kode_kab" onkeypress="return hanyaAngka(event)"></td>
	</tr>
	<tr>
		<td>Nama Kabupaten</td>
		<td>:</td>
		<td><input type="text" name="nama_kab"></td>
	</tr>
	
	<tr>
		<td><input type="reset" value="Batal"></td>
		<td></td>
		<td><input type="submit" value="Simpan"></td>
	</tr>
	</table>
  </form>
  <strong>Data Kabupaten</strong>
  <table width=40% border=2 cellspacing=0 cellpadding=0>
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
	echo"<td align=center><a href=./editkabupaten.php?id=$data[1]>Edit</a> | <a href=./delkabupaten.php?id=$data[1]>Hapus</a></td>";
  echo"</tr>";
  }
  ?>
  </table>
 </body>
</html>

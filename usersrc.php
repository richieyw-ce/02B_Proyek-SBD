<?php
include "header.php";
?>
<center>
<form action="usersrc.php" method="get">
<table border="0" width="62%">
<td><b>Cari user<br>
<label>Cari :</label>
<input type="text" name="cari">
<select name="tipe">
  <option value="id">ID Pelanggan</option>
  <option value="nama">Nama Pelanggan</option>
  <option value="alamat">Alamat</option>
  <option value="cc">No. Kartu Kredit</option>
  <option value="telp">No. Telp</option>
  <option value="gopay">No. Gopay</option>
  <option value="email">Email</option>
</select>
<input type="submit" value="Cari">
</table>
</form>
</center>

<?php 
if(isset($_GET['cari'])){
	$cari = $_GET['cari'];
	echo "<b>Hasil pencarian : ".$cari."</b>";
}
?>
 
<table border="1">
	<tr>
		<th>ID Pelanggan</th>
		<th>Nama Pelanggan</th>
                <th>Alamat</th>
                <th>No. Kartu Kredit</th>`
                <th>No. Telp</th>
                <th>No. Gopay</th>
                <th>Email</th>
	</tr>
	<?php 
	if(isset($_GET['cari'])&&$_GET['tipe']=="id"){
	$cari = $_GET['cari'];
	$data = "SELECT * FROM customer WHERE id like '%".$cari."%'";				
	}elseif(isset($_GET['cari'])&&$_GET['tipe']=="nama"){
	$cari = $_GET['cari'];
	$data = "SELECT * FROM customer WHERE nama_pelanggan like '%".$cari."%'";				
	}elseif(isset($_GET['cari'])&& $_GET['tipe']=="alamat"){
	$cari = $_GET['cari'];
	$data = "SELECT * FROM customer WHERE alamat like '%".$cari."%'";				
	}elseif(isset($_GET['cari'])&& $_GET['tipe']=="cc"){
	$cari = $_GET['cari'];
	$data = "SELECT * FROM customer WHERE no_credit_card like '%".$cari."%'";				
	}elseif(isset($_GET['cari'])&& $_GET['tipe']=="telp"){
	$cari = $_GET['cari'];
	$data = "SELECT * FROM customer WHERE no_telp like '%".$cari."%'";				
	}elseif(isset($_GET['cari'])&& $_GET['tipe']=="gopay"){
	$cari = $_GET['cari'];
	$data = "SELECT * FROM customer WHERE no_gopay like '%".$cari."%'";				
	}elseif(isset($_GET['cari'])&& $_GET['tipe']=="email"){
	$cari = $_GET['cari'];
	$data = "SELECT * FROM customer WHERE email like '%".$cari."%'";				
	}else{
	$data = "select * from customer";		
	}
        $results = $conn->query($data);
	
	while($row = $results->fetch_assoc()) {
        echo "<tr><td>".$row["id"]."</td><td>".$row["nama_pelanggan"]."</td><td>".$row["alamat"]."</td><td>".$row["no_credit_card"]."</td><td>".$row["no_telp"]."</td><td>".$row["no_gopay"]."</td><td>".$row["email"]."</td></tr>";
        }
	?>	
</table>
<?php
include"footer.php";
?>



<?php
include "header.php";
?>
<center>
<form action="gdsrc.php" method="get">
<table border="0" width="62%">
<td><b>Cari barang<br>
<label>Cari :</label>
<input type="text" name="cari">
<select name="tipe">
  <option value="id_barang">ID Barang</option>
  <option value="id">ID Penjual</option>
  <option value="barang">Barang</option>
  <option value="berat">Berat</option>
  <option value="harga">Harga</option>
  
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
		<th>ID Barang</th>
		<th>ID Penjual</th>
                <th>Barang</th>
                <th>Berat</th>`
                <th>Harga</th>
                
	</tr>
	<?php 
	if(isset($_GET['cari'])&&$_GET['tipe']=="id"){
	$cari = $_GET['cari'];
	$data = "SELECT * FROM barang WHERE id like '%".$cari."%'";				
	}elseif(isset($_GET['cari'])&&$_GET['tipe']=="id_barang"){
	$cari = $_GET['cari'];
	$data = "SELECT * FROM barang WHERE id_barang like '%".$cari."%'";				
	}elseif(isset($_GET['cari'])&& $_GET['tipe']=="barang"){
	$cari = $_GET['cari'];
	$data = "SELECT * FROM barang WHERE jenis_barang like '%".$cari."%'";				
	}elseif(isset($_GET['cari'])&& $_GET['tipe']=="berat"){
	$cari = $_GET['cari'];
	$data = "SELECT * FROM barang WHERE berat like '%".$cari."%'";				
	}elseif(isset($_GET['cari'])&& $_GET['tipe']=="harga"){
	$cari = $_GET['cari'];
	$data = "SELECT * FROM barang WHERE harga like '%".$cari."%'";				
	}else{
	$data = "select * from barang";		
	}
        $results = $conn->query($data);
	
	while($row = $results->fetch_assoc()) {
        echo "<tr><td>".$row["id_barang"]."</td><td>".$row["id"]."</td><td>".$row["jenis_barang"]."</td><td>".$row["berat"]."</td><td>".$row["harga"]."</td></tr>";
        }
	?>	
</table>
<?php
include"footer.php";
?>



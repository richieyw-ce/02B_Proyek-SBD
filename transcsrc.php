<?php
include "header.php";
?>
<center>
<form action="transcsrc.php" method="get">
<table border="0" width="62%">
<td><b>Cari transaksi<br>
<label>Cari :</label>
<input type="text" name="cari">
<select name="tipe">
  <option value="no_transaksi">No. Transaksi</option>
  <option value="id">ID Pembeli</option>
  <option value="id_barang">ID Barang</option>
  <option value="jumlah_beli">Jumlah Barang</option>
  <option value="kurir">Nama Kurir</option>
  <option value="ongkir">Ongkos Kirim</option>
  <option value="total">Total Harga</option>
  <option value="tgl">Tanggal Transaksi</option>
  
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
		<th>No. Transaksi</th>
		<th>ID Pembeli</th>
                <th>ID Barang</th>
                <th>Jumlah Barang</th>`
                <th>Nama Kurir</th>
                <th>Ongkos Kirim</th>
                <th>Total Harga</th>`
                <th>Tanggal Transaksi</th>
	</tr>
	<?php 
	if(isset($_GET['cari'])&&$_GET['tipe']=="no_transaksi"){
	$cari = $_GET['cari'];
	$data = "SELECT * FROM transaksi WHERE no_transaksi like '%".$cari."%'";				
	}elseif(isset($_GET['cari'])&&$_GET['tipe']=="id"){
	$cari = $_GET['cari'];
	$data = "SELECT * FROM transaksi WHERE id like '%".$cari."%'";				
	}elseif(isset($_GET['cari'])&& $_GET['tipe']=="id_barang"){
	$cari = $_GET['cari'];
	$data = "SELECT * FROM transaksi WHERE id_barang like '%".$cari."%'";				
	}elseif(isset($_GET['cari'])&& $_GET['tipe']=="jumlah_beli"){
	$cari = $_GET['cari'];
	$data = "SELECT * FROM transaksi WHERE jumlah_beli like '%".$cari."%'";				
	}elseif(isset($_GET['cari'])&& $_GET['tipe']=="kurir"){
	$cari = $_GET['cari'];
	$data = "SELECT * FROM transaksi WHERE nama_kurir like '%".$cari."%'";				
	}elseif(isset($_GET['cari'])&& $_GET['tipe']=="ongkir"){
	$cari = $_GET['cari'];
	$data = "SELECT * FROM transaksi WHERE ongkir like '%".$cari."%'";				
	}elseif(isset($_GET['cari'])&& $_GET['tipe']=="	total"){
	$cari = $_GET['cari'];
	$data = "SELECT * FROM transaksi WHERE 	total_harga like '%".$cari."%'";				
	}elseif(isset($_GET['cari'])&& $_GET['tipe']=="tgl"){
	$cari = $_GET['cari'];
	$data = "SELECT * FROM transaksi WHERE tgl_transaksi like '%".$cari."%'";				
	}else{
	$data = "select * from transaksi";		
	}
        $results = $conn->query($data);
	
	while($row = $results->fetch_assoc()) {
        echo "<tr><td>".$row["no_transaki"]."</td><td>".$row["id"]."</td><td>".$row["id_barang"]."</td><td>".$row["jumlah_beli"]."</td><td>".$row["nama_kurir"]."</td><td>".$row["ongkir"]."</td><td>".$row["total_harga"]."</td><td>".$row["tgl_transaksi"]."</td></tr>";
        }
	?>	
</table>
<?php
include"footer.php";
?>



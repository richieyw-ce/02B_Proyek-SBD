<?php
include "header.php";
?>
<center>
<form action="transcadd.php" method="get">
<table border="0" width="62%">
<td><b>Konfirmasi ID Barang<br>
<label>Masukkan ID:</label>
<input type="text" name="cari">
<input type="submit" value="Cari">
</table>
</form>
</center>
<table border="1">
	<tr>
		<th>ID Barang</th>
		<th>ID Penjual</th>
                <th>Barang</th>
                <th>Berat</th>`
                <th>Harga</th>
                
	</tr>
	<?php 
	if(isset($_GET['cari'])){
	$cari = $_GET['cari'];
	$data = "SELECT * FROM barang WHERE id_barang like '%".$cari."%' limit 1";				
	}else{
        $data = "SELECT * FROM barang WHERE id_barang limit 0";
        }
        $results = $conn->query($data);
	
	while($row = $results->fetch_assoc()) {
        echo "<tr><td>".$row["id_barang"]."</td><td>".$row["id"]."</td><td>".$row["jenis_barang"]."</td><td>".$row["berat"]."</td><td>".$row["harga"]."</td></tr>";
        }
        
	?>	
</table>
<center>
<form action='transcaddd.php' method=post>
<table border="0" width="62%">
<td><b>Registrasi Pembelian<br>
<tr> <td>ID pembeli<td> :</td></td>
<td><input type="text" name="id" size="12" maxlength="10"></td></tr>
<tr><td >ID Barang <td> :</td></td>
<td><input type="text" name="id_barang" size="12" maxlength="10"></td></tr>
<tr> <td>Jumlah Beli<td> :</td></td>
<td><input type="text" name="jumlah_beli" size="12" maxlength="10"></td></tr>
<tr> <td>Nama Kurir<td> :</td></td>
<td><input type="text" name="nama_kurir" size="33" maxlength="31"></td></tr>
<tr> <td>Ongkos Kirim<td> :</td></td>
<td><input type="text" name="ongkir" size="22" maxlength="20"></td></tr>
<tr> <td>Total Harga<td> :</td></td>
<td><input type="text" name="jumlah_harga" size="22" maxlength="20"></td></tr>
<td clospan="3"><input type="submit" value="Simpan">
<input type="hidden" name="act" value="add">
<input type="reset" value="Batal"></td>
</table>
</form>
</center>
<?php
include"footer.php";
?>



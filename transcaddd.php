<?php
include "header.php";
if ($_POST['act']=="add")
{
$id= $_POST['id'];
$id_barang=$_POST['id_barang'];
$jumlah_beli=$_POST['jumlah_beli'];
$nama_kurir=$_POST['nama_kurir'];
$ongkir=$_POST['ongkir'];
$jumlah_harga=$_POST['jumlah_harga'];

$query="INSERT INTO transaksi(no_transaksi,id,id_barang,jumlah_beli,nama_kurir,ongkir,total_harga) VALUES(NULL,'$id','$id_barang','$jumlah_beli','$nama_kurir','$ongkir','$jumlah_harga');";
$hasil = mysqli_query($conn, $query);

echo"<script>alert('Transaksi telah dilakukan!!');</script>";
}
include "footer.php";
?>

<?php
include "header.php";
if ($_POST['act']=="add")
{
$id= $_POST['id'];
$barang=$_POST['barang'];
$berat=$_POST['berat'];
$harga=$_POST['harga'];

$query="INSERT INTO barang(id_barang,id,jenis_barang,berat,harga) VALUES(NULL,'$id','$barang','$berat','$harga');";
$hasil = mysqli_query($conn, $query);

echo"<script>alert('Barang siap dijual!');</script>";
}
include "footer.php";
?>

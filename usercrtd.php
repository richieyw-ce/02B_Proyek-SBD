<?php
include "header.php";
if ($_POST['act']=="add")
{
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$email=$_POST['email'];
$telp=$_POST['telp'];
$gopay=$_POST['gopay'];
$cc=$_POST['cc'];
//$password=(md5$POST['password']);
//$password=md5($POST['password']);

$query="INSERT INTO customer(id,nama_pelanggan,alamat,email,no_telp,no_gopay,no_credit_card) VALUES(NULL,'$nama','$alamat','$email','$telp','$gopay','$cc');";
$hasil = mysqli_query($conn, $query);

echo"<script>alert('Registrasi berhasil!');</script>";
}
include "footer.php";
?>

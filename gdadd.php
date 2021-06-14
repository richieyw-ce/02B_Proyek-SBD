<?php
include "header.php";
?>
<center>
<form action='gdaddd.php' method=post>
<table border="0" width="62%">
<td><b>Registrasi Barang<br>
<tr> <td>ID penjual<td> :</td></td>
<td><input type="text" name="id" size="10" maxlength="12"></td></tr>
<tr><td >Barang <td> :</td></td>
<td><input type="text" name="barang" size="22" maxlength="20"></td></tr>
<tr> <td>Berat (Kg)<td> :</td></td>
<td><input type="text" name="berat" size="33" maxlength="12"></td></tr>
<tr> <td>Harga<td> :</td></td>
<td><input type="text" name="harga" size="33" maxlength="12"></td></tr>
<td clospan="3"><input type="submit" value="Simpan">
<input type="hidden" name="act" value="add">
<input type="reset" value="Batal"></td>
</table>
</form>
</center>
<?php
include"footer.php";
?>



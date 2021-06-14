<?php
include "header.php";
?>
<center>
<form action='usercrtd.php' method=post>
<table border="0" width="62%">
<td><b>Registrasi Anggota<br>
<tr><td >Nama Lengkap <td> :</td></td>
<td><input type="text" name="nama" size="33" maxlength="31"></td></tr>
<tr><td>Alamat<td> :</td></td>
<td><textarea name="alamat" cols="35" ></textarea></td></tr>
<tr><td>Email<td> :</td> </td>
<td><input type="text" name="email" size="33" maxlength="30"></td></tr>
<tr> <td>No. Telp<td> :</td></td>
<td><input type="text" name="telp" size="33" maxlength="12"></td></tr>
<tr> <td>No. Gopay<td> :</td></td>
<td><input type="text" name="gopay" size="33" maxlength="16"></td></tr>
<tr> <td>No. Kartu Kredit<td> :</td></td>
<td><input type="text" name="cc" size="33" maxlength="16"></td></tr>
<td clospan="3"><input type="submit" value="Simpan">
<input type="hidden" name="act" value="add">
<input type="reset" value="Batal"></td>
</table>
</form>
</center>
<?php
include"footer.php";
?>



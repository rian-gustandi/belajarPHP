<html>
<body>

<form action="output.php" method="POST" name="input">
Kota :
<select name="provinsi">
<option value="-------">-------</option>
<option value="Bandung">Bandung</option>
<option value="Jakarta">Jakarta</option>
<option value="Surabaya">Surabaya</option>
<option value="Bali">Bali</option>
</select>
<input type="submit" name="Pilih" value="Pilih">
</form>

</body>
</html>

<?php
if(isset($_POST['Pilih'])){
	$film = $_POST['provinsi'];
	echo "Provinsi : <font color=red><b>$film</b></font>";
}
?>
<html>
<body>

<h2>Toko Alat Tulis Amalia</h2>
<form action="alat_tulis.php" method="post" name="input">
<select name="barangpesanan">
<option>Pensil</option>
<option>Buku Tulis</option>
<option>Ballpoint</option>
</select>
Jumlah pesanan: <input name="jumlah" type="text">
<input type="submit" value="Submit" name="submit">
</form>

</body>
</html>


<?php
if(isset($_POST['submit'])){
	$jumlah = $_POST['jumlah'];
	$barangpesanan = $_POST['barangpesanan'];
	echo "Anda memesan : $jumlah $barangpesanan <br>";
	echo "Terima kasih atas kesediaan Anda memesan barang dari kami!";
}
?>
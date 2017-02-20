<?php
$harga_sikat = 1500;
$jumlah_sikat = 10;
echo "<table border='1' align='center'>";
echo "<tr><td><b>Jumlah Sikat</b></td>";
echo "<td><b>Harga</b></tr></td>";
while ( $jumlah_sikat <= 100 )
{
 echo "<tr><td>";
 echo $jumlah_sikat;
 echo "</td><td>";
 echo "Rp. ".$harga_sikat * $jumlah_sikat;
 echo "</td></tr>";
 $jumlah_sikat = $jumlah_sikat + 10;
}
echo "</table>";
?>
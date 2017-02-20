<html>
<head>
<title>Menghitung Discount dengan PHP</title>
<style>
body{padding:0;margin:0;font-family:arial;font-size:12px;}
#main-wrapper{border:3px double #c3d9ff;padding:5px;width:450px;margin:20px auto 0;}
#main{text-align:left;padding:5px;background:#e8eefa;}
#kotak{border:1px solid #c3d9ff;background:#fff;width:190px;padding:3px 2px;}
#tombol{border:1px solid #b3ccf7;background:#c3d9ff;cursor:pointer;padding:2px;}
#main ul{list-style:none;}
#main li{list-style:square;border-bottom:1px solid #c3d9ff;padding:2px;}
h1{font-size:18px;font-weight:bold;padding:10px 0;}
#biodata{font-size:11px;padding:5px 0 0;color:#999;text-align:center;}
red{font-weight:bold;color:#f00;}
</style>
</head>
<body>
<div id="main-wrapper">
<div id="main">
<h1>Menghitung Discount dengan PHP</h1>
<form method="POST" action="">
Jumlah Bayar : Rp. <input type="text" name="harga" value="........." onblur="if 
(this.value == '') {this.value = '.........';}" onfocus="if (this.value == 
'.........') {this.value = '';}" id="kotak"/>
<label>
<input type="submit" name="Submit" value="Hitung Diskon" id="tombol">
</label>
</form>
<?php error_reporting (E_ALL ^ E_NOTICE); ?>
<?php
//Hak Cipta © 2012 IdBlogDesign. Hak Cipta dilindungi Undang-Undang
$harga_utama=$_POST['harga'];
$diskon=0;
if ($harga_utama>=500000)
$diskon=(0.5*$harga_utama);
else
if ($harga_utama>=100000)
$diskon=(0.1*$harga_utama);
else
if ($harga_utama>=50000)
$diskon=(0.05*$harga_utama);
print ("<ul><li>Jumlah Bayar = Rp. $harga_utama</li>");
printf ("<li>Diskon = Rp. $diskon</li>");
$pembayaran=$harga_utama-$diskon;
printf ("<li><red>Total Bayar = Rp. $pembayaran</red></li></ul>");
?>
</div>
<div id="biodata">
Hak Cipta © 2012 IdBlogDesign. Hak Cipta dilindungi Undang-Undang
</div>
</div>
</body>
</html>

<?php 

//variabel User //
$nama = "Mikhail Tal";
$usia = 33;
$negara = "latvia";
echo $nama;
echo "<br>";
echo "Nama saya ".$nama.",Usia ".$usia." dari ".$negara;
//variabel Sistem //
echo "<br>";
echo "Document Root: ".$_SERVER["DOCUMENT_ROOT"]."<br>";
echo "Nama File: ".$_SERVER["PHP_SELF"];

echo "<br>";

//konstan//
define("PHI",3.14);
$radius = 7;
$luas = PHI * $radius * $radius;
echo $luas; 
 

?>
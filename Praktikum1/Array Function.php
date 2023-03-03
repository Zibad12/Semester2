<?php 

$Mahasiswa = ["Yakub Qamar Ad-din Dibiazah", "Khalid Kashmiri", "Khidr Karawita", "Ismail
Ahmad Danabawi", "Usman Abdel Jalil Sisha", "Muhammad Sumbul"];

// Sort //
sort($Mahasiswa);
//Mencetak Data//
foreach($Mahasiswa as $M){
    echo $M . "<br>";
}
echo "<br>";
// Arsort //
arsort($Mahasiswa);
foreach($Mahasiswa as $M){
    echo $M . "<br>";
}
 echo "<br>";
// Push //
array_push($Mahasiswa,"Udin");
foreach($Mahasiswa as $M){
    echo $M . "<br>";
}    
echo "<br>";
// Unshift //
array_unshift($Mahasiswa, "Nidu");
foreach($Mahasiswa as $M){
    echo $M . "<br>";
}

?>

<?php 

// Buat Array //
$presiden = ["Soekarno","Soeharto","Habibie","Gus Dur","Megawati"];

// Mengakses Data //
echo "presiden kedua adalah ".$presiden[1];
echo "<br>";

//Menambahkan Data //
$presiden[] = "Prabowo";

//Mencetak Data//
foreach($presiden as $p){
    echo $p . "<br>";
}
echo ("<br>");
//Menghapus Data //
unset($presiden[4]);

//Mencetak Data//
foreach($presiden as $p){
    echo $p . "<br>";
}
//Mengubah Data //
$presiden[3] = "Abdurrahman Wahid";
echo "<br>";

//Mencetak Data//
foreach($presiden as $p){
    echo $p . "<br>";
}
echo "<br>"; 

?>
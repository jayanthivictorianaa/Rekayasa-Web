<?php
$mahasiswa = array(
    "nama" => "Jayanthi Victoriana",
    "nim" => "230102026",
    "jurusan" => "Teknologi Informatika",
    "semester" => 5 
);

$jsonData = json_encode($mahasiswa);

echo "Hasil JSON Encode:<br>";
echo $jsonData;
?>

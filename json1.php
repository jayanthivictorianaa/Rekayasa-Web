<?php

$jsonString = '{"nama":"Jayanthi Victoriana","nim":"230102026","jurusan":"Teknologi Informasi","semester":3}';


$obj = json_decode($jsonString);


$arr = json_decode($jsonString, true);


echo "Akses nilai dari PHP Object:<br>";
echo "Nama: " . $obj->nama . "<br>";
echo "NIM: " . $obj->nim . "<br><br>";

echo "Akses nilai dari PHP Array:<br>";
echo "Nama: " . $arr['nama'] . "<br>";
echo "NIM: " . $arr['nim'] . "<br>";
?>

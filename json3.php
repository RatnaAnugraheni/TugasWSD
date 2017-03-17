<?php
$json_data=file_get_contents("data2.json");
$obj = json_decode($json_data);
echo "NIM : "; echo $obj->nim;
echo "<br>";
echo "Nama : "; echo $obj->nama;
echo "<br>";
echo "Email : "; echo $obj->email;
echo "<br>";
echo "No_hp : "; echo $obj->no_hp;
echo "<br>";
echo "mata_kuliah1: ";echo $obj->mata_kuliah[0];
echo "<br>";
echo "mata_kuliah2: ";echo $obj->mata_kuliah[1];
echo "<br>";
echo "mata_kuliah3: ";echo $obj->mata_kuliah[2];
echo "<br>";
echo "mata_kuliah4: ";echo $obj->mata_kuliah[3];
?>
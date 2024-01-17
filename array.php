<?php
//contoh array
$cars = array("ferrari", "lamborgini aventador", "audi");
$negara = ["singapura", "indonesia", "jepang"];
$kota = array("singaparna","indramayu","jepara");

//menampilkan array
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . "." ;
echo"<br>";
var_dump($negara);
echo"<br>";
print_r($kota);

//menambah array
var_dump($kota);
$kota[] = "bogor";
echo"<br>";
var_dump($kota);
$kota[4] = "jayapura";
echo"<br>";
var_dump($kota);
?>
<?php
$height = [
	"andy" => "176",
	"barry" => "165",
	"charlie" => "170",
    "david" => "180",
    "ethan" => "172",
    "frank" => "168",
    "george" => "175",
    "harry" => "182",
];
$weight = [
    "andy" => "70",
    "barry" => "65",
    "charlie" => "75",
];
var_dump($height);
echo "<br>";
echo "nilai dengan index terakhir : " . $height["harry"];
echo "<br>";
echo "<br>";

unset($height["barry"]);
var_dump($height);
echo "<br>";
echo "nilai dengan index terakhir setelah di hapus : " . $height["harry"];

echo "<br>";
echo "<br>";

var_dump($weight);
echo "<br>";
echo "data kedua : " . $weight["barry"];
?>
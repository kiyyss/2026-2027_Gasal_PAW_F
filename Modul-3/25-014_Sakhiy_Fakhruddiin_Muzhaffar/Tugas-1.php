<?php
$fruits =  array("avocado", "blueberry", "cherry", "durian", "elderberry", "fig", "grape", "honeydew");
var_dump($fruits);
echo "<br>";
echo "Nilai dengan nilai index tertinggi : " . $fruits[7];

echo "<br>";

echo "Data " . $fruits[1]. " di hapus";
echo "<br>";
unset($fruits[1]);
var_dump($fruits);
echo "<br>";
echo "Nilai dengan nilai index tertinggi : " . $fruits[7];
?>
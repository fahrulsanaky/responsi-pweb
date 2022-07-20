<?php  

include ("form.html");
$nama = $_POST["nama"];
$nim = $_POST["nim"];
$prodi = $_POST["prodi"];

$fileku = fopen("data.txt", "a");
$data = $nama.";".$nim.";".$prodi."\n";
fwrite($fileku, $data);
fclose($fileku);
echo "<pre>";
include ("data.txt");
echo "</pre>";

?>
<?php
include "baglan.php";
$id = $_POST["silid"];

$sth = $db -> prepare("Delete from rehber Where ID = ?");
$sth -> execute(array($id));
echo "İslem Basarili";
header("refresh:1;url=../sil.php")



?>
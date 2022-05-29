<?php
// error_reporting(1);
include "baglan.php";


$Ad = $_POST["ad"];
$Soyad = $_POST["soyad"];
$Telefon = $_POST["telefon"];
$Adres = $_POST["adres"];

$sth = $db -> prepare("Insert Into Rehber(ad, soyad, telefon, adres) Values(?,?,?,?)");
$sth -> execute(array($Ad,$Soyad,$Telefon,$Adres));
echo "İslem Basarili";
header("refresh:1;url=../index.php")
?>
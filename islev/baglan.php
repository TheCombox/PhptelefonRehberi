<?php

use function PHPSTORM_META\type;

$dns = 'mysql:dbname=rehber;host=127.0.0.1';
$user = 'root';
$password = '';
try{
    $db = new PDO($dns, $user,$password);
    // echo "baglanti tamam";
}catch(PDOException $e)
{
    echo 'Baglanti saglanmadi'. $e->getMessage();
}

?>
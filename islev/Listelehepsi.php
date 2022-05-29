<!doctype html>
<html>
    <head>
        <title>Kullanıcı Kayıt Formu</title>
        <meta charset="utf-8" />
        <style type="text/css">
            body{
                background:#76b852;
                font-size:10px;
                font-family:Trebuchet MS;
            }
            #kayitFormu{
                
                border-radius:10px;
                background:#ffffff;
                width:360px;
                margin:auto;
                margin-top:20px;
                padding:15px;
                font-size: 20px;
            }
            input, button
            {
                border-radius:5px;
                border:none;
                width:300px;
                height:50px;
                margin:20px 0px 20px 0px;
                background:rgba(240,240,240,.5);
                padding-left:15px;
                font-style:italic;
                
            }
            
            .btn{
                background:#76b852;
                color:white;
            }
            .btn2{
                background:#242F3F;
                color:white;
                text-align: center;
            
            }
            h3{
                color:#333;
                text-transform:uppercase;
                font-size:20px;
            }
            
        </style>
    </head>
    <body>
    <input class="btn2" type="button" value="Anasayfa" onclick="location='../index.php'">
    <input class="btn2" type="button" value="Sil" onclick="location='../sil.php'">

        <div id="kayitFormu">
        <?php
include "baglan.php";

$sth = $db -> prepare("Select * From rehber");
$sth -> execute();
$result = $sth -> fetchall(PDO::FETCH_ASSOC);
foreach ($result as $yaz){
        echo "Id:";
         echo $yaz["ID"]."<br />";
         echo "Ad:";
         echo $yaz["ad"]."<br />";
         echo "Soyad:";
         echo $yaz["soyad"]."<br />";
         echo "Telefon:";
         echo $yaz["Telefon"]."<br />";
         echo "Adres:";
         echo $yaz["Adres"]."<br /><br />";

}



?>
        </div>

    
    
    </body>
</html>
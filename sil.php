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
                text-align:center;
                font-size: 19px;
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
                text-align: center;}
            .btn3{
                background:#084A42;
                color:white;
                text-align: center;}
            h3{
                color:#333;
                text-transform:uppercase;
                font-size:20px;
            }
            
        </style>
    </head>
    <body>
        <div id="kayitFormu">
        <form action="/islev/sil.php" method="post">
    <a >Silecenek kişinin İd'si:</a>
    <input type="text" name="silid" id="" placeholder="Id'yi giriniz."><br>
    <input class="btn" type="submit" value="Sil"><br>
    <input class="btn2" type="button" value="Anasayfa" onclick="location='index.php'">

    <a>Not:Silmek istediğiniz kişinin id'sini bilmiyorsanız lütfen kişi listeleme ekranından bulunuz.</a><br>
    <input class="btn3" type="button" value="Kişi Listele" onclick="location='listesec.php'">

    




    </form>
            
        </div>
    
    
    </body>
</html>
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
                text-align: center;
                
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
            select {
  appearance: none;
  background-color:#76b852;
  text-align: center;
  margin: 0;
  width: 50%;
  font-family: inherit;
  font-size: inherit;
  cursor: inherit;
  line-height: inherit;
  border-radius:  40px;
  font-size: 20px;
}
            
        </style>
    </head>
    <body>
        <div id="kayitFormu">
        <form action="/islev/VeriListele.php" method="post">

<select name="liste" id="liste">
<option value="ad">Ad</option>
<option value="soyad">Soyad</option>
<option value="Telefon">Telefon</option>
</select>
<input type="text" name="veri" placeholder="Aramak istediğiniz veriyi giriniz.">
<input class="btn" type="submit" value="Bul">
<input class="btn2" type="button" value="Anasayfa" onclick="location='index.php'">



</form>
            
        </div>
    
    
    </body>
</html>
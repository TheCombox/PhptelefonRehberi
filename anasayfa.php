<!DOCTYPE html>
<html lang="en">
<head>
    <script>

function f() {
  document.getElementsByClassName('dropdown')[0].classList.toggle('down');
  document.getElementsByClassName('arrow')[0].classList.toggle('gone');
  if (document.getElementsByClassName('dropdown')[0].classList.contains('down')) {
    setTimeout(function() {
      document.getElementsByClassName('dropdown')[0].style.overflow = 'visible'
    }, 500)
  } else {
    document.getElementsByClassName('dropdown')[0].style.overflow = 'hidden'
  }
}
</script>
    <style type="text/css">

@import "https://fonts.googleapis.com/css?family=Montserrat";
body{background:#445978;font-family:'Montserrat',sans-serif}
.menu{width:260px;margin:60px auto 0;cursor:pointer}
.title{width:100%;box-sizing:border-box;background:#fff;padding:14px;border-radius:4px;position:relative;box-shadow:0 0 40px -10px #000;color:#505050}
span{float:right;font-size:18px!important}
.dropdown{width:100%;background:#fff;border-radius:4px;box-shadow:0 0 40px -10px #000;color:#505050;margin-top:24px;max-height:0;overflow:hidden;transition:all .5s}
.down{max-height:150px}
.arrow{border-left:10px solid transparent;border-right:10px solid transparent;border-bottom:10px solid #fff;position:absolute;right:20px;bottom:-24px;display:none}
.arrow.gone{display:block}
p{padding:15px 14px;margin:0;transition:all .1s}
p:hover{background:coral;-webkit-transform:scale(1.05);color:rgba(255,255,255,0.8);box-shadow:0 0 30px -10px #000}
        </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<div class="menu">
  <div class="title" onclick="f()">Telefon Rehberi <span class="fa fa-bars"></span>
    <div class="arrow"></div>
  </div>
  <div class="dropdown">
    <p ><a href="/listesec.php">Kişi listele <span class="fa fa-inbox"></span>
    <p><a href="/Kayit.php">Kişi Ekle <span class="fa fa-gear"></span>
    <p><a href="/sil.php">Kişi Sil <span class="fa fa-sign-out"></span>
    <a>
  </div>
</div>

</body>
</html>
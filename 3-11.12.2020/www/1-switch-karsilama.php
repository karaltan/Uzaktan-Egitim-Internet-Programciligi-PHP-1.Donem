<head>
  <meta charset="UTF-8">
</head>

<?php
// örnek:switch ile bay/bayana göre mesaj vermek

$kullanici="Büşra";
$cinsiyet="K";
 
switch ($cinsiyet){
   case "E": echo "Hoşgeldiniz $kullanici Bey"; break;
   case "K": echo "Hoşgeldiniz $kullanici Hanım"; break;
   default: echo "yanlış giriş";
}





?>
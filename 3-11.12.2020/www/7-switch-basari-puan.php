<head>
  <meta charset="UTF-8">
</head>

<?php
// örnek:100 üzerinden tanımlanmış bir notun 5 üzerinden karşılığını ekrana yazdıralım.
$notu=164;
 
switch ($notu){
   case $notu>=85 and $notu<=100: echo "5-Pekiyi"; break;
   case $notu>=70 and $notu<85: echo "4-İyi"; break;
   case $notu>=60 and $notu<70: echo "3-Orta"; break;
   case $notu>=50 and $notu<60: echo "2-Geçer"; break;
   case $notu>=0 and $notu<50: echo "1-Başarısız"; break;
   default: echo "Geçersiz giriş";
}




?>
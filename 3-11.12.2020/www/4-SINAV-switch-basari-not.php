<head>
  <meta charset="UTF-8">
</head>

<?php
/* Beş üzerinden tanımlı notun yazı karşılığını ekrana yazdıralım. */
$notu=2;
 
switch ($notu){
   case 0: echo "Başarısız"; break;
   case 1: echo "Zayıf"; break;
   case 2: echo "Geçer"; break;
   case 3: echo "Orta"; break;
   case 4: echo "İyi"; break;
   default: echo "Pekiyi";
}
?>
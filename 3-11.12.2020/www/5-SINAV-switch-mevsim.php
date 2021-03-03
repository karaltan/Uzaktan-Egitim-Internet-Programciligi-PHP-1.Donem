<head>
  <meta charset="UTF-8">
</head>

<?php
// örnek:Tanımlı olan mevsime göre ayları ekrana yazdıralım.
$mevsim="ilkbahar";
 
switch ($mevsim){
   case "ilkbahar": echo "Mart Nisan Mayıs"; break;
   case "yaz": echo "Haziran Temmuz Ağustos"; break;
   case "sonbahar": echo "Eylül Ekim Kasım"; break;
   default: echo "Aralık Ocak Şubat";
}


?>
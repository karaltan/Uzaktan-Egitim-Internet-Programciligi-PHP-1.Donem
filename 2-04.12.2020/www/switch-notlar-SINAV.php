<meta charset="UTF-8"> <!-- Türkçe karakter desteği -->

<?php

$notu=2; // 5lik sistemdeki notu girilir
 
switch ($notu){
   case 0: echo "Başarısız"; break;
   case 1: echo "Zayıf"; break;
   case 2: echo "Geçer"; break;
   case 3: echo "Orta"; break;
   case 4: echo "İyi"; break;
   case 5: echo "Pekiyi"; break;
   default: echo "Geçersiz Not";
}


?>
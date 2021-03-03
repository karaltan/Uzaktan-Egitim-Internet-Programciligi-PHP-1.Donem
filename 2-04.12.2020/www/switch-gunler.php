<meta charset="UTF-8"> <!-- Türkçe karakter desteği -->

<?php

$sayi=0;
 
switch ($sayi){
   case 0: echo ($sayi+1).". GÜN=PAZARTESİ"; break;
   case 1: echo ($sayi+1).". "SALI"; break;
   case 2: echo ($sayi+1).". "ÇARŞAMBA"; break;
   case 3: echo ($sayi+1).". "PERŞEMBE"; break;
   case 4: echo ($sayi+1).". "CUMA"; break;
   case 5: echo ($sayi+1).". "CUMARTESİ"; break;
   case 6: echo ($sayi+1).". "PAZAR"; break;
   default: echo "böyle bir gün yok.";
}

?>
<meta charset="UTF-8"> <!-- Türkçe karakter desteği -->

<?php

$sayi=23;
// tek sayı 2ye bölününce 1 kalanı verir
// çift sayı 2ye bölününce 0 kalanı verir
// 23%2->kalan 1 dir. o halde 23 tek sayıdır.

switch ($sayi%2){ // sayının 2'ye bölümünden kalan
   case 0: echo "Sayı çifttir."; break;
   case 1: echo "Sayı tektir."; break;
   default: "burası boşuna yazıldı :=)";
}

?>
<head>
  <meta charset="UTF-8">
</head>

<?php
// örnek: switch giriş

$sayi=2;
 
switch ($sayi)
{
   case 0: echo "Sayı 0'dır."; break; // if ($sayi==0) echo "Sayı 0'dır.";
   case 1: echo "Sayı 1'dir."; break; // if ($sayi==1) echo "Sayı 1'dır.";
   case 2: echo "Sayı 2'dir."; break; // if ($sayi==2) echo "Sayı 2'dır.";
   default: echo "Sayı 0,1 ve 2 değildir."; // else
}




?>
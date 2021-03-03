<head>
  <meta charset="UTF-8">
</head>

<?php
// örnek: switch ile tek çift

$sayi=23;
$kalan=$sayi%2;
// sayının 2'ye bölümünden kalan ya 0'dır ya 1'dir...

switch ($kalan)
{
   case 0: echo "Sayı çifttir."; break;
   // case 1: echo "Sayı tektir."; break;
   default: echo "Sayı tektir."; break;
}



?>
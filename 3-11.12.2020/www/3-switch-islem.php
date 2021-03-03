<head>
  <meta charset="UTF-8">
</head>

<?php
// örnek:switch ile 4 işlem
$islem="*";
$sayi1=16;
$sayi2=4;
 
switch ($islem){
   case "+": $sonuc=$sayi1+$sayi2; break;
   case "-": $sonuc=$sayi1-$sayi2; break;
   case "*": $sonuc=$sayi1*$sayi2; break;
   default: $sonuc=$sayi1/$sayi2;
}
 
echo "Sonuç=$sonuc";

?>
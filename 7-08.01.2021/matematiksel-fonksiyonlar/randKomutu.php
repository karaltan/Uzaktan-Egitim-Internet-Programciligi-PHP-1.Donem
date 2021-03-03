<head>
  <meta charset="UTF-8">
</head>

<?php
// örnek:
$sayim=rand(0,10);echo $sayim,"<br>";
$sayi=rand(1,10);echo $sayi,"<br>";

echo rand(20,25),"<br>";
echo rand(160,200),"<br>";
 
echo "<hr>";
$sayilar=array();
$sayilar[0]=rand(1,100);
$sayilar[1]=rand(90,100);
$sayilar[2]=rand(1,5);
$sayilar[3]=rand(1000,10000);
$sayilar[4]=rand(500,510);

foreach($sayilar as $deger)
   echo $deger," ";




?>
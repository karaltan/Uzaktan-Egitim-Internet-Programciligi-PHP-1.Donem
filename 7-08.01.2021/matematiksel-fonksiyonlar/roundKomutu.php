<head>
  <meta charset="UTF-8">
</head>

<?php
// örnek:
$x=14.354;
$sonuc=round($x,1); // bir tane ondalık kalacak şekilde yuvarla
echo "Sonuc=$sonuc <br>";
 
$sonuc=round($x,2); // iki tane ondalık kalacak şekilde yuvarla
echo "Sonuc=$sonuc <br>";
 
$sonuc=round($x); // hiç ondalık kalmayacak şekilde yuvarla
echo "Sonuc=$sonuc <br>";
 
echo round(14.68),"<br>"; // ekrana 15 yazar
echo round(14.12),"<br>"; // ekrana 14 yazar
echo round(14.68,1),"<br>"; // ekrana 14.7 yazar
echo round(14.19,1),"<br>"; // ekrana 14.2 yazar
echo round(-14.6),"<br>"; // ekrana -15 yazar


?>
<head>
  <meta charset="UTF-8">
</head>

<?php
// örnek:
echo "<hr>";
$sayilar=array();
for ($i=1;$i<=10000;$i++)
 { 
   $sayilar[$i]=rand(1,100);
 }

foreach($sayilar as $deger)
   echo $deger," ";




?>
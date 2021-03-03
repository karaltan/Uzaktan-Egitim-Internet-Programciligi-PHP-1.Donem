<meta charset="utf-8">

<?php
// rasgele üretilen sayıların toplamı 900 olduğunda duran
// ve ekrana kaç tane sayı üretildiğini yazan program
$top=0;

for($i=1;;$i++){

  $sayi=mt_rand(25,70);
  echo $sayi,"<br>";

  $top=$top+$sayi;

  if ($top>900) break;
}

echo "döngümüz ".$i.". adımda sonlandı";


?>
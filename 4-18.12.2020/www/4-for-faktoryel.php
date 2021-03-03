<?php
$sayi=5;
$sonuc=1;

// 5*4*3*2*1=120

for($i=$sayi;$i>0;$i--)
{
       $sonuc=$sonuc*$i;
}
echo "$sayi"."! = ".$sonuc;
?>
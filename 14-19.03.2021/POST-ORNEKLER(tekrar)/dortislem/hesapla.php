<?php
 if(isset($_POST["dugme"])){
 function islemYap($sayi1,$sayi2,$islemKodu) {
switch ($islemKodu) {
case 1:
 $sonuc=$sayi1+$sayi2;
 break;
case 2:
 $sonuc=$sayi1-$sayi2;
 break;
case 3:
 $sonuc=$sayi1/$sayi2;
 break;
case 4:
 $sonuc=$sayi1*$sayi2;
 break; }
return $sonuc; }
$s1=(int)$_POST['sayi_1'];
$s2=(int)$_POST['sayi_2'];
$kod=$_POST['kod'];
echo islemYap($s1,$s2,$kod);
}
?>
<?php
$gunler[0]="Pazartesi";
$gunler[1]="Salı";
$gunler[2]="Çarşamba";
$gunler[3]="Perşembe";
$gunler[4]="Cuma";
$gunler[5]="Cumartesi";
$gunler[6]="Pazar";

echo $gunler[4];
//diziler 0'dan başlarlar. yani ilk indis 0 dır.
// dizi tanımlarken [] kullanılır

echo "<br>";

$days=array("Pazartesi","Salı","Çarşamba","Perşembe","Cuma","Cumartesi","Pazar");
// array tek satırda dizi oluşturmaya yarar
echo $days[4];

echo "<br>";

$gorevler["pazartesi"]="Faturalar ödenecek";
$gorevler["çarşamba"]="Alışveriş yapılacak";
$gorevler["cumartesi"]="Temizlik yapılacak";
echo $gorevler["çarşamba"]; // ekrana Alışveriş yapılacak yazar.

?>
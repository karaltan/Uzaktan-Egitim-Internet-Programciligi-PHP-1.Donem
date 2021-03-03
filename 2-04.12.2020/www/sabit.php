<?php

define("pi",3.14); // Doğru bir sabit tanımlaması yapılmıştır
echo pi; // Hata: Sabitin önüne $ konulmuş
echo "<br>";
// pi=3; // Hata: Sabitin değeri değiştirilmeye çalışılıyor
$alan=pi*2*2; // Burada herhangi bir hata yoktur. Alan hesaplaması için sabit kullanılmıştır.
echo $alan;
?>
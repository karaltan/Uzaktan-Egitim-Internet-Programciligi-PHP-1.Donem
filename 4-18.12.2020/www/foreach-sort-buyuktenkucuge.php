<?php
$sayilar=array(45,18,47,-11,67,92,23,68);
 
sort($sayilar);
$yenidizi=array_reverse($sayilar,true);
foreach ($yenidizi as $sayi)
{
	echo $sayi."<br>";
}  
?>
<!--index.php-->
<html>
<body>

<?php
$resimler=array(1=>"gok.jpg","mavi.jpg","park.jpg","sari.jpg","yesil.jpg");
foreach($resimler as $indis=>$deger)
   echo "<a href='index.php?resim_no=$indis'>$indis</a> ";
 
echo "<br>";
if($_GET){ // GET olayı varsa anlamındadır.
   echo "<img src='resimler/".$resimler[$_GET["resim_no"]]."'>"; // GET olayı varsa ilgili resmi gösterir
   echo "<br><b>".$resimler[$_GET["resim_no"]]."</b>"; // resmin adını yazar
}
else
   echo "<img src='resimler/".$resimler[1]."'>"; // GET olayı yoksa ilk resmi gösterir
   echo "<br><b>".$resimler[1]."</b>"; // ilk resmin adını yazar
?>
</body>
</html>
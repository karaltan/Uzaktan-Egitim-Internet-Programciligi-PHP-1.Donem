<!--index.php-->
<html>
<body>
<?php
$uyeler=array(14=>"Ömer",22=>"Erkin",35=>"Zekiye",41=>"Vildan",85=>"Yalçın",114=>"Rabia");
echo "<table border='1'>";
echo "<tr>";
echo "<td>Numarası</td>";
echo "<td>Adı</td>";
echo "<td colspan='2'>İşlem</td>";
echo "</tr>";
foreach($uyeler as $indis=>$deger){
   echo "<tr>";
   echo "<td>$indis</td>";
   echo "<td>$deger</td>";
   echo "<td><a href='islem.php?no=$indis&islem=duzelt'>Düzelt</a></td>";
   echo "<td><a href='islem.php?no=$indis&islem=sil'>Sil</a></td>";
   echo "</tr>";
}
echo "</table>";
?>
</body>
</html>
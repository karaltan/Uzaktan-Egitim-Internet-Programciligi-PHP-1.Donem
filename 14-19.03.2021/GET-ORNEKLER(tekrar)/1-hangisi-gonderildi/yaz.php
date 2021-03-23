<!--yaz.php-->
<html>
<body>
<?php
if(@$_GET["no"]) {// eğer no geldi ise
   echo "Numarasına tıkladınız<br>";
   echo "<b>Numarası</b>: ",$_GET["no"],"<br>";

}
elseif(@$_GET["ad"]) { // eğer ad geldi ise
   echo "Adına tıkladınız<br>";
   echo "<b>Adı</b>: ",$_GET["ad"],"<br>";
}
?>
</body>
</html>
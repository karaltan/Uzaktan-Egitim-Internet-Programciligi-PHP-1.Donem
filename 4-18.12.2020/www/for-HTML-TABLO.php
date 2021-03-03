<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>www.yazilimkodlama.com</title>
</head>
 
<body>
<?php
echo "<table border='1' width='200px'>";
echo "<tr>";
echo "<th>Sayı</th>";
echo "<th>Karesi</th>";
echo "<th>Küpü</th>";
echo "</tr>";
for ($i=1;$i<=10;$i++){
   echo "<tr>";
   echo "<td>$i</td>";
   echo "<td>",$i*$i,"</td>";
   echo "<td>",$i*$i*$i,"</td>";
   echo "</tr>";
}
echo "</table>";
?>
</body>
</html>
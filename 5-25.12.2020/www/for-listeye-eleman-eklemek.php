<head>
  <meta charset="UTF-8">
</head>
Doğum Yılınız:

<?php
// örnek:1980'den 2020'ye kadar olan yılları açılır listeye ekleyelim

echo "<select name='yillar'>";
for ($i=1980;$i<=2020;$i++)
   echo "<option value='$i'>$i</option>";
echo "</select>";

?>
<br>

Boyunuz:
<?php
//

echo "<select name='yillar'>";
for ($i=220;$i>=50;$i--)
   echo "<option value='$i'>$i</option>";
echo "</select>";

?>
<?php
$ogrenciler=array("Ali","Veli","Ayşe","Fatma");
echo "<select name='liste'>";
for ($i=0;$i<=3;$i++)
{
echo "<option value='",$i+1,"'>",$ogrenciler[$i],"</option>";
}
echo "</select>";
?>
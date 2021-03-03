<table border="1">
<?php
$say=0;
for ($satir=1;$satir<=3;$satir++)
{
	echo '<tr>';
	for ($sutun=1; $sutun<=4; $sutun++)
	{
		echo '<td>'.++$say.'</td>';
	}
	echo '</tr>';
}
?>
</table>
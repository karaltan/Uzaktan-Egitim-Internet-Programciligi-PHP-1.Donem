<table border="1">
<?php
$say=0;
for ($satir=1;$satir<=2;$satir++)
{
	echo '<tr>';
	for ($sutun=1; $sutun<=2; $sutun++)
	{
		if ($satir==1 && $sutun==1)
		{
			echo '<td colspan="2">'.++$say.'</td>';
			$sutun++;
		}
		else
		{
			echo '<td>'.++$say.'</td>';
		}
	}
	echo '</tr>';
}
?>
</table>
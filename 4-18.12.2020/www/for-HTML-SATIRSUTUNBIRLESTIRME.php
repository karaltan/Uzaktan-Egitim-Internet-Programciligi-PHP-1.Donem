<table border="1">
<?php
$say=0;
for ($satir=1;$satir<=3;$satir++)
{
	echo '<tr>';
	for ($sutun=1; $sutun<=4; $sutun++)
	{
		if ($satir == 1 && $sutun == 3)
		{
			echo '<td colspan="2">'.++$say.'</td>';
			$sutun++;
		}
		else if ($satir==2 && $sutun==2)
		{
			echo '<td rowspan="2">'.++$say.'</td>';
		}
		else if ($satir==3 && $sutun==2)
		{
			echo '<td>'.++$say.'</td>';
			$sutun++;
		}
		else
			echo '<td>'.++$say.'</td>';
	}
	echo '</tr>';
}

?>
</table>
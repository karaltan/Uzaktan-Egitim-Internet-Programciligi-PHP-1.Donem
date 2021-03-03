<table border="1">
<?php
$say=0;
for ($satir=1;$satir<=3;$satir++)
{
	echo '<tr>';
	for ($sutun=1; $sutun<=4; $sutun++)
	{
		if ($satir==1 && $sutun==1)
		{
			echo '<td colspan="2" rowspan="2">'.++$say.'</td>
			';
			$sutun++;
		}
		else if ($satir==2 && $sutun==1)
		{
			$sutun++;
		}
		else
			echo '<td>'.++$say.'</td>';
	}
	echo '</tr>
	';
}
?>
</table>
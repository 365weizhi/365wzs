<table>
<tr>
	<td>组名</td>
	<td>地域</td>
	<td>人数</td>
	<td>话题</td>
</tr>
<?php
foreach($groups as $group){
	$group = $group['Group'];
	echo "<tr><td>$group[name]</td><td>$group[location]</td><td>$group[members]</td><td>$group[forum_count]</td></tr>";
}
?>
</table>
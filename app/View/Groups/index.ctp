我的小组
<table>
<tr>
	<td>组名</td>
	<td>地域</td>
	<td>人数</td>
	<td>话题</td>
	<td>类型</td>
	<td></td>
	<td></td>
	<td></td>
</tr>
<?php
foreach($my_groups as $group){
	$group = $group['Group'];
	echo "<tr>";
	echo "
		<td>$group[name]</td>
		<td>$group[location]</td>
		<td>$group[members]</td>
		<td>$group[forum_count]</td>
		<td>$group[type]</td>
		<td><a href='".$this->webroot."groups/view/$group[id]'>查看</a></td>
		";
	if($group['user_id'] == $this->Site->user_id())
		echo "<td><a href='".$this->webroot."usergroups/resign/$group[id]'>辞职</a></td>";
	else 
		echo "<td><a href='".$this->webroot."usergroups/quit/$group[id]'>退出</a></td>";
	echo "</tr>";
}
?>
</table>

所有小组
<table>
<tr>
	<td>组名</td>
	<td>地域</td>
	<td>人数</td>
	<td>话题</td>
	<td>类型</td>
	<td></td>
	<td></td>
	<td></td>
</tr>
<?php
foreach($all_groups as $group){
	$group = $group['Group'];
	echo "
	<tr>
		<td>$group[name]</td>
		<td>$group[location]</td>
		<td>$group[members]</td>
		<td>$group[forum_count]</td>
		<td>$group[type]</td>
		<td><a href='".$this->webroot."groups/view/$group[id]'>查看</a></td>
		<td><a href='".$this->webroot."usergroups/join/$group[id]'>加入</a></td>
		<td><a href='".$this->webroot."usergroups/quit/$group[id]'>退出</a></td>
	</tr>";
}
?>
</table>
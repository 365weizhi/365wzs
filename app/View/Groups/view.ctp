<?php 
	$group = $list['Group'];
	$forums = $list['Forum'];
	$creator = $list['User'];
?>
<?php 
echo "<br>小组信息：".$group['name'];
echo "<br>位置:".$group['location'];
echo "<br>创建者:".$creator['username'];
?>
 ...
<br>
<a href="<?php echo $this->webroot."groups/forums/add/".$group['id'];?>">添加话题</a>
<table>
<tr>
	<td>标题</td>
	<td>内容</td>
	<td>创建者</td>
	<td>创建时间</td>
	<td>类型</td>
	<td></td>
	<td></td>
</tr>
<?php 
foreach($forums as $forum){
	echo "
	<tr>
		<td>$forum[title]</td>
		<td>$forum[content]</td>
		<td>$forum[username]</td>
		<td>$forum[create_time]</td>
		<td>$forum[type]</td>
		<td>同组查看</td>
		<td>回复</td>
	</tr>
	";
}
?>
<tr>
</tr>
</table>
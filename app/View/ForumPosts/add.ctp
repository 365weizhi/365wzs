<form method="post">
话题标题：
<input name="Forum[title]" />
<br>
话题类型：
<select name="Forum[type]">
	<option>普通</option>
	<option>问答</option>
</select>
<br>
话题内容：
<input name="Forum[content]" />
<br>
<input type="submit" value="提交" />
</form>

<?php 
pr($forum);
?>
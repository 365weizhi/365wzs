<form>
<textarea name="description" placeHolder="修改简介"><?php echo $description;?></textarea>
<br>
<select name="content_id">
<?php 
foreach($contents as $content){
	echo "<option value='".$content['Content']['id']."'>".$content['Content']['name']."</option>";
}
?>
</select>
<br>
<input type="submit" class="btn btn-success" />
</form>

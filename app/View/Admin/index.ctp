<style>
	#search-list {overflow:hidden;*zoom:1;}
	#search-list p {margin:2px 0;}
	#search-list li {float:left;padding:5px;background: #F7F7F7;margin:0 10px 10px 0;list-style-type:none;color:#B3B3B3;}
	#search-list li a {display:block;cursor:pointer;}
	#search-list li img {height:200px;}
</style>

<form method="post">
   <table>
	<tr>
	<th>
		<label>Keyword</label>
	</th>
	<th>
		<label>Category</label>
	</th>
	<th>
		<label>Area</label>
	</th>
	<th>
	</th>
	</tr>
	<th>
		<input name="Search[keyword]" value="<?php echo isset($_POST['Search']['keyword'])?$_POST['Search']['keyword']:'';?>" />
	</th>
	<th>
		<select name="Search[category]">
		<?php
		//Category gets from Taobao
		foreach($Category as $cat){
			if(isset($_POST['Search']['category']) && $_POST['Search']['category'] == $cat['Cat']['id']){
				echo "<option value=".$cat['Content']['id']." selected >".$cat['Content']['name']."</option>";
			}
			else{
				echo "<option value=".$cat['Content']['id'].">".$cat['Content']['name']."</option>";
			}
		}
		?>
		</select>
	</th>
	<th>
		<input name="Search[area]" value="<?php echo (isset($_POST['Search']['area'])?$_POST['Search']['area']:'');?>" />
	</th>
	<th>
   		<input type="submit" value="Search"/>
	</th>
   </table>
</form>

<?php
echo "<ul id='search-list'>";
if(!$search){
	echo '没有找到条目，请修改关键词或者类别。';
} else{
    if(!isset($data['count']) || $data['count'] <= 0){
	echo '没有找到条目，请修改关键词或者类别。';
    }
    else {
	foreach($data['resq']->taobaoke_item as $taobaoke_item){
?>
	<li>
	<a href='<?php echo $taobaoke_item->click_url; ?>'
		data-taobaoke_id='<?php echo $taobaoke_item->num_iid; ?>' 
		title='<?php echo strip_tags($taobaoke_item->title);?>' 
		data-price='<?php echo $taobaoke_item->price;?>' 
		data-commission='<?php echo $taobaoke_item->commission; ?>' 
		data-sellernick='<?php echo $taobaoke_item->nick; ?>'
	><img src="<?php echo $taobaoke_item->pic_url?>" alt="<?php echo $taobaoke_item->title;?>"/></a>
	<p>
	    <span class="right"><?php echo $taobaoke_item->volume; ?>件/30天</span>
	    <span><?php echo $taobaoke_item->commission; ?></span> /
	    <span><?php echo $taobaoke_item->price;?></span>
	</p>
	</li>
<?php
	}
    }
}
echo "</ul>";
?>

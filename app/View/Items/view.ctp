<div >
<!-- 可以用$item = $item['Item'] 就可以少写几个字符 -->
    <p><?php echo h($item['Item']['description']); ?></p>
    
    <a href="<?php echo $this->webroot."favors/add/".$item['Item']['id']; ?>" >
        Favor(<?php echo $item['Item']['favor_count'];?>)
    </a>
    <a href="<?php echo $this->webroot."likes/add/".$item['Item']['id'];?>" >
        Like(<?php echo $item['Item']['like_count'];?>)
    </a>
    <a href="<?php echo $this->webroot."messages/add/".$item['Item']['id'];?>" >
    	@
    </a>
	<br>
    <img src="<?php echo h($item['Item']['pic_url'])."_400x400.jpg"; ?>">
    <br>

    <a href="<?php echo h($item['Item']['click_url']); ?>">Click URL</a>
    <a href="<?php echo h($item['Item']['shop_click_url']); ?>">Shop Click URL</a>
    
    <p>价钱：<?php echo h($item['Item']['price']); ?></p>
    <p>位置：<?php echo h($item['Item']['item_location']); ?></p>
</div>
<div>
评论内容：
<br>
<?php 
foreach($posts as $post){
	$post = $post['Post'];
	echo $post['comment'];
	echo "<br>";
?>


<?php 
}
?>
</div>
<br>
<div>
添加评论：
<form method="post" action="<?php echo $this->webroot."Posts/add"; ?>">
<input type="hidden" name="Post[item_id]" value="<?php echo $item['Item']['id'];?>" />
<input type="hidden" name="Post[user_id]" value="<?php echo $uid;?>" />
<textarea name="Post[comment]"></textarea>
<input type="submit" value="评论" />
</form> 
</div>
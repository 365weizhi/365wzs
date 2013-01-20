<form action="<?php echo $this->webroot."favors/add/".$item_id; ?>" class="zform" method='post'>
    <input type='hidden' value='<?php echo $uid;?> name='user_id' />
    <input type='hidden' value='<?php echo $item_id;?>' name='item_id' />
    <textarea placeholder="求描述..." name="description"></textarea>
    <select name='content_id'>
    	<?php 
        foreach($contents as $content){
            echo "<option value='".$content['Content']['id']."'>".$content['Content']['name']."</option>";
        }
        ?>
	</select>
	<br />
    <button class='btn'>好啦</button>
</form>

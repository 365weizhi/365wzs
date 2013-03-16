<form action="<?php echo $this->webroot."favors/add/".$item_id; ?>" class="zform" method='post'>
    <h1 class="main-title"><?php echo $this->Html->image('share.png'); ?>我要分享</h1>
    <img src="<?php echo $pic_url; ?>" alt="" />
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

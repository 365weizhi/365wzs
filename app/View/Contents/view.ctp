<?php 
//pr($favors);
if(count($favors) <= 0){
	echo "暂无分享";
}
else {
	echo "专刊名称：".$favors[0]['Content']['name']."<br>";
	echo "专刊描述：".$favors[0]['Content']['description']."<br>";
?>
<div id="cascade-container">
    <?php foreach ($favors as $item) { ?>
        <div class="image-block">
            <div class="image">
            <a href="<?php echo $this->webroot."favors/add/".$item['Item']['id']; ?>" >
            Favor(<?php echo $item['Item']['favor_count'];?>)
            </a>
            <a href="<?php echo $this->webroot."likes/add/".$item['Item']['id'];?>" >
            Like(<?php echo $item['Item']['like_count'];?>)
            </a>
            <a href="<?php echo $this->webroot."messages/add/".$item['Item']['id'];?>">
            @
            </a>
            <a href="<?php echo $this->webroot."items/view/".$item['Item']['id'];?>">
                <img src="<?php echo $item['Item']['pic_url']; ?>" alt="" />
            </a>
            </div>
            <div class="image-info">
                <?php 
                if($item['Item']['favor_count'] > 0){
	                echo " <strong>".$item['Favor']['description']."</strong>";
                }
                ?>            
            </div>
        </div>
    <?php } ?>
</div>
<?php 
}
?>
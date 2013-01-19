<div id="cascade-container">
    <?php foreach ($items as $item) { ?>
        <div class="image-block">
            <div class="image">
                <a href="<?php echo $this->webroot."items/view/".$item['id'];?>">
                    <img src="<?php echo $item['pic_url']; ?>" alt="" />
                </a>
            </div>
            <div class="image-info">
                <input class="item-id" type="hidden" value="<?php echo $item['id']; ?>">
                <a class="favor"></a>
                <span>(<?php echo $item['favor_count'];?>)</span>
                <a href="<?php echo $this->webroot."likes/add/".$item['id'];?>" >
                偷偷喜欢(<?php echo $item['like_count'];?>)
                </a>
                <a href="<?php echo $this->webroot."messages/add/".$item['id'];?>">
                分享
                </a>
                <br />
                <?php 
                if($item['favor_count'] > 0){
	                echo " <strong>".$item['username']."&nbsp;第一个分享</strong>";
                }
                ?>            
            </div>
        </div>
    <?php } ?>
</div>

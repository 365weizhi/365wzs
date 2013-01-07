<div id="cascade-container">
    <?php foreach ($items as $item) { ?>
        <div class="image-block">
            <div class="image">
            <a href="<?php echo $this->webroot."favors/add/".$item['id']; ?>" >
            Favor(<?php echo $item['favor_count'];?>)
            </a>
            <a href="<?php echo $this->webroot."likes/add/".$item['id'];?>" >
            Like(<?php echo $item['like_count'];?>)
            </a>
            <a href="<?php echo $this->webroot."messages/add/".$item['id'];?>">
            @
            </a>
            <a href="<?php echo $this->webroot."items/view/".$item['id'];?>">
                <img src="<?php echo $item['pic_url']; ?>" alt="" />
            </a>
            </div>
            <div class="image-info">
                <?php 
                if($item['favor_count'] > 0){
	                echo " <strong>".$item['username']."&nbsp;第一个分享</strong>";
                }
                ?>            
            </div>
        </div>
    <?php } ?>
</div>

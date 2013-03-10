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
                <a class="at">
                    <?php echo $this->Html->image('at.png') ?>
                </a>
                <a class="like" >
                    <?php echo $this->Html->image('like.png') ?>
                    <span class="number"><?php echo $item['like_count'];?></span>
                </a>
                <a class="favor">
                    <?php echo $this->Html->image('favor.png') ?>
                    <span class="number"><?php echo $item['favor_count'];?></span>
                </a>
                <?php 
                if($item['favor_count'] > 0){
	                echo " <strong>".$item['username']."</strong>";
                }
                ?>            
            </div>
        </div>
    <?php } ?>
</div>

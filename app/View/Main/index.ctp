<div id="cascade-container">
    <?php foreach ($items as $item) { ?>
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
                <img src="<?php echo $item['Item']['pic_url']; ?>" alt="" />
            </div>
            <div class="image-info">
                <strong>地区:<?php echo $item['Item']['item_location']; ?>&nbsp;&nbsp;&nbsp;价格:<?php echo $item['Item']['price'] ?></strong>
                <p><?php echo $item['Item']['title']; ?></p>
            </div>
        </div>
    <?php } ?>
</div>

<div id="cascade-container">
    <?php foreach ($shares as $item) {
    ?>
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
                <strong>
                	<?php echo $item['User']['username'];?>
                </strong>
                <p><?php echo $item['Favor']['description']; ?></p>
            </div>
        </div>
    <?php } ?>
</div>

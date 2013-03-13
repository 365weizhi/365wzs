<style>
.share-input {
	position: absolute;
	top: 70px;
	right: 300px;
}
</style>

<form class="share-input" method="post" action="<?php echo $this->webroot;?>shares/add">
<input name="url" placeHolder="粘贴淘宝商品URL" />
<input type="submit" class="btn" />
</form>


<!--
<div id="cascade-container">
    <?php foreach ($shares as $item) { ?>
        <div class="image-block">
            <div class="image">
                <a href="<?php echo $this->webroot."items/view/".$item['Item']['id'];?>">
                    <img src="<?php echo $item['Item']['pic_url']; ?>" alt="" />
                </a>
            </div>
            <div class="image-info">
                <input class="item-id" type="hidden" value="<?php echo $item['Item']['id']; ?>">
                <a class="at">
                    <?php echo $this->Html->image('at.png') ?>
                </a>
                <a class="like" >
                    <?php echo $this->Html->image('like.png') ?>
                    <span class="number"><?php echo $item['Item']['like_count'];?></span>
                </a>
                <a class="favor">
                    <?php echo $this->Html->image('favor.png') ?>
                    <span class="number"><?php echo $item['Item']['favor_count'];?></span>
                </a>
                <strong><?php echo $item['User']['username'];?></strong>
                <p><?php echo $item['Favor']['description']; ?></p>
            </div>
        </div>
    <?php } ?>
</div>
-->

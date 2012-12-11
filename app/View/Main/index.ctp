<div id="cascade-container">
    <?php foreach ($items as $item) { ?>
        <div class="image-block">
            <img src="<?php echo $item['Item']['pic_url']; ?>" alt="" />
        </div>
    <?php } ?>
</div>

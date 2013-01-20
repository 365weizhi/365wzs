
<div id="slider">
    <div class="slide-wrapper">
        <div class="slide">
            <div class="content">
                <h1>今日主题</h1>
                <p>连衣裙是一个品种的总称，是人们，特别是年轻女孩喜欢的夏装之一。 连衣裙在各种款式造型中被誉为“款式皇后”，是变化莫测、种类最多、最受青睐的款式。根据穿着对象的不同，可有童式连衣裙和成人连衣裙。在上衣和裙体上可以变化的各种因素几乎都可以组合构成连衣裙的样式。连衣裙还可以根据造型的需要，形成各种不同的轮廓和腰节位置。</p>
            </div>
            <div class="image">
                <img src="<?php echo $this->webroot.'img/ad.jpg'; ?>" />
            </div>
        </div>
    </div>
</div>

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

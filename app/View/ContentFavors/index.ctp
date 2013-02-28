<?php 
//pr($contentfavors);
?>
<div class="column-4" id="slices">
    <div class="slice slice-1">
        <a><?php echo $this->Html->image('static/slides/slide1.jpg') ?></a>
        <div class="slice-info">校服裙</div>
    </div>
    <div class="slice slice-2">
        <a><?php echo $this->Html->image('static/slides/slide2.jpg') ?></a>
        <div class="slice-info">连衣裙</div>
    </div>
    <div class="slice slice-3">
        <a><?php echo $this->Html->image('static/slides/slide3.jpg') ?></a>
        <div class="slice-info">披肩</div>
    </div>
    <div class="slice slice-4">
        <a><?php echo $this->Html->image('static/slides/slide4.jpg') ?></a>
        <div class="slice-info">青春活力</div>
    </div>
    <div class="slice slice-5">
        <a><?php echo $this->Html->image('static/slides/slide5.jpg') ?></a>
        <div class="slice-info">高雅礼裙</div>
    </div>
    <div class="slice slice-6">
        <a><?php echo $this->Html->image('static/slides/slide6.jpg') ?></a>
        <div class="slice-info">春夏搭配</div>
    </div>
</div>

<div id="cascade-container">
    <?php foreach ($contentfavors as $content) { ?>
        <div class="image-block">
            <div class="image">
            <a href="<?php echo $this->webroot."contentfavors/add/".$content['Content']['id']; ?>" >
            Favor(<?php echo $content['Content']['favor_count'];?>)
            </a>
            <a href="<?php echo $this->webroot."contentlikes/add/".$content['Content']['id'];?>" >
            Like(<?php echo $content['Content']['like_count'];?>)
            </a>
            <a href="<?php echo $this->webroot."messages/add/".$content['Content']['id'];?>">
            @
            </a>
            <a href="<?php echo $this->webroot."contents/view/".$content['Content']['id'];?>">
                <img src="
                <?php 
                	if(empty($content['Content']['pic_url']))
                		echo $this->webroot."img/default.jpg";
                	else 
                		echo $content['Content']['pic_url']; 
                ?>
                " alt="" 
                />
            </a>
            </div>
            <div class="image-info">
                <?php 
                	echo "专刊:".$content['Content']['name'];
                	echo "<br>";
                	echo "描述:".$content['ContentFavor']['description'];
                ?>
                <a class="btn btn-warning" href="<?php echo $this->webroot."contents/edit/".$content['Content']['id'];?>">修改</a>        
            </div>
        </div>
    <?php } ?>
</div>

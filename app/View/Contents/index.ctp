<div id="cascade-container">
    <?php foreach ($contents as $content) { ?>
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
                	echo "描述:".$content['Content']['description'];
                ?>
                <a class="btn btn-warning" href="<?php echo $this->webroot."contents/edit/".$content['Content']['id'];?>">修改</a>        
            </div>
        </div>
    <?php } ?>
</div>

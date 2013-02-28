<div class="column-3">
    <div class="column-3 product-author">
        <table>
            <tr>
                <td class="author-avatar" rowspan="2">
                    <a><?php echo $this->Html->image('default-avatar.jpg') ?></a>
                </td>
                <td class="author-name">分享来自: <span class="name">Zero</span></td>
            </tr>
            <tr>
                <td class="product-title"><?php echo $item['Item']['title']; ?></td>
            </tr>
        </table>
    </div>
    <div class="column-3 product-wrapper">
        <div class="column-3 product">
            <div class="column-2 image">
                <img src="<?php echo h($item['Item']['pic_url'])."_480x480.jpg"; ?>" />
                <div class="operations">
                    <a class="at">
                        <?php echo $this->Html->image('at.png') ?>告诉好友
                    </a>
                    <a class="like" >
                        <?php echo $this->Html->image('like.png') ?>
                        <span class="number"><?php echo $item['Item']['like_count'];?> 偷偷喜欢</span>
                    </a>
                    <a class="favor">
                        <?php echo $this->Html->image('favor.png') ?>
                        <span class="number"><?php echo $item['Item']['favor_count'];?> 喜欢</span>
                    </a>
                </div>
            </div>
            <div class="column-1 description">
                <p>丽江地处我国西南边陲，位于云南省西北部地区。居于青藏高原南端、横断山脉向云贵高原北部云岭山脉过渡的衔接地段，兼有两种以上地形特征。境内地形地貌多样，含高原雪山、河谷、深峡、草甸、平坝相结合的地貌特征及自然景观资源，同时气候变化显著。 丽江历史悠久，很早就有人类活动的足迹，是我国古人类活动的地区之一。 丽江自古以来就是我国西南交通贸易大动脉南方“丝绸之路”和由西藏入境的“茶马古道”的中转站。两条古道既是中原至东南亚的南来北往的贸易通道，又是沟通中原文化和外来文化影响的传送渠道。 丽江是纳西族的家园，是我国唯一的一个纳西族自治县，同时还居住着白、彝、僳僳、普米族等少数民族。 丽江的文化以开放、大方、兼容并蓄为重要特征。纳西族人民长期以来创造并延续保持下来的东巴文化，是世界民族文化的一枝璀璨的奇葩，是人类共同的文化遗产！</p>

                <!--
                <p>价钱：<?php echo $item['Item']['price']; ?></p>
                <p>位置：<?php echo $item['Item']['item_location']; ?></p>
                -->
            </div>
            <div class="column-1 buy">
                <a class="buy-button" href="<?php echo $item['Item']['shop_click_url']; ?>">现在去购买!</a>
            </div>
            <div class="column-1 shares">
                一键分享到
                <a><?php echo $this->Html->image('qq.png'); ?></a>
                <a><?php echo $this->Html->image('weibo.png'); ?></a>
            </div>
        </div>
    </div>
    <div class="column-3 related-product"></div>
    <div class="column-3 comments">
        <div class="comment">
            <div class="avatar">
                <a><?php echo $this->Html->image('avatars/avatar1.jpg'); ?></a>
            </div>
            <div class="content">
                <p class="author-name">张小敏</p>
                <p class="comment-content">这个东西真是好啊，好到不得了了。</p>
            </div>
        </div>
        <div class="comment">
            <div class="avatar">
                <a><?php echo $this->Html->image('avatars/avatar2.jpg'); ?></a>
            </div>
            <div class="content">
                <p class="author-name">李小红</p>
                <p class="comment-content">看起来是真心的觉得不错，很粉嫩，布料摸起来很柔软，总之就是满意啦 2.布料很柔软，质量还不错，买的XL的，有点太太了，睡衣大点无所谓啦，整体还是很满意 3.这个睡衣穿起来很舒适，洗过一次还是比较舒适，只是担心会起球，不过已经超值了，卖家服务态度也很好，不错的家居服，我妈说像小朋友穿的。。。4.很可爱。喜欢。</p>
            </div>
        </div>
        <!--
        <p>评论:</p>
        <?php 
        foreach($posts as $post){
        	$post = $post['Post'];
        	echo $post['comment'];
        	echo "<br />";
        } ?>
        -->
    </div>
    <div class="column-3 comment">
        添加评论：
        <form method="post" action="<?php echo $this->webroot."Posts/add"; ?>">
            <input type="hidden" name="Post[item_id]" value="<?php echo $item['Item']['id'];?>" />
            <input type="hidden" name="Post[user_id]" value="<?php echo $uid;?>" />
            <textarea name="Post[comment]"></textarea>
            <input type="submit" value="评论" />
        </form> 
    </div>
</div>

<div class="column-1 magazines">
    <p class="magazine-group-title">最新<strong>专刊</strong></p>
    <div class="magazine">
        <div class="magazine-image-wrapper">
            <a><?php echo $this->Html->image('static/bag1.jpg') ?></a>
            <a><?php echo $this->Html->image('static/bag2.jpg') ?></a>
        </div>
        <a class="magazine-title">西藏特色牛仔包</a>
    </div>

    <p class="magazine-group-title">推荐<strong>专刊</strong></p>
    <div class="magazine">
        <div class="magazine-image-wrapper">
            <a><?php echo $this->Html->image('static/dress1.jpg') ?></a>
            <a><?php echo $this->Html->image('static/dress2.jpg') ?></a>
        </div>
        <a class="magazine-title">西欧春夏悠闲连衣裙</a>
    </div>
    <div class="magazine">
        <div class="magazine-image-wrapper">
            <a><?php echo $this->Html->image('static/boot1.jpg') ?></a>
            <a><?php echo $this->Html->image('static/boot2.jpg') ?></a>
        </div>
        <a class="magazine-title">韩国人气韩版淑女毛毛鞋磁两穿款粗高跟绒面</a>
    </div>
    <div class="magazine">
        <div class="magazine-image-wrapper">
            <a><?php echo $this->Html->image('static/coat1.jpg') ?></a>
            <a><?php echo $this->Html->image('static/coat2.jpg') ?></a>
        </div>
        <a class="magazine-title">秋冬女装羊羔毛加厚连帽棉衣</a>
    </div>
    <div class="magazine">
        <div class="magazine-image-wrapper">
            <a><?php echo $this->Html->image('static/accessories1.jpg') ?></a>
            <a><?php echo $this->Html->image('static/accessories2.jpg') ?></a>
        </div>
        <a class="magazine-title">地中海翡翠首饰</a>
    </div>
</div>

<script type="text/template" id="simple-user-template">
      <a href="/365wzs/users/view/<%= user_id %>"><img src="<%= pic_url %>"></a>
      <p class="username"><%= username %></p>
</script>

<div class="column-4" id="user-info">
    <div class="column-4 avatar">
        <table class="column-1-12 avatar-table">
            <tr>
                <td><img src="<?php echo $this->webroot ?>/static/avatar/<?php echo $user['User']['pic_url']; ?>"></td>
            </tr>
        </table>
        <table id="user-basic-info" class="column-1 info-table">
            <tr>
                <td colspan="3" class="username"><?php echo $user['User']['username']; ?></td>
            </tr>
            <tr>
                <td colspan="3" class="location">广东，佛山</td>
            </tr>
            <tr>
                <td class="follows"><span class="number"><?php echo $nexus['count_2']; ?></span></td>
                <td class="fans"><span class="number"><?php echo $nexus['count_1']; ?></span></td>
                <td><span class="number">1723</span></td>
            </tr>
            <tr>
                <td><span class="icon"></span></td>
                <td><span class="icon"></span></td>
                <td><span class="icon"></span></td>
            </tr>
            <tr>
                <td class="follows">关注</td>
                <td class="fans">粉丝</td>
                <td>被分享</td>
            </tr>
        </table>
        <table class="column-2-3 detail-table">
        </table>
    </div>
</div>
<div class="navigate">

<div class="column-4 navigate">
    <table class="column-4 navigate-table">
        <tr>
          <td class="navigate-item navigate-left border-right"><a href="#">分享过的</a></td>
          <td class="navigate-item navigate-left border-right"><a href="#">小组</a></td>
          <td class="navigate-item navigate-left border-right"><a href="#">喜欢过的</a></td>
          <td class="navigate-item navigate-left border-right"><a href="#">偷偷喜欢</a></td>
          <td class="navigate-item navigate-left"><a href="#">好友动态</a></td>
          <td></td>
          <td></td>
          <!-- 专刊URL：contents/add -->
          <td class="navigate-item navigate-right"><a href="#">添加专刊</a></td>
          <td class="navigate-item navigate-right"><?php echo $this->Html->link(__('修改信息'), array('controller' => 'users', 'action' => 'edit')); ?></td>
        </tr>
    </table>
</div>

<div id="tab-content">
    <div class="column-4">
        <div class="user">
            <a><?php echo $this->Html->image('avatars/avatar1.jpg') ?></a>
            <p class="username">张晓红</p>
        </div>
        <div class="user">
            <a><?php echo $this->Html->image('avatars/avatar2.jpg') ?></a>
            <p class="username">李逍遥</p>
        </div>
        <div class="user">
            <a><?php echo $this->Html->image('avatars/avatar3.jpg') ?></a>
            <p class="username">陈美凤</p>
        </div>
        <div class="user">
            <a><?php echo $this->Html->image('avatars/avatar4.jpg') ?></a>
            <p class="username">李楚君</p>
        </div>
        <div class="user">
            <a><?php echo $this->Html->image('avatars/avatar5.jpg') ?></a>
            <p class="username">何静怡</p>
        </div>
        <div class="user">
            <a><?php echo $this->Html->image('avatars/avatar6.jpg') ?></a>
            <p class="username">孟艳秋</p>
        </div>
        <div class="user">
            <a><?php echo $this->Html->image('avatars/avatar7.jpg') ?></a>
            <p class="username">李泽纯</p>
        </div>
        <div class="user">
            <a><?php echo $this->Html->image('avatars/avatar8.jpg') ?></a>
            <p class="username">吕娇英</p>
        </div>
    </div>
    <div class="column-4">
        <div class="user">
            <a><?php echo $this->Html->image('avatars/avatar9.jpg') ?></a>
            <p class="username">王梦婷</p>
        </div>
        <div class="user">
            <a><?php echo $this->Html->image('avatars/avatar10.jpg') ?></a>
            <p class="username">冯洁莹</p>
        </div>
        <div class="user">
            <a><?php echo $this->Html->image('avatars/avatar11.jpg') ?></a>
            <p class="username">廖恺欣</p>
        </div>
        <div class="user">
            <a><?php echo $this->Html->image('avatars/avatar12.jpg') ?></a>
            <p class="username">陈淑君</p>
        </div>
        <div class="user">
            <a><?php echo $this->Html->image('avatars/avatar13.jpg') ?></a>
            <p class="username">郭芯如</p>
        </div>
    </div>
</div>


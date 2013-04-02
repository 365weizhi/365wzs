<script type="text/template" id="simple-user-template">
  <a href="/365wzs/users/view/<%= user_id %>"><img src="<%= pic_url %>"></a>
  <p class="username"><%= username %></p>
</script>

<script type="text/template" id="detail-post-template">
  <a href="/365wzs/items/view/<%= id %>"><img src="<%= pic_url %>"></a>
</script>

<div class="column-4" id="user-info">
    <div class="column-4 avatar">
        <table class="column-1-12 avatar-table">
            <tr>
                <td><img src="
                	<?php 
                	if($user['User']['type'] == 2 || $user['User']['type'] == 3){
                		echo $user['User']['pic_url'];
                	}
                	else {
		               echo $this->webroot."/static/avatar/".$user['User']['pic_url'];
                	} 
		            ?>"	
                	></td>
            </tr>
        </table>
        <table id="user-basic-info" class="column-1 info-table">
            <tr>
                <td colspan="3" class="username"><?php echo $user['User']['nickname']; ?></td>
            </tr>
            <tr>
                <td colspan="3" class="location"><?php echo $user['User']['address']?></td>
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
    <table id="user-detail-info" class="column-4 navigate-table">
        <tr>
          <td class="navigate-item navigate-left border-right shares"><a>分享过的</a></td>
          <td class="navigate-item navigate-left border-right"><a href="#">小组</a></td>
          <td class="navigate-item navigate-left border-right favors"><a>喜欢过的</a></td>
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
</div>


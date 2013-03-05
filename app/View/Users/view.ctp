<div class="column-4" id="user-info">
    <div class="column-4 avatar">
        <table class="column-1-12 avatar-table">
            <tr>
                <td><?php echo $this->Html->image('default-avatar.jpg') ?></td>
            </tr>
        </table>
        <table class="column-1 info-table">
            <tr>
                <td colspan="3" class="username"><?php echo $user['User']['username'] ?></td>
            </tr>
            <tr>
                <td colspan="3" class="location">广东，佛山</td>
            </tr>
            <tr>
                <td><span class="number">243</span></td>
                <td><span class="number">543</span></td>
                <td><span class="number">33</span></td>
            </tr>
            <tr>
                <td><span class="icon"></span></td>
                <td><span class="icon"></span></td>
                <td><span class="icon"></span></td>
            </tr>
            <tr>
                <td>喜欢</td>
                <td>关注</td>
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
          <td class="navigate-item navigate-left"><a href="#">喜欢过的</a></td>
          <td class="navigate-item navigate-left"><a href="#">小组</a></td>
          <td class="navigate-item navigate-left"><a href="#">偷偷喜欢</a></td>
          <td class="navigate-item navigate-left"><a href="#">关注</a></td>
          <td></td>
          <td></td>
          <td class="navigate-item navigate-right"><a href="#">添加专刊</a></td>
          <td class="navigate-item navigate-right"><?php echo $this->Html->link(__('修改信息'), array('controller' => 'users', 'action' => 'edit')); ?></td>
        </tr>
    </table>
</div>

<div class="users view">
    <div class="related">
    	<h3><?php echo __('Favors'); ?></h3>
    	<?php if (!empty($user['Favor'])): ?>
    	    <table cellpadding = "0" cellspacing = "0">
    	    <tr>
    	    	<th><?php echo __('Id'); ?></th>
    	    	<th><?php echo __('User Id'); ?></th>
    	    	<th><?php echo __('Item Id'); ?></th>
    	    	<th><?php echo __('Description'); ?></th>
    	    	<th><?php echo __('Click Count'); ?></th>
    	    	<th><?php echo __('Content Id'); ?></th>
    	    	<th class="actions"></th>
    	    </tr>
    	    <?php
    	    	$i = 0;
    	    	foreach ($user['Favor'] as $favor): ?>
    	    	<tr>
    	    		<td><?php echo $favor['id']; ?></td>
    	    		<td><?php echo $favor['user_id']; ?></td>
    	    		<td><?php echo $favor['item_id']; ?></td>
    	    		<td><?php echo $favor['description']; ?></td>
    	    		<td><?php echo $favor['click_count']; ?></td>
    	    		<td><?php echo $favor['content_id']; ?></td>
    	    		<td class="actions">
    	    			<?php echo $this->Html->link(__('View Item'), array('controller' => 'items', 'action' => 'view', $favor['item_id'])); ?>
    	    			<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'favors', 'action' => 'delete', $favor['id']), null, __('Are you sure you want to delete # %s?', $favor['id'])); ?>
    	    		</td>
    	    	</tr>
    	    <?php endforeach; ?>
    	    </table>
        <?php endif; ?>
    </div>
    <div class="related">
    	<h3><?php echo __('Likes'); ?></h3>
    	<?php if (!empty($user['Like'])): ?>
    	    <table cellpadding = "0" cellspacing = "0">
    	    <tr>
    	    	<th><?php echo __('Id'); ?></th>
    	    	<th><?php echo __('User Id'); ?></th>
    	    	<th><?php echo __('Item Id'); ?></th>
    	    	<th><?php echo __('Description'); ?></th>
    	    	<th class="actions"></th>
    	    </tr>
    	    <?php
    	    	$i = 0;
    	    	foreach ($user['Like'] as $like): ?>
    	    	<tr>
    	    		<td><?php echo $like['id']; ?></td>
    	    		<td><?php echo $like['user_id']; ?></td>
    	    		<td><?php echo $like['item_id']; ?></td>
    	    		<td><?php echo $like['description']; ?></td>
    	    		<td class="actions">
    	    			<?php echo $this->Html->link(__('View Item'), array('controller' => 'items', 'action' => 'view', $like['item_id'])); ?>
    	    			<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'likes', 'action' => 'delete', $like['id']), null, __('Are you sure you want to delete # %s?', $like['id'])); ?>
    	    		</td>
    	    	</tr>
    	    <?php endforeach; ?>
    	    </table>
        <?php endif; ?>
    </div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li> </li>
		<li><?php echo $this->Html->link(__('List Favors'), array('controller' => 'favors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('List Likes'), array('controller' => 'likes', 'action' => 'index')); ?> </li>
	</ul>
</div>

<div class="users view">
    <h2><?php echo $user['User']['username'] ?></h2>
    <p>email: <?php echo $user['User']['email'] ?></p>
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
		<li><?php echo $this->Html->link(__('Edit Profile'), array('controller' => 'users', 'action' => 'edit')); ?> </li>
		<li><?php echo $this->Html->link(__('List Favors'), array('controller' => 'favors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('List Likes'), array('controller' => 'likes', 'action' => 'index')); ?> </li>
	</ul>
</div>

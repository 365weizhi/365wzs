<div class="contents view">
<h2><?php  echo __('Content'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($content['Content']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($content['Content']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($content['User']['username'], array('controller' => 'users', 'action' => 'view', $content['User']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Content'), array('action' => 'edit', $content['Content']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Content'), array('action' => 'delete', $content['Content']['id']), null, __('Are you sure you want to delete # %s?', $content['Content']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Contents'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Content'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Favors'), array('controller' => 'favors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Favor'), array('controller' => 'favors', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Favors'); ?></h3>
	<?php if (!empty($content['Favor'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Item Id'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Click Count'); ?></th>
		<th><?php echo __('Content Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($content['Favor'] as $favor): ?>
		<tr>
			<td><?php echo $favor['id']; ?></td>
			<td><?php echo $favor['user_id']; ?></td>
			<td><?php echo $favor['item_id']; ?></td>
			<td><?php echo $favor['description']; ?></td>
			<td><?php echo $favor['click_count']; ?></td>
			<td><?php echo $favor['content_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'favors', 'action' => 'view', $favor['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'favors', 'action' => 'edit', $favor['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'favors', 'action' => 'delete', $favor['id']), null, __('Are you sure you want to delete # %s?', $favor['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Favor'), array('controller' => 'favors', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Items'); ?></h3>
	<?php if (!empty($content['Item'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Num Iid'); ?></th>
		<th><?php echo __('Nick'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Cid'); ?></th>
		<th><?php echo __('Content Id'); ?></th>
		<th><?php echo __('Click Url'); ?></th>
		<th><?php echo __('Shop Click Url'); ?></th>
		<th><?php echo __('Pic Url'); ?></th>
		<th><?php echo __('Thumb'); ?></th>
		<th><?php echo __('Price'); ?></th>
		<th><?php echo __('Item Location'); ?></th>
		<th><?php echo __('Commission Rate'); ?></th>
		<th><?php echo __('Commission'); ?></th>
		<th><?php echo __('Commission Num'); ?></th>
		<th><?php echo __('Commission Volume'); ?></th>
		<th><?php echo __('Volume'); ?></th>
		<th><?php echo __('Click Count'); ?></th>
		<th><?php echo __('Rank'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($content['Item'] as $item): ?>
		<tr>
			<td><?php echo $item['id']; ?></td>
			<td><?php echo $item['num_iid']; ?></td>
			<td><?php echo $item['nick']; ?></td>
			<td><?php echo $item['title']; ?></td>
			<td><?php echo $item['cid']; ?></td>
			<td><?php echo $item['content_id']; ?></td>
			<td><?php echo $item['click_url']; ?></td>
			<td><?php echo $item['shop_click_url']; ?></td>
			<td><?php echo $item['pic_url']; ?></td>
			<td><?php echo $item['thumb']; ?></td>
			<td><?php echo $item['price']; ?></td>
			<td><?php echo $item['item_location']; ?></td>
			<td><?php echo $item['commission_rate']; ?></td>
			<td><?php echo $item['commission']; ?></td>
			<td><?php echo $item['commission_num']; ?></td>
			<td><?php echo $item['commission_volume']; ?></td>
			<td><?php echo $item['volume']; ?></td>
			<td><?php echo $item['click_count']; ?></td>
			<td><?php echo $item['rank']; ?></td>
			<td><?php echo $item['description']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'items', 'action' => 'view', $item['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'items', 'action' => 'edit', $item['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'items', 'action' => 'delete', $item['id']), null, __('Are you sure you want to delete # %s?', $item['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>

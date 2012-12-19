<div class="categories view">
<h2><?php  echo __('Category'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($category['Category']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($category['Category']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nick'); ?></dt>
		<dd>
			<?php echo h($category['Category']['nick']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Category'), array('action' => 'edit', $category['Category']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Category'), array('action' => 'delete', $category['Category']['id']), null, __('Are you sure you want to delete # %s?', $category['Category']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Categories'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Items'); ?></h3>
	<?php if (!empty($category['Item'])): ?>
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
		foreach ($category['Item'] as $item): ?>
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

<div class="items view">
<h2><?php  echo __('Item'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($item['Item']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Num Iid'); ?></dt>
		<dd>
			<?php echo h($item['Item']['num_iid']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nick'); ?></dt>
		<dd>
			<?php echo h($item['Item']['nick']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($item['Item']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cid'); ?></dt>
		<dd>
			<?php echo h($item['Item']['cid']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Content Id'); ?></dt>
		<dd>
			<?php echo h($item['Item']['content_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Click Url'); ?></dt>
		<dd>
			<?php echo h($item['Item']['click_url']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Shop Click Url'); ?></dt>
		<dd>
			<?php echo h($item['Item']['shop_click_url']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pic Url'); ?></dt>
		<dd>
			<?php echo h($item['Item']['pic_url']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Thumb'); ?></dt>
		<dd>
			<?php echo h($item['Item']['thumb']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Price'); ?></dt>
		<dd>
			<?php echo h($item['Item']['price']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Item Location'); ?></dt>
		<dd>
			<?php echo h($item['Item']['item_location']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Commission Rate'); ?></dt>
		<dd>
			<?php echo h($item['Item']['commission_rate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Commission'); ?></dt>
		<dd>
			<?php echo h($item['Item']['commission']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Commission Num'); ?></dt>
		<dd>
			<?php echo h($item['Item']['commission_num']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Commission Volume'); ?></dt>
		<dd>
			<?php echo h($item['Item']['commission_volume']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Volume'); ?></dt>
		<dd>
			<?php echo h($item['Item']['volume']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Click Count'); ?></dt>
		<dd>
			<?php echo h($item['Item']['click_count']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rank'); ?></dt>
		<dd>
			<?php echo h($item['Item']['rank']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($item['Item']['description']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Item'), array('action' => 'edit', $item['Item']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Item'), array('action' => 'delete', $item['Item']['id']), null, __('Are you sure you want to delete # %s?', $item['Item']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Items'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Categories'); ?></h3>
	<?php if (!empty($item['Category'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($item['Category'] as $category): ?>
		<tr>
			<td><?php echo $category['id']; ?></td>
			<td><?php echo $category['name']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'categories', 'action' => 'view', $category['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'categories', 'action' => 'edit', $category['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'categories', 'action' => 'delete', $category['id']), null, __('Are you sure you want to delete # %s?', $category['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>

<div class="items index">
	<h2><?php echo __('Items'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('num_iid'); ?></th>
			<th><?php echo $this->Paginator->sort('nick'); ?></th>
			<th><?php echo $this->Paginator->sort('title'); ?></th>
			<th><?php echo $this->Paginator->sort('cid'); ?></th>
			<th><?php echo $this->Paginator->sort('content_id'); ?></th>
			<th><?php echo $this->Paginator->sort('click_url'); ?></th>
			<th><?php echo $this->Paginator->sort('shop_click_url'); ?></th>
			<th><?php echo $this->Paginator->sort('pic_url'); ?></th>
			<th><?php echo $this->Paginator->sort('thumb'); ?></th>
			<th><?php echo $this->Paginator->sort('price'); ?></th>
			<th><?php echo $this->Paginator->sort('item_location'); ?></th>
			<th><?php echo $this->Paginator->sort('commission_rate'); ?></th>
			<th><?php echo $this->Paginator->sort('commission'); ?></th>
			<th><?php echo $this->Paginator->sort('commission_num'); ?></th>
			<th><?php echo $this->Paginator->sort('commission_volume'); ?></th>
			<th><?php echo $this->Paginator->sort('volume'); ?></th>
			<th><?php echo $this->Paginator->sort('click_count'); ?></th>
			<th><?php echo $this->Paginator->sort('rank'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($items as $item): ?>
	<tr>
		<td><?php echo h($item['Item']['id']); ?>&nbsp;</td>
		<td><?php echo h($item['Item']['num_iid']); ?>&nbsp;</td>
		<td><?php echo h($item['Item']['nick']); ?>&nbsp;</td>
		<td><?php echo h($item['Item']['title']); ?>&nbsp;</td>
		<td><?php echo h($item['Item']['cid']); ?>&nbsp;</td>
		<td><?php echo h($item['Item']['content_id']); ?>&nbsp;</td>
		<td><?php echo h($item['Item']['click_url']); ?>&nbsp;</td>
		<td><?php echo h($item['Item']['shop_click_url']); ?>&nbsp;</td>
		<td><?php echo h($item['Item']['pic_url']); ?>&nbsp;</td>
		<td><?php echo h($item['Item']['thumb']); ?>&nbsp;</td>
		<td><?php echo h($item['Item']['price']); ?>&nbsp;</td>
		<td><?php echo h($item['Item']['item_location']); ?>&nbsp;</td>
		<td><?php echo h($item['Item']['commission_rate']); ?>&nbsp;</td>
		<td><?php echo h($item['Item']['commission']); ?>&nbsp;</td>
		<td><?php echo h($item['Item']['commission_num']); ?>&nbsp;</td>
		<td><?php echo h($item['Item']['commission_volume']); ?>&nbsp;</td>
		<td><?php echo h($item['Item']['volume']); ?>&nbsp;</td>
		<td><?php echo h($item['Item']['click_count']); ?>&nbsp;</td>
		<td><?php echo h($item['Item']['rank']); ?>&nbsp;</td>
		<td><?php echo h($item['Item']['description']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $item['Item']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $item['Item']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $item['Item']['id']), null, __('Are you sure you want to delete # %s?', $item['Item']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Item'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
	</ul>
</div>

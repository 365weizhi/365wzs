<?php
foreach($favors as $favor){
    echo "Content Name: ".$favor['Content']['name']."<br>";
    echo "Favor description: ".$favor['Favor']['description']."<br>";
    echo "Item Detail".$favor['Item']['title']."<br>";
    echo "--------------------------------------<br>";
}

echo "Detail data structure:<br>";
pr($favors[0]);
?>

<!--
<div class="favors index">
	<h2><?php echo __('Favors'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('item_id'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('click_count'); ?></th>
			<th><?php echo $this->Paginator->sort('content_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($favors as $favor): ?>
	<tr>
		<td><?php echo h($favor['Favor']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($favor['User']['username'], array('controller' => 'users', 'action' => 'view', $favor['User']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($favor['Item']['title'], array('controller' => 'items', 'action' => 'view', $favor['Item']['id'])); ?>
		</td>
		<td><?php echo h($favor['Favor']['description']); ?>&nbsp;</td>
		<td><?php echo h($favor['Favor']['click_count']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($favor['Content']['name'], array('controller' => 'contents', 'action' => 'view', $favor['Content']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $favor['Favor']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $favor['Favor']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $favor['Favor']['id']), null, __('Are you sure you want to delete # %s?', $favor['Favor']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Favor'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Contents'), array('controller' => 'contents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Content'), array('controller' => 'contents', 'action' => 'add')); ?> </li>
	</ul>
</div>
-->

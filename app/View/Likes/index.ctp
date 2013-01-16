<div id="cascade-container">
    <?php foreach ($likes as $like) { ?>
        <div class="image-block">
            <div class="image">
            <a href="<?php echo $this->webroot."items/view/".$like['Item']['id'];?>">
                <img src="
                <?php 
                	if(empty($like['Item']['pic_url']))
                		echo $this->webroot."img/default.jpg";
                	else 
                		echo $like['Item']['pic_url']; 
                ?>
                " alt="" 
                />
            </a>
            </div>
            <div class="image-info">
                <?php 
                	echo $like['Like']['description'];
                ?>
            </div>
        </div>
    <?php } ?>
</div>







































<!--
<div class="likes index">
	<h2><?php echo __('Likes'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('item_id'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($likes as $like): ?>
	<tr>
		<td><?php echo h($like['Like']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($like['User']['username'], array('controller' => 'users', 'action' => 'view', $like['User']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($like['Item']['title'], array('controller' => 'items', 'action' => 'view', $like['Item']['id'])); ?>
		</td>
		<td><?php echo h($like['Like']['description']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $like['Like']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $like['Like']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $like['Like']['id']), null, __('Are you sure you want to delete # %s?', $like['Like']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Like'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add')); ?> </li>
	</ul>
</div>
-->

<div class="favors view">
<h2><?php  echo __('Favor'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($favor['Favor']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($favor['User']['username'], array('controller' => 'users', 'action' => 'view', $favor['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Item'); ?></dt>
		<dd>
			<?php echo $this->Html->link($favor['Item']['title'], array('controller' => 'items', 'action' => 'view', $favor['Item']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($favor['Favor']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Click Count'); ?></dt>
		<dd>
			<?php echo h($favor['Favor']['click_count']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Content'); ?></dt>
		<dd>
			<?php echo $this->Html->link($favor['Content']['name'], array('controller' => 'contents', 'action' => 'view', $favor['Content']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Favor'), array('action' => 'edit', $favor['Favor']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Favor'), array('action' => 'delete', $favor['Favor']['id']), null, __('Are you sure you want to delete # %s?', $favor['Favor']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Favors'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Favor'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Contents'), array('controller' => 'contents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Content'), array('controller' => 'contents', 'action' => 'add')); ?> </li>
	</ul>
</div>

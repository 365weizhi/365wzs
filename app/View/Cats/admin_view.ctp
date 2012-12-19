<div class="cats view">
<h2><?php  echo __('Cat'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($cat['Cat']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($cat['Cat']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Cat'), array('action' => 'edit', $cat['Cat']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Cat'), array('action' => 'delete', $cat['Cat']['id']), null, __('Are you sure you want to delete # %s?', $cat['Cat']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Cats'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cat'), array('action' => 'add')); ?> </li>
	</ul>
</div>

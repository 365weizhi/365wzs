<div class="items form">
<?php echo $this->Form->create('Item'); ?>
	<fieldset>
		<legend><?php echo __('Add Item'); ?></legend>
	<?php
		echo $this->Form->input('num_iid');
		echo $this->Form->input('nick');
		echo $this->Form->input('title');
		echo $this->Form->input('cid');
		echo $this->Form->input('content_id');
		echo $this->Form->input('click_url');
		echo $this->Form->input('shop_click_url');
		echo $this->Form->input('pic_url');
		echo $this->Form->input('thumb');
		echo $this->Form->input('price');
		echo $this->Form->input('item_location');
		echo $this->Form->input('commission_rate');
		echo $this->Form->input('commission');
		echo $this->Form->input('commission_num');
		echo $this->Form->input('commission_volume');
		echo $this->Form->input('volume');
		echo $this->Form->input('click_count');
		echo $this->Form->input('rank');
		echo $this->Form->input('description');
		echo $this->Form->input('Category');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Items'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
	</ul>
</div>

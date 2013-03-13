<form method="post">
    <label class="control-label">Description:</label>
    <textarea name="description"></textarea>

    <label class="control-label">Contents:</label>
    <select name="content_id">
        <?php
        foreach($contents as $content){
            echo "<option value='".$content['Content']['id']."'>".$content['Content']['name']."</option>";
        }
        ?>
    </select>

    <br />
    <button class="btn" type="submit" >Submit</button>
</form>

<!--
<?php echo $this->Form->create('Favor'); ?>
	<fieldset>
		<legend><?php echo __('Add Favor'); ?></legend>
	<?php
		echo $this->Form->input('user_id');
		echo $this->Form->input('item_id');
		echo $this->Form->input('description');
		echo $this->Form->input('click_count');
		echo $this->Form->input('content_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
-->


<!--
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Favors'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Contents'), array('controller' => 'contents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Content'), array('controller' => 'contents', 'action' => 'add')); ?> </li>
	</ul>
</div>
-->

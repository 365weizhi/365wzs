<?php
    $user = $User['User'];
?>

<form enctype="multipart/form-data" method="post">
  <fieldset>
	
    <legend>用户信息</legend>

    <label>昵称</label>
    <input type="text" name="nickname" placeholder="<?php echo $user['nickname']; ?>">
<!-- 
    <label>密码</label>
    <input type="password" name="password" placeholder="要改密码么...">
 -->
    <label>邮箱</label>
    <input type="email" name="email" value="<?php echo $user['email']; ?>">

    <label>性别</label>
    <input type="text" name="gender" value="<?php echo $user['gender']; ?>">

	<label>心情</label>
	<input type="text" name="description" value="<?php echo $user['description'];?>">
	
	<label>生日</label>
	<input type="text" name="birthdate" value="<?php echo $user['birthdate']; ?>">
	
	<label>地址</label>
	<input type="text" name="address" value="<?php echo $user['address']; ?>">
	
	
	<label>修改头像</label>
	<!-- 前端js判断是否png，jpg等，再看看是否需要显示缩略图 -->
	<input type="file" name="pic_url" />
	
    <br />
    <button type="submit" class="btn btn-block">好啦</button>
  </fieldset>
</form>






















<!--
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Edit User'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('username');
		echo $this->Form->input('password');
		echo $this->Form->input('email');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>


<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('User.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('User.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Contents'), array('controller' => 'contents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Content'), array('controller' => 'contents', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Favors'), array('controller' => 'favors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Favor'), array('controller' => 'favors', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Likes'), array('controller' => 'likes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Like'), array('controller' => 'likes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Messages'), array('controller' => 'messages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Message'), array('controller' => 'messages', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Posts'), array('controller' => 'posts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Post'), array('controller' => 'posts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Profiles'), array('controller' => 'profiles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Profile'), array('controller' => 'profiles', 'action' => 'add')); ?> </li>
	</ul>
</div>
-->

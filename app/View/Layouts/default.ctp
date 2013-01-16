<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('cake.generic');
		echo $this->Html->css('bootstrap.min');
		echo $this->Html->css('zero');

        echo $this->Html->script('jquery-1.8.3.min');
        echo $this->Html->script('jquery.masonry.min');
        //echo $this->Html->script('bootstrap.min');
		echo $this->Html->script('zero');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
    <div class="navbar navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container">
                <?php echo $this->Html->link('365未知数', array('controller'=>'main', 'action'=>'index'), array('class'=>'brand'))?>
                <ul class="nav pull-right">
                    <li class="active"><a href="#">专刊</a></li>
                    <li><a href="#">小组</a></li>
                    <li><a href="#">消息</a></li>
                    <?php
                        if ($this->Session->check('username') && $this->Session->check('user_id')) {
                            $username = $this->Session->read('username');
                            echo '<li>' . $this->Html->link($username, array('controller'=>'users', 'action'=>'view')) . '</li>';
                            echo '<li>' . $this->Html->link('注销', array('controller'=>'users', 'action'=>'logout')) . '</li>';
                        } else {
                            echo '<li>' . $this->Html->link('登陆', array('controller'=>'users', 'action'=>'login')) . '</li>';
                            echo '<li>' . $this->Html->link('注册', array('controller'=>'users', 'action'=>'register')).'</li>';
                        }
                    ?>
                    <!--
                    <li><?php echo $this->Html->link('登陆', array('controller'=>'users', 'action'=>'login')); ?></li>
                    <li><?php echo $this->Html->link('注册', array('controller'=>'users', 'action'=>'register')); ?></li>
                    -->
                </ul>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="tabbable tabbable-fixed">
            <ul class="nav nav-tabs">
                <li><a href="<?php echo $this->webroot."categories";?>" data-toggle="tab">未知专刊</a></li>
                <li><a href="<?php echo $this->webroot."shares"?>" data-toggle="tab">分享天地</a></li>
                <li><a href="<?php echo $this->webroot."contentfavors"?>" data-toggle="tab">特色专刊</a></li>
                <li><a href="<?php echo $this->webroot."contents"?>" data-toggle="tab">我的专刊</a></li>
                <li><a href="<?php echo $this->webroot."likes"?>" data-toggle="tab">偷偷喜欢</a></li>
                <li><a href="#tab3" data-toggle="tab">未知小组</a></li>
                <li><a href="#tab4" data-toggle="tab">未知达人</a></li>
                <li><a href="#tab5" data-toggle="tab">探索未知</a></li>
                <li><a href="#tab6" data-toggle="tab">官方活动</a></li>
            </ul>
        </div>

		<div id="content">
			<?php echo $this->Session->flash(); ?>
			<?php echo $this->fetch('content'); ?>
		</div>

        <hr />
        
		<footer>
            <p class="muted">All rights reserved by 365wzs &copy; 2012~2013</p>
		</footer>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>

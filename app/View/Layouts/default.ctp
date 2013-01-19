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

		// echo $this->Html->css('cake.generic');
		echo $this->Html->css('bootstrap.min');
		echo $this->Html->css('helper');
		echo $this->Html->css('365wzs');

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
    <div id="header">
        <div id="logo">
            <h1>365</h1>
        </div>
        <div id="navigator">
            <div class="item">
                <a><?php echo $this->Html->image('home.png') ?></a>
                <p>首页</p>
            </div>
            <div class="item">
                <a><?php echo $this->Html->image('share.png') ?></a>
                <p>分享天地</p>
            </div>
            <div class="item">
                <a><?php echo $this->Html->image('unknown.png') ?></a>
                <p>未知专刊</p>
            </div>
            <div class="item">
                <a><?php echo $this->Html->image('special.png') ?></a>
                <p>特色专刊</p>
            </div>
            <div class="item">
                <a><?php echo $this->Html->image('group.png') ?></a>
                <p>未知小组</p>
            </div>
            <div class="item">
                <a><?php echo $this->Html->image('superman.png') ?></a>
                <p>分享达人</p>
            </div>
            <div class="item">
                <a><?php echo $this->Html->image('discover.png') ?></a>
                <p>发现未知</p>
            </div>
            <div class="item">
                <a><?php echo $this->Html->image('activity.png') ?></a>
                <p>官方活动</p>
            </div>
        </div>
    </div>
    <div id="container">
		<div id="content">
			<?php echo $this->Session->flash(); ?>
			<?php echo $this->fetch('content'); ?>
		</div>

        <hr />
        
		<div id="footer">
            <p class="muted">All rights reserved by 365wzs &copy; 2012~2013</p>
		</footer>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>

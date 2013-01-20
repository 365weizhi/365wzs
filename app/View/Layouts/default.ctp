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
		echo $this->Html->css('lightbox');
		echo $this->Html->css('widgets');
		echo $this->Html->css('365wzs');

        // Libraries.
        echo $this->Html->script('vendor/jquery-1.8.3.min');
        echo $this->Html->script('vendor/jquery.masonry.min');
        //echo $this->Html->script('bootstrap.min');
        echo $this->Html->script('vendor/spin.min');
        echo $this->Html->script('vendor/jquery.spin');
        echo $this->Html->script('vendor/underscore-min');

        // User defined.
        echo $this->Html->script('zhelper');
        echo $this->Html->script('lightbox');
        echo $this->Html->script('spinner');

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
        <div id="user-panel">
            <?php if($this->Site->username() == '') { ?>
                <a href="<?php echo $this->webroot.'users/register'; ?>">注册</a>
                <a href="<?php echo $this->webroot.'users/login'; ?>">登陆</a>
            <?php } else { ?>
                <a href="<?php echo $this->webroot.'users/view/'.$this->Site->user_id(); ?>"><?php echo $this->Site->username(); ?></a>
                <a href="<?php echo $this->webroot.'users/logout'; ?>">注销</a>
            <?php } ?>
        </div>
        <div id="navigator">
            <div class="item <?php if($this->request->params['controller'] == 'main') echo 'active'; ?>">
                <a href="<?php echo $this->webroot.'main'; ?>">
                    <?php echo $this->Html->image('home.png') ?>
                    <p>首页</p>
                </a>
            </div>
            <div class="item <?php if($this->request->params['controller'] == 'shares') echo 'active'; ?>">
                <a href="<?php echo $this->webroot.'shares'; ?>">
                    <?php echo $this->Html->image('share.png') ?>
                    <p>分享天地</p>
                </a>
            </div>
            <div class="item">
                <a>
                    <?php echo $this->Html->image('unknown.png') ?>
                    <p>未知专刊</p>
                </a>
            </div>
            <div class="item <?php if($this->request->params['controller'] == 'contentfavors') echo 'active'; ?>">
                <a href="<?php echo $this->webroot.'contentfavors'; ?>">
                    <?php echo $this->Html->image('special.png') ?>
                    <p>特色专刊</p>
                </a>
            </div>
            <div class="item">
                <a>
                    <?php echo $this->Html->image('group.png') ?>
                    <p>未知小组</p>
                </a>
            </div>
            <div class="item">
                <a>
                    <?php echo $this->Html->image('superman.png') ?>
                    <p>分享达人</p>
                </a>
            </div>
            <div class="item">
                <a>
                    <?php echo $this->Html->image('discover.png') ?>
                    <p>发现未知</p>
                </a>
            </div>
            <div class="item">
                <a>
                    <?php echo $this->Html->image('activity.png') ?>
                    <p>官方活动</p>
                </a>
            </div>
        </div>
    </div>
    <div id="slider">
        <div id="slide-wrapper">
            <div class="slide">
                <div class="content">
                </div>
                <div class="image">
                </div>
            </div>
        </div>
    </div>
    <div id="container">
		<div id="content">
            <div id="message"><?php echo $this->Session->flash(); ?></div>
			<?php echo $this->fetch('content'); ?>
		</div>

        <hr />
        
		<div id="footer">
            <p class="muted">All rights reserved by 365wzs &copy; 2012~2013</p>
		</footer>
	</div>
	<?php echo $this->element('sql_dump'); ?>

    <?php
		echo $this->Html->script('zero');

		echo $this->Site->username();
		echo $this->Site->user_id();
    ?>
</body>
</html>

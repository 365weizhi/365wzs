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
</head>
<body>
    <div id="header">
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
            <div class="item index <?php if($this->request->params['controller'] == 'main') echo 'active'; ?>">
                <a href="<?php echo $this->webroot; ?>">首页</a>
            </div>
            <div class="item contentfavors <?php if($this->request->params['controller'] == 'contentfavors') echo 'active'; ?>">
                <a href="<?php echo $this->webroot.'contentfavors'; ?>">特色专刊</a>
            </div>
            <div class="item shares <?php if($this->request->params['controller'] == 'shares') echo 'active'; ?>">
                <a href="<?php echo $this->webroot.'shares'; ?>">分享天地</a>
            </div>
            <div class="item groups <?php if($this->request->params['controller'] == 'groups' || $this->request->params['controller'] == 'forums') echo 'active'; ?>">
                <a href="<?php echo $this->webroot.'groups'; ?>">未知小组</a>
            </div>
            <div class="item">
                <a>分享达人</a>
            </div>
            <div class="item">
                <a>发现未知</a>
            </div>
            <div class="item">
                <a>官方活动</a>
            </div>
        </div>
    </div>

    <div id="lightbox-wrapper">
        <div id="lightbox"></div>
    </div>
    <div id="zexpo">
        <script type="text/template" id="expo-item">
            <a href="/365wzs/items/view/<%= id %>"><img class="post-image" src="<%= pic_url %>" alt="" /></a>
            <a class="operation at"><?php echo $this->Html->image('at.png') ?></a>
            <a class="operation like"><?php echo $this->Html->image('like.png') ?></a>
            <a class="operation share"><?php echo $this->Html->image('share.png') ?></a>
        </script>
    </div>

    <?php 
    	if($this->request->params['controller'] == "main"){
    ?>
    <?php 
    	}
    ?>
    <div id="container">
        <div id="message"><?php echo $this->Session->flash(); ?></div>
	    <?php echo $this->fetch('content'); ?>
	</div>
	<?php
		echo $this->Html->meta('icon');

		// echo $this->Html->css('cake.generic');
		echo $this->Html->css('bootstrap.min');
		echo $this->Html->css('helpers');
		echo $this->Html->css('layout');
		echo $this->Html->css('lightbox');
		echo $this->Html->css('widgets');
		echo $this->Html->css('365wzs');
		echo $this->Html->css('content-favors');
		echo $this->Html->css('view');
		echo $this->Html->css('user');
		echo $this->Html->css('expo');
		echo $this->Html->css('login');

        // Libraries.
        echo $this->Html->script('../vendor/jquery-1.8.3.min');
        echo $this->Html->script('../vendor/jquery.masonry.min');
        //echo $this->Html->script('bootstrap.min');
        echo $this->Html->script('../vendor/spin.min');
        echo $this->Html->script('../vendor/jquery.spin');
        echo $this->Html->script('../vendor/underscore-min');
        echo $this->Html->script('../vendor/backbone-min');

        // User defined.
		echo $this->Html->script('app');
		echo $this->Html->script('router');

        echo $this->Html->script('helpers');
        echo $this->Html->script('lightbox');

        echo $this->Html->script('models/post');
        echo $this->Html->script('models/simple_user');
        echo $this->Html->script('collections/posts');
        echo $this->Html->script('collections/simple_users');
        echo $this->Html->script('views/post');
        echo $this->Html->script('views/zexpo');
        echo $this->Html->script('views/simple_user');
        echo $this->Html->script('views/simple_users');
        echo $this->Html->script('views/user_basic_info');
        echo $this->Html->script('views/detail_post');
        echo $this->Html->script('views/detail_posts');
        echo $this->Html->script('views/user_detail_info');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>

    <!--
	<?php echo $this->element('sql_dump'); ?>
    -->
</body>
</html>

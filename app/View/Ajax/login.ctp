<form class="zform" action="/365wzs/users/login" method="post">
  <h1 class="main-title">登陆到365</h1>
  <h2 class="sub-title">365天，天天有新鲜</h2>

  <fieldset>
	<input type="hidden" name="redirect" value="<?php echo $redirect;?>" >
    <br />
    <input type="text" name="username" placeholder="求芳名...">
    <br />
    <input type="password" name="password" placeholder="求密码...">
    <br />
    <input id="remember" type="checkbox" /><label for="remember">记住密码</label>
    <button type="submit" class="btn btn-block">求验证</button>
  </fieldset>

  <div class="options">
    <span>用其它方式登陆</span>
    <a href="" class="option"><?php echo $this->Html->image('weibo.png') ?></a>
    <a href="" class="option"><?php echo $this->Html->image('qq.png') ?></a>
  
    <br />
    <strong>还没有账号？</strong>
    <a href="<?php echo $this->webroot.'users/register'; ?>" class="login-option">去注册</a>
  </div>
</form>

<h1 class="main-title">加入到365</h1>
<h2 class="sub-title">365天，天天有新鲜</h2>

<form class="zform" method="post">
  <fieldset>
    <br />
    <input type="text" name="username" placeholder="求芳名...">
    <br />
    <input type="password" name="password" placeholder="求密码...">
    <br />
    <input type="email" name="email" placeholder="求邮箱...">

    <label for="agree"><input id="agree" type="checkbox" />我同意365未知数的服务条款</label>
    <div>
        <button type="submit" class="btn">好啦</button>
    </div>
  </fieldset>
</form>

<div class="options">
  <span>用其它方式快速注册</span>
  <a href="" class="option"><?php echo $this->Html->image('weibo.png') ?></a>
  <a href="" class="option"><?php echo $this->Html->image('qq.png') ?></a>

  <strong>已经有账号？</strong>
  <a href="<?php echo $this->webroot.'users/login'; ?>" class="login-option">去登陆</a>
</div>

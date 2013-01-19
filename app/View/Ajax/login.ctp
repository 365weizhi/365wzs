<form action="<?php echo $this->webroot."ajax/login";?>" class="zform" method="post">
  <fieldset>
    <legend>登陆</legend>

    <label>用户名</label>
    <input type="text" name="username" placeholder="求芳名...">

    <label>密码</label>
    <input type="password" name="password" placeholder="求密码...">

    <br />
    <button type="submit" class="btn btn-block">求验证</button>
  </fieldset>
</form>

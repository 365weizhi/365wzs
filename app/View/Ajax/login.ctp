<form action="<?php echo $this->webroot."ajax/login";?>" class="zform" method="post">
  <fieldset>
    <legend>登陆</legend>
	<input type="hidden" name="redirect" value="<?php echo $redirect;?>">
    <input type="text" name="username" placeholder="求芳名...">
    <input type="password" name="password" placeholder="求密码...">

    <br />
    <button type="submit" class="btn btn-block">求验证</button>
  </fieldset>
</form>

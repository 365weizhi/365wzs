<form method="post">
  <fieldset>
    <legend>登陆</legend>
	<input type="hidden" name="redirect" value="<?php echo $redirect;?>" >
    <br />
    <input type="text" name="username" placeholder="求芳名...">
    <br />
    <input type="password" name="password" placeholder="求密码...">
    <br />
    <button type="submit" class="btn btn-block">求验证</button>
  </fieldset>
</form>

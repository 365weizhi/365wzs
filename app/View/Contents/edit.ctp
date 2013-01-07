<form method="post">
  <fieldset>
    <legend>修改专刊</legend>
    <pre>后续添加修改专刊图片的功能。</pre>
    <label>专刊名称</label>
    <input type="text" name="name" placeholder="求芳名..." value="<?php echo $content['Content']['name'];?>">

    <label>专刊描述</label>
    <input type="text" name="description" placeholder="求描述..."value="<?php echo $content['Content']['description'];?>">

    <div>
        <button type="submit" class="btn">确定了</button>
    </div>
  </fieldset>
</form>

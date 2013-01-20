<form class="zform" method="post">
    <input type="hidden" name="user_id" value="<?php echo $user_id;?>"/>
    <input type="hidden" name="item_id" value="<?php echo $item_id;?>"/>

    <input type="text" id="#notice_user_id" name="notice_user_id" placeholder="通知谁呀?" />
    <textarea id="#message" name="message" placeholder="求消息..." /></textarea>
    <button class="btn btn-block" type="submit">好啦</button>
</form>

<form method='post'>
    <input type='hidden' value='<?php echo $uid;?> name='user_id'/>
    <input type='hidden' value='<?php echo $item_id;?>' name='item_id'/>
    <label class='control-label'>Description:</label>
    <textarea name='description'></textarea>

    <label class='control-label'>Contents:</label>
    <select name='content_id'>
    	<?php 
        foreach($contents as $content){
            echo "<option value='".$content['Content']['id']."'>".$content['Content']['name']."</option>";
        }
        ?>
	</select>
	<br />
    <button class='btn' type='submit' >Submit</button>
</form>

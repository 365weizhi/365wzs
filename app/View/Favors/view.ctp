<!-- 涉及用户增删改查的问题后续修改 -->

<?php 
foreach($contents as $content){
	echo "<br>===============<br>";
	echo $content['User']['username'];
	echo $content['Content']['name'];
	echo "商品数量:".sizeof($content['Item']);
	echo "<br>===============<br>";
}
?>
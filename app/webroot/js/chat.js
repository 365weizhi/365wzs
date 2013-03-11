$(function(){
	chat.init("2","main-panel", "side-panel");
	$("#message-send").click(function(){
		/**
		 * 记得判断fellow是否存在
		 * 还有message是否为空
		 */
		var message = $("textarea#message-content").val();
		chat.sendMessage(message);
	});

});
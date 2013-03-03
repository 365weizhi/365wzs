/**
 * Chat room
 */
var host = "http://localhost:3000";
var socket = io.connect(host);
var user_id = "2";

$.ajax({
	url: '/365wzs/users/users',
	success: function(data){
		var users = eval(data);
		
		for(var i = 0; i < users.length; i ++){
			/*
			 * 获得用户头像信息
			 * users[img]
			 */
			var li;
			if(users[i].User.id == user_id)
				continue;
			
			li = "<div class='chat-room-row'>"+
				 "<img class='chat-room-avatar' src='#' />" +
				 "<div>" +
				 "<input type='hidden' value='"+ users[i].User.id +"' />" +
				 "<span>" + users[i].User.username+ "</span>" +
				 "</div>";
			$(".chat-room").append(li);
		}
		$(".chat-room-row").click(function(){
			var li;
			var username = $(this).find("span").text();
			var fellow_id = $(this).find("input").val();

			socket.emit("chat-request", {fellow_id: fellow_id, user_id: user_id});
			
			$("input#id").val(fellow_id);
			$("input#name").val(username);
		})
	}
});
$(function(){
	$("#message-send").click(function(){
		var fellow_id = $("input#id").val();
		var message = $("textarea#message").val();
		/**
		 * 记得判断fellow是否存在
		 * 还有message是否为空
		 */
		console.log(message);
		console.log("fellow"+fellow_id);
		console.log("user_id"+user_id);
		
		socket.emit('chat-send-request', {user_id: user_id, fellow_id: fellow_id, message: message});
	});
	
	$("#message-count").click(function(){
		console.log("tet");
	});
});

socket.on('chat-send-response', function(data){
	console.log(data);
});	

socket.on('chat-response', function(data){
	// 添加历史数据
	console.log(data);
	li = "<div>"+data.history+"</div>";
	$("ul#history-message li").append(li);
	
});

socket.emit('chat-new-request', {user_id: user_id});
socket.on('chat-new-response', function(data){
	console.log(data);
	for(var row in data.history.content){
		console.log(row);
		console.log(data.history.content[row]);
	}
});

socket.emit('chat-status-request', {user_id: user_id});
socket.on('chat-status-response', function(data){
	$("#message-count").text("有"+data.count+"条未读私信");
});

/*
// limit means current unread
var limit = 3;
socket.emit('chat-read-request', {user_id: user_id, limit: limit});
socket.on('chat-read-request', function(data){
	console.log(data);
});
*/
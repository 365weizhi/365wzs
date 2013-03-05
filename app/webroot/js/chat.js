/**
 * Chat room
 */
var host = "http://localhost:3000";
var socket = io.connect(host);

var user = {
	user_id: "4",
	username: "origin"
}
var fellow = {
	user_id: "",
	username: ""
}

var userlist = {};

socket.on('error', function(data){
	console.log(data);
	socket.disconnect();
})

socket.on('connect', function () {
	console.log("connect");
	// 发送id,在服务器端保存登陆信息
	socket.emit("user-connect", { user_id: user.user_id });
});

$(function(){
	$("#test-submit").click(function(){
		user.user_id = $("#test-id").val();
		socket.emit("user-connect", { user_id: user.user_id });
		getSide();
	});
	
});

$(function(){
	$("#message-send").click(function(){
		/**
		 * 记得判断fellow是否存在
		 * 还有message是否为空
		 */
		var message = $("textarea#message-content").val();
		//第二个参数表示当前说话的人
		socket.emit('chat-send-request', {user_id: user.user_id, fellow_id: fellow.user_id, message: message});
	});
	
	$("#message-count").click(function(){
		
	});
});

// Socket bellow
$(function(){
	socket.on('chat-send-response', function(data){
		// 发送成功之后将发送的信息添加到信息面板
		append_new_message(user.user_id, data.message);
	});	
	
	socket.on('chat-notice-request', function(data){
		// 修改信息状态
		console.log(data);
		// 当前聊天的是发送方
		if(fellow.user_id == data.from){
			append_new_message(fellow.user_id, data.message);
			socket.emit('chat-notice-response', {user_id: user.user_id, fellow_id: fellow.user_id});
		}
	});
	
	socket.on('chat-notice-response', function(data){
		$(".chat-status").text("已读");
		console.log(data);
	});
	
	socket.on('chat-history-response', function(data){
		$(".chat-msg").remove();
		if(data.code == "success"){
			append_history_messages(data);
			// 阅读历史数据也要将数据设置为已读
			socket.emit('chat-notice-response', {user_id: user.user_id, fellow_id: fellow.user_id});
		}
		else {
			alert("无记录");//$("message-history").text("暂无聊天记录");
		}
	});

	socket.on('chat-status-response', function(data){
		//$("#message-count").text("有"+data.count+"条未读私信");
	});
});



function getLocalTime(nS) {   
	return new Date(parseInt(nS)).toLocaleString().replace(/年|月/g, "-").replace(/日/g, "").replace(/下午/g, "");
}

function getSide(){
	$.ajax({
		url: '/365wzs/users/users',
		success: function(data){
			var users = eval(data);
			for(var i = 0; i < users.length; i ++){
				// 将用户添加进用户列表
				userlist[users[i].User.id] = users[i].User.username;
				
				// 获得用户头像信息  users[img]
				var side = $(".side-panel");
				if(users[i].User.id == user.user_id)
					continue;
				
				
				var row = $("<div></div>")
					.addClass("chat-room-row");
				$("<img />")
					.addClass("chat-room-avatar")
					.attr("src", '/365wzs/img/loiter.png')
					.appendTo(row);
				$("<p></p>")
					.text(users[i].User.id)
					.hide()
					.appendTo(row);
				$("<span></span>")
					.addClass("chat-text")
					.text(users[i].User.username)
					.appendTo(row);
				
				row.click(function(){
					fellow.user_id = $(this).find("p").text();
					fellow.username = $(this).find("span").text();
					console.log(fellow);
					socket.emit("chat-history-request", {user_id:user.user_id, fellow_id: fellow.user_id});
					});
					row.appendTo(side);
				}
			}
	});
}

function append_history_messages(data){

	var message = "";
	var new_n = "";
	var total_n = "";
	if(user.user_id-fellow.user_id>0){
		new_n = data.history['new_2'];
		total_n = data.history['total_2'];
	}
	else {
		new_n = data.history['new_1'];
		total_n = data.history['total_1'];
	}

	var rows_count = 0;
	for(var content in data.history.content){
		var rows = data.history.content[content];
		// 对象数组内的值
		for(var msg in rows){
			message = rows[msg];
			msg = msg.split(":");
			var status = "已读";
			var username = userlist[msg[0]];
			
			if(user.user_id == msg[0]){
				username = "";
				rows_count ++;
				if(rows_count > total_n - new_n + 1)
					status = "未读";
			}
			else {
				status = "";
			}
			
			var row = $("<div></div>")
				.addClass("chat-msg");
			if(status != ""){
				$("<span></span>")
					.addClass("chat-status")
					.text(status)
					.appendTo(row);	
			}
			$("<span></span>")
				.addClass("chat-time")
				.text(getLocalTime(msg[1]))
				.appendTo(row);	
			$("<span></span>")
				.addClass("chat-nick")
				.text(username)
				.appendTo(row);	
			$("<span></span>")
				.addClass("chat-text")
				.text(message)
				.appendTo(row);	
			row.appendTo($(".message-history"));
		}
	}
}

function append_new_message(id, message){
	for(var msg in message){
		message = message[msg];
		msg = msg.split(":");
		var status = "未读";
		var username = "";
		var row = $("<div></div>")
			.addClass("chat-msg");
		if(id == user.user_id){
			$("<span></span>")
				.addClass("chat-status")
				.text(status)
				.appendTo(row);	
		}
		else {
			var username = user.username;
		}
		$("<span></span>")
			.addClass("chat-time")
			.text(getLocalTime(msg[1]))
			.appendTo(row);	
		$("<span></span>")
			.addClass("chat-nick")
			.text(username)
			.appendTo(row);	
		$("<span></span>")
			.addClass("chat-text")
			.text(message)
			.appendTo(row);	
		row.appendTo($(".message-history"));
	}
}


/*

socket.on('chat-send-response', function(data){
	console.log(data);
});	


socket.emit('chat-status-request', {user_id: user_id});
socket.on('chat-status-response', function(data){
	$("#message-count").text("有"+data.count+"条未读私信");
});

/*
socket.emit('chat-new-request', {user_id: user_id});
socket.on('chat-new-response', function(data){
	console.log(data);
	for(var row in data.history.content){
		console.log(row);
		console.log(data.history.content[row]);
	}
});

socket.on('chat-response', function(data){
	// 添加历史数据
	console.log(data);
	li = "<div>"+data.history+"</div>";
	$("ul#history-message li").append(li);
	
});

// limit means current unread
var limit = 3;
socket.emit('chat-read-request', {user_id: user_id, limit: limit});
socket.on('chat-read-request', function(data){
	console.log(data);
});
*/
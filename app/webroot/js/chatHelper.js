var userlist = {};
var chat = {
	socket: '',
	user: {}, 
	fellow: {},
	user_url: "/365wzs/users/users",
	host: "http://localhost:3000",
	socket: '',
	main: '', 
	side: '',
	
	init: function(user_id, main, side){
		var _this = this;
		this.user.id = user_id;
		this.socket = io.connect(this.host);
		this.main = $("."+main);
		this.side = $("."+side);
		
		this.socket.on('connect', function () {
			console.log("connect");
			_this.socket.emit("user-connect", { user_id: _this.user.id });
		});
		
		$.ajax({
			url: _this.user_url,
			success: function(data){
				var users = eval(data);
				for(var i = 0; i < users.length; i ++){
					// 将用户添加进用户列表
					userlist[users[i].User.id] = users[i].User.username;
					
					// 获得用户头像信息  users[img]
					if(users[i].User.id == _this.user.id){
						_this.user.name = users[i].User.username;
						continue;
					}
					
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
						_this.fellow.id = $(this).find("p").text();
						_this.fellow.name = $(this).find("span").text();
						_this.socket.emit("chat-history-request", {user_id: _this.user.id, fellow_id: _this.fellow.id});
					});
					row.appendTo(_this.side);
				}
			}
		});
		
		this.setup();
	},
	setup: function(){
		var _this = this;
		this.socket.on('chat-send-response', function(data){
			// 发送成功之后将发送的信息添加到信息面板
			_this.append_new_message(_this.user.id, data.message);
		});	
		
		this.socket.on('chat-notice-request', function(data){
			if(_this.fellow.id == data.from){		// 当前聊天的是发送方
				_this.append_new_message(_this.fellow.id, data.message);
				_this.socket.emit('chat-notice-response', {user_id: _this.user.id, fellow_id: _this.fellow.id});	// emit 一个已读信息给服务器
			}
		});
		
		this.socket.on('chat-notice-response', function(data){
			if(data.fellow_id == _this.user.id)	// 当前聊天的是发送方
				$(".chat-status").text("已读");	// 默认一旦收到response信息就将所有状态设置为已读
		});
		
		this.socket.on('chat-history-response', function(data){
			$(".chat-msg").remove();
			if(data.code == "success"){
				_this.append_history_messages(data);	// 阅读历史数据也要将数据设置为已读
				_this.socket.emit('chat-notice-response', {user_id: _this.user.id, fellow_id: _this.fellow.id});
			}
			else {
				alert("无记录");
			}
		});
	},
	append_new_message: function(id, message){
		var _this = this;
		for(var msg in message){
			message = message[msg];
			msg = msg.split(":");
			var status = "未读";
			var username = "";
			var row = $("<div></div>")
				.addClass("chat-msg");
			if(id == _this.user.id){	//如果当前用户则显示状态不显示用户名
				$("<span></span>")
					.addClass("chat-status")
					.text(status)
					.appendTo(row);	
			}
			else {
				var username = _this.user.username;
			}
			$("<span></span>")
				.addClass("chat-time")
				.text(_this.getLocalTime(msg[1]))
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
	},
	append_history_messages: function(data){
		var _this = this;
		var message = "";
		var new_n = "";
		var total_n = "";

		var rows_count = 0;
		for(var content in data.history.content){
			if(_this.user.id-_this.fellow.id > 0){
				new_n = data.history['new_2'];
				total_n = data.history['total_2'];
			}
			else {
				new_n = data.history['new_1'];
				total_n = data.history['total_1'];
			}
			var rows = data.history.content[content];
			// 对象数组内的值
			for(var msg in rows){
				message = rows[msg];
				msg = msg.split(":");
				var status = "已读";
				var username = ""
				
				if(_this.user.id == msg[0]){
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
				if(msg[0] == _this.user.id){	//如果当前用户则显示状态不显示用户名
					$("<span></span>")
						.addClass("chat-status")
						.text(status)
						.appendTo(row);	
				}
				else {
					username = userlist[msg[0]];
				}
				$("<span></span>")
					.addClass("chat-time")
					.text(_this.getLocalTime(msg[1]))
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
	},
	sendMessage: function(message){
		var _this = this;
		//第二个参数表示当前说话的人
		_this.socket.emit('chat-send-request', {user_id: _this.user.id, fellow_id: _this.fellow.id, message: message});
	},
	getLocalTime: function(nS) {   
		return new Date(parseInt(nS)).toLocaleString().replace(/年|月/g, "-").replace(/日/g, "").replace(/下午/g, "");
	},
	log: function(){
		console.log(this.user);
	}
}
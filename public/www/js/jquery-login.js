$(document).ready(function(){
	$("body").css("overflow","hidden");
	var width = document.body.clientWidth;
	var height = document.body.scrollHeight;
	$("#bodyBg").css({
		"width":document.body.clientWidth,
		"height":document.body.scrollHeight,
		"background":"url(/www/images/login_bg.jpg)",
		"z-index":"1",
		"background-size":width*1.5+"px "+height*1.5+"px",
		"background-position-x":-(width*1.5-width)/2,
		"background-position-y":"-100px",
		"opacity":"1",
		
	});
	$("input").on("focus",function(){
		$(this).attr("placeholder","");
	})
	$(".login").css("margin-top",170/1080*height);
	document.onreadystatechange = function(){		
		if(document.readyState == "complete") 
			if(width/height > 1366/1000){
				$("#bodyBg").animate({"background-size":width,"background-position":"0px","background-position-y":"0px"},3000);
			
			}
			else{
				var bgwidth = height/1000*1366;
				$("#bodyBg").animate({"background-size":bgwidth,"background-position-y":"0px","background-position-x":"0px"},3000);
			}
	}
	$("#loginMain").css({
		"width":document.body.clientWidth,
		"height":document.body.scrollHeight,
		"position":"absolute",
		"top":"0px",
		"left":"0px",
		"z-index":"2"
	});
	$("#loginMain").css({
		"background":"rgb(0,0,0)",
		"opacity":"0.7",
	});
	$("#signButton").bind("click",function(){
		//$(".login_form").hide();
		$(".login_form").animate({left:-100,opacity:0},300,"swing",function(){
			$(".errorSign").html("");
			$(".login_form").hide();
			$(".sign_form").css({"display":"block"});
			$(".sign_form").animate({right:0,opacity:1},300);
		});
		
	});
	$("#loginButton").bind("click",function(){
		$(".sign_form").animate({right:-100,opacity:0},300,"swing",function(){
			$(".sign_form").hide();
			$(".login_form").css({"display":"block"});
			$(".login_form").animate({left:0,opacity:1},300);
			$(".errorSign").html("");
		});
	});
	$("#loginButton,#signButton").bind("click",function(){
		$("#loginButton,#signButton").removeClass("active");
		$(this).addClass("active");
		$(".login").animate({height:484},"slow");
		$("#login_password").parent().slideDown("slow");
		$("#forgetPasswordButton").fadeOut("slow",function(){
			$("#user_login").fadeIn("slow");
			$("#user_login").css("display","block");
			$(".errorSign").html("");
		});
	});
	$(".errorMessage").bind("click",function(){	
		$(".errorMessage").css("display","none");
		$("input").css("opacity","1");
		$(this).prev().select();
	})
	$(".forgetPassword").bind("click",function(){
		$("#login_password").parent().slideUp("slow");
		$(".login").animate({height:400},"slow");
		$("#user_login").fadeOut("slow",function(){
			$("#forgetPasswordButton").fadeIn("slow");
			$("#forgetPasswordButton").css("display","block");
			$(".errorSign").html("");
		});
		
	});
	$("#forgetPasswordButton").bind("click",function(){
		var mail = document.getElementById("login_username").value;
		$.ajax({       
			url : '/rpc/site/rpc.service',
			type : 'POST',
			contentType : "application/json;charset=utf-8",
			dataType : "json",
			data : $.toJSON({ 
				"method" : "login.forgetPwd",
				"params":[mail],
				"id" :  (new Date()).getTime()
			}),
			error : function(data) {
				alert("error");
			},
			success : function(data) {
				if(!data.result.authenticated){
					$("#login_username").next().html(data.result);
					$("#login_username").next().fadeIn(500);
					$("#login_username").css("opacity","0");
				}
				if (data.result === "success") {
					$(".errorSign").html("邮件已发送请注意查收");
					//window.location = "../home/discover"
				}
			}
		});	
	});
    $("#user_login").on("click",function(){
		var username = 	document.getElementById("login_username").value;
		var password = document.getElementById("login_password").value;
		if(username == ""){
			$("#login_username").next().html("请输入用户名");
			$("#login_username").next().fadeIn(500);
			$("#login_username").css("opacity","0");
			$("#login_username").animate({"box-shadow":"10px"},500);
		} else	if(password == ""){
			$("#login_password").next().html("请输入密码");
			$("#login_password").next().fadeIn(500);
			$("#login_password").css("opacity","0");
		} else{
			$.ajax({       
				url : '/rpc/site/rpc.service',
				type : 'POST',
				contentType : "application/json;charset=utf-8",
				dataType : "json",
				data : $.toJSON({ 
					"method" : "login.auth",
					"params":[username,password,""],
					"id" :  (new Date()).getTime()
				}),
				error : function(data) {
					alert("error");
				},
				success : function(data) {
					if(!data.result.authenticated){
						if (data.result.message === "") {
							document.location = data.result.nexturl;
							return false;
						//window.location = "../home/discover"
						}
						$("#login_password").next().html(data.result.message);
						$("#login_password").next().fadeIn(500);
						$("#login_password").css("opacity","0");
						$("#login_username").next().html(data.result.message);
						$("#login_username").next().fadeIn(500);
						$("#login_username").css("opacity","0");
					}
				}
			});	
		}
	});
	$(document).ready(function(e) {
		$("#user_sign").on("click",function(){
			var username = 	document.getElementById("sign_username").value;
			var password = document.getElementById("sign_password").value;
			var password2 = document.getElementById("sign_password2").value;
			var reg = /^([a-zA-Z0-9_\.\-])+@([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+\.[a-zA-Z]{2,3}$/ ;
			if(username == ''){
				$("#sign_username").next().html("请输入用户名");
				$("#sign_username").next().fadeIn(500);
				$("#sign_username").css("opacity","0");
				return false;
			}
			else if(!(reg.test(username))){
				$("#sign_username").next().html("邮箱地址不正确");
				$("#sign_username").next().fadeIn(500);
				$("#sign_username").css("opacity","0");
				return false;
			}
			if(password == password2){
				$(".errorSign").html("");
				var reg = /[a-zA-Z0-9]{6,16}/;
				if(!reg.test(password)){
					$("#sign_password").next().html("密码为6到16位");
					$("#sign_password").next().fadeIn(500);
					$("#sign_password").css("opacity","0");
					return false;
				}
				else{
					if(!/[a-zA-Z]/.test(password) || !/[0-9]/.test(password)){
						$("#sign_password").next().html("密码必须包含数字和字母");
						$("#sign_password").next().fadeIn(500);
						$("#sign_password").css("opacity","0");
						return false;
					}
					else{
						$.ajax({       
							url : '/rpc/site/rpc.service',
							type : 'POST',
							contentType : "application/json;charset=utf-8",
							dataType : "json",
							data : $.toJSON({ 
								"method" : "login.sign",
								"params":[username,password,""],
								"id" :  (new Date()).getTime()
							}),
							error : function(data) {
								alert(data);
							},
							success : function(data) {
								if(data.result === "success"){
									window.location.href="/"; 
								}
								else if(data.result === "confirm")
								{
									$("#sign_username").next().html("激活邮件已发送！");
									$("#sign_username").next().fadeIn(500);
									$("#sign_username").css("opacity","0");
								}
								else{
									$("#sign_username").next().html("用户名已经被注册");
									$("#sign_username").next().fadeIn(500);
									$("#sign_username").css("opacity","0");
								}
							}
						});
						
					}
				}
			}
			else{
				$("#sign_password").next().html("两次输入密码不一致");
				$("#sign_password").next().fadeIn(500);
				$("#sign_password").css("opacity","0");
				$("#sign_password2").next().html("两次输入密码不一致");
				$("#sign_password2").next().fadeIn(500);
				$("#sign_password2").css("opacity","0");
			}
		});
	});
})
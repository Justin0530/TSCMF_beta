<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="icon" href="favicon.ico" mce_href="/favicon.ico" type="image/x-icon">
    <meta name="renderer" content="webkit">
    <title>登录</title>
    <link href="{{WWW_PUBLIC_PATH}}/css/login.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="{{WWW_PUBLIC_PATH}}/js/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="{{WWW_PUBLIC_PATH}}/js/jquery.json-2.4.js"></script>
    <script type="text/javascript" src="{{WWW_PUBLIC_PATH}}/js/jquery-login.js"></script>
    <script type="text/javascript">
var browser={
versions:function(){
var u = navigator.userAgent, app = navigator.appVersion;
return {
trident: u.indexOf('Trident') > -1, //IE内核
presto: u.indexOf('Presto') > -1, //opera内核
webKit: u.indexOf('AppleWebKit') > -1, //苹果、谷歌内核
gecko: u.indexOf('Gecko') > -1 && u.indexOf('KHTML') == -1,//火狐内核
mobile: !!u.match(/AppleWebKit.*Mobile.*/), //是否为移动终端
ios: !!u.match(/\(i[^;]+;( U;)? CPU.+Mac OS X/), //ios终端
			android: u.indexOf('Android') > -1 || u.indexOf('Linux') > -1, //android终端或者uc浏览器
			iPhone: u.indexOf('iPhone') > -1 , //是否为iPhone或者QQHD浏览器
			iPad: u.indexOf('iPad') > -1, //是否iPad
			webApp: u.indexOf('Safari') == -1 //是否web应该程序，没有头部与底部
		};
	}(),
	language:(navigator.browserLanguage || navigator.language).toLowerCase()
}

if(browser.versions.mobile || browser.versions.iPhone || browser.versions.android){
    //window.location.href="http://www.hqc203.com/login/phoneindex.html";
}
else{
    document.write("<script src=\"{{WWW_PUBLIC_PATH}}/js/jquery-login.js\">"+"</scr"+"ipt>");
}
</script>
</head>
<body>
	<div id="bodyBg"></div>
	<div class="login" id="login">
		<div class="login_top">
			<div class="login_state">
				<div class="logo"></div>
				<div class="loginState">
					<div id="loginButton" class="loginButton active">登录</div>
					<div id="signButton" class="signButton">注册</div>
				</div>
			</div>
		</div>
		<div class="sign_form">
            <form name="signForm" id="signForm" action="" method="post" autocomplete="false">
                <div class="input">
                	<input onfocus="this.type='mail'" onblur="this.placeholder='请输入邮箱注册'" placeholder="请输入邮箱注册" id="sign_username" name="username"  value="" autocomplete="false" />
                	<div class="errorMessage"></div>
                </div>
                <div class="input">
                	<input onfocus="this.type='password'" onblur="this.placeholder='密码'" placeholder="密码" value=""  id="sign_password" name="password" autocomplete="false"/>
                	<div class="errorMessage"></div>
                </div>
                <div class="input">
                	<input onfocus="this.type='password'" onblur="this.placeholder='确认密码'" placeholder="确认密码" value="" id="sign_password2" name="password2" autocomplete="false"/>
                	<div class="errorMessage"></div>
                </div>
                <div class="signFormFoot input">
                	<input class="invitationCode" onfocus="this.type='text'" onblur="this.placeholder='邀请码'" placeholder="邀请码" id="sign_username" name="username"  value="" autocomplete="false" />
                	<button id="user_sign" type="button">注&nbsp;册</button>
                </div>

            </form>
        </div>
		<div class="login_form">
			<form name="signForm" id="loginForm" action="" method="post">
				<div class="input"><input type="mail"  onblur="this.placeholder='用户名/邮箱'"placeholder="用户名/邮箱" id="login_username" /><div class="errorMessage"></div></div>
				<div class="input"><input type="password" onblur="this.placeholder='密码'" placeholder="密码" id="login_password"/><div class="errorMessage"></div></div>
				<div class="forgetPassword">忘记密码了?</div>
				<button id="user_login" type="button">登录</button>
				<button id="forgetPasswordButton" type="button">找回密码</button>
			</form>
		</div>
	</div>
</body>
</html>


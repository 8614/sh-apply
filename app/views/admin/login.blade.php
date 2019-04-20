<!DOCTYPE html>
<head>
	<meta charset="utf-8" />
	<title>商户平台</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	<meta name="MobileOptimized" content="320">

	<link href="/assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
	<link href="/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
	<link href="/assets/css/style.css" rel="stylesheet" type="text/css"/>
	<link href="/assets/css/pages/login.css" rel="stylesheet" type="text/css"/>
	<link rel="stylesheet" type="text/css" href="/assets/css/number.css" />

	<link rel="shortcut icon" href="favicon.ico" />

</head>

<body class="login">
<div class="logo mgt60 wd615 ht165"></div>

<div class="content">

	<form class="login-form">
		<h3 class="form-title">登录你的账号</h3>
		<div class="alert alert-error hide">
			<button class="close" data-dismiss="alert"></button>
			<span>请输入用户名密码</span>
		</div>

		<div class="form-group">
			<label class="control-label visible-ie8 visible-ie9">手机号</label>
			<div class="input-icon">
				<i class="icon-phone"></i>
				<input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="手机号" name="phone" required id="phone" value="{{Input::get('phone', '')}}"/>
			</div>
		</div>

		<div class="form-group">
			<label class="control-label visible-ie8 visible-ie9">密码</label>
			<div class="input-icon">
				<i class="icon-lock"></i>
				<input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="密码" name="password" value="{{Input::get('password', '')}}" id="password"/>
			</div>
		</div>


		<div class="form-actions">
			<div class="btn btn-danger pull-right submit mgt14 wd100p">登录</div>
		</div>
	</form>

</div>

	<script src="/assets/plugins/jquery-1.10.2.min.js" type="text/javascript"></script>
	<script src="/assets/scripts/login.js" type="text/javascript"></script>


	<script>

		$(function(){

			//点击登录
			$('.submit').click(function(){
				var phone = $('#phone').val();
				var reg = /^1[3|4|5|7|8][0-9]\d{8}$/;
				var password=$('#password').val();
				if(!phone){
					alert('请填写手机号');
					return false;
				}

				if (!reg.test(phone)) {
					alert('您输入的手机号码格式不正确，请输入正确的手机号码');
					return false;
				}

				if(!code){
					alert('请输入手机验证码');
					return false;
				}

				if (!storeName) {
				    alert('请输入商户号');
					return false;
				}

				$.ajax({
					type: "post",
					url: "{{action('admin.doLogin')}}",
					data: "phone="+phone+"&password="+password,
					async:false,
					dataType: "json",
					success:function(data) {
						if (data['results']['status'] == 1) { //验证成功
							window.location.href = "{{action('admin.index')}}";

						}else{
							alert(data['results']['message']);
							return false;
						}
					},
					error:function(){
						alert('网络出现错误了请重试！');
						return false;
					}
				});
			});
		})
	</script>
@if(Session::has('alert'))
	<script>alert("{{Session::get('alert')}}")</script>
@endif
</body>
</html>

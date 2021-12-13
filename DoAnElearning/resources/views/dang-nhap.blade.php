
<!DOCTYPE HTML>
<html>
<head>
<title>Đăng nhập</title>
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->

<link href="{{asset('style.css')}}" rel="stylesheet" type="text/css" media="all"/>
<!-- for-mobile-apps -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<meta name="keywords" content="Classy Login form Responsive, Login form web template, Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<!-- //for-mobile-apps -->
<!--Google Fonts-->
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700' rel='stylesheet' type='text/css'>
</head>
<body>
<form action="" method="POST">
        @csrf
<!--header start here-->
<div class="header">
		<div class="header-main">
		       <h1>E-Learning </h1>
			<div class="header-bottom">
				<div class="header-right w3agile">
					
					<div class="header-left-bottom agileinfo">
						
					 <form action="{{route('xl-dang-nhap')}}" method="post">
						<input type="text"  value="Tên tài khoản" name="ten_tai_khoan" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Tên tài khoản';}"/>
                        <span class="required">*</span>
                        @error('ten_dang_nhap')
                    <span>{{$message}}</span>
                        @enderror
					    <input type="password"  value="Password" name="mat_khau" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'password';}"/>
                        <span class="required">*</span>
                        @error('mat_khau')
                         <span>{{$message}}</span>
                        @enderror
						<div class="remember">
			            
						 <div class="forgot">
						 	<h6><a href="#">Quên mật khẩu?</a></h6>
						 </div>
						<div class="clear"></div>
					  </div>
						<input type="submit" value="Đăng nhập">
					</form>			
				</div>
				</div>
			</div>
		</div>
</div>
</form>
</body>
</html>

<!DOCTYPE HTML>
<html>
<head>
<title>Đăng nhập</title>
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->

<link href="<?php echo e(asset('style.css')); ?>" rel="stylesheet" type="text/css" media="all"/>
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
        <?php echo csrf_field(); ?>
<!--header start here-->
<div class="header">
		<div class="header-main">
		       <h1>E-Learning </h1>
			<div class="header-bottom">
				<div class="header-right w3agile">
					
					<div class="header-left-bottom agileinfo">
						
					 <form action="<?php echo e(route('xl-dang-nhap')); ?>" method="post">
						<input type="text"  value="Tên tài khoản" name="ten_tai_khoan" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Tên tài khoản';}"/>
                        <span class="required">*</span>
                        <?php $__errorArgs = ['ten_dang_nhap'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
					    <input type="password"  value="Password" name="mat_khau" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'password';}"/>
                        <span class="required">*</span>
                        <?php $__errorArgs = ['mat_khau'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                         <span><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
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
</html><?php /**PATH C:\Users\admin\doanElearning\DoAnElearning\resources\views/dang-nhap.blade.php ENDPATH**/ ?>
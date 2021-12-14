<p><a href="{{route('dang-xuat')}}">Thoát</a></p>
<!DOCTYPE html>
<html lang="">

<head>
<title>Foxclore</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
<div class="bgded overlay" style="background-image:url('images/backgrounds/01.jpg');"> 
  <header id="header" class="hoc clear"> 
    <div id="logo" class="one_quarter first">
      <h1><a href="index.html">Elearning</a></h1>
    </div>
    <div class="three_quarter">
      <ul class="nospace clear">
        <li class="one_quarter first">
          <div class="block clear"><a href="#"><i class="fas fa-envelope"></i></a> <span><strong>Email</strong> {{auth()->user()->email}}</span></div>
        </li>
        <li class="one_third">
          <div class="block clear"><a href="#"><i class="fa fa-user-circle"></i></a> <span><strong>Tên người dùng</strong> {{auth()->user()->ten_nguoi_dung}}</span></div>
        </li>
        <li class="one_third">
          <div class="block clear"><a href="#"><i class="fas fa-clock"></i></a> <span><strong> Ngày Tháng Năm:</strong><div id="date"></div></span></div>
        </li>
      </ul>
    </div>
  </header>
  
  <section id="navwrapper" class="hoc clear"> 
   
    <nav id="mainav">
      <ul class="clear">
        <li class="active"><a href="{{route('index')}}">Home</a></li>
        <li><a href="#">Lớp Học</a></li>
        <li><a href="#">Giảng Viên</a></li> <--ds,them, sua, xoa,noi bang-->
        <li><a href="#">Sinh Viên</a></li> <-- ds,them, sua, xoa,noi bang-->
      </ul>
    </nav>
    <div id="searchform">
      <div>
        <form action="#" method="post">
          <fieldset>
            <legend>Quick Search:</legend>
            <input type="text" placeholder="Enter search ">
            <button type="submit"><i class="fas fa-search"></i></button>
          </fieldset>
        </form>
      </div>
    </div>
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>
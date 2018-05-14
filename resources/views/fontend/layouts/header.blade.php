<html>
<head>
	<title>App Name - @yield('title')</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('public/fontend/bootstrap/css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('public/fontend/style.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('public/fontend/fontawesome/css/font-awesome.min.css') }}">
	<script type="text/javascript" src="{{ asset('public/fontend/bootstrap/js/jquery.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('public/fontend/bootstrap/js/bootstrap.min.js') }}"></script>
	<!-- CAROUSEL -->
	<link rel="stylesheet" type="text/css" href="{{ asset('public/fontend/carousel/assets/owl.carousel.min.css') }}">
	<script type="text/javascript" src="{{ asset('public/fontend/carousel/owl.carousel.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('public/fontend/js/main.js') }}"></script>

</head>
<body>
	<header>
		<div class="container header-top">
			<div class="col-sm-3">
				<img src="https://vncpost.com/images/logo.png" class="img-responsive">
			</div>
			<div class="col-sm-9">
				<div class="input-group search-input-group">
					<input type="text" class="form-control input-search" placeholder="Nhập mã đơn hàng để tra cứu lịch sử ..." >
					
				</div>
			</div>
		</div>
		<div class="main-menu">
			<div class="container-fluid">
				<nav class="navbar navbar-default">
					<div class="container">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="collapse navbar-collapse" id="navbar-collapse-1">
							<ul class="nav navbar-nav">
								<li class="active"><a href="#">TRANG CHỦ</a></li>
								<li><a href="#">GIỚI THIỆU </a></li>
								<li><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">DỊCH VỤ <span class="caret"></span></a>
									<ul class="dropdown-menu">
							            <li><a href="#">Action</a></li>
							            <li><a href="#">Another action</a></li>
							            <li><a href="#">Something else here</a></li>
							            <li role="separator" class="divider"></li>
							            <li><a href="#">Separated link</a></li>
							            <li role="separator" class="divider"></li>
							            <li><a href="#">One more separated link</a></li>
							          </ul>
								</li>
								<li><a href="#">TIN TỨC </a></li>
								<li><a href="#">TUYỂN DỤNG </a></li>
							</ul>
							<div class="navbar-text navbar-right create_order"><a href="#" class="navbar-link">ĐĂNG ĐƠN HÀNG</a></div>
						</div>
					</div>
				</nav>

			</div>
		</div>
	</header>
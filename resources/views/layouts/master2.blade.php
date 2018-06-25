<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Web Title - @yield('title')</title><!--Khai bao tieu de cho tung trang rieng-->
	@include('includes.header')
</head>
<body>
	<!--Xay dung cau truc chung cho cac trang-->
	<div class="container">
		<div class="col-md-12">
			@include('includes.menu')
		</div>
		<div class="col-md-3">
			@include('includes.sidebar')
		</div>
		<div class="col-md-9">
			@yield('noidung')
		</div>
		<div class="col-md-12">
				@include('includes.footer')
		</div>
	</div>
</body>
</html>
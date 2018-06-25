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
		<!--Menu-->
		<div>
			@include('includes.menu')
		</div>
		<!--Vung noi dung-->
		<div>
			@yield('noidung')
		</div>
		<!--footer-->
		@include('includes.footer')
	</div>
</body>
</html>
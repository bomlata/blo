{{-- <div class="header clearfix" style="margin-top: 1%;margin-bottom: 1%;">
	<nav>
		<ul class="nav nav-pills">
			<li class="">
				<a href="{{ url('home') }}">Home</a>
			</li>
			<li {{ Request::is('about*') ? ' class="active"' : null }}>
				<a href="{{ url('about') }}">About Us</a>
			</li>
			<li>
				<a href="{{ url('contact') }}">Contact</a>
			</li>
		</ul>
	</nav>
</div>
 --}}
<!-- Latest compiled and minified CSS & JS -->
{{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"> --}}

<nav class="navbar navbar-default" role="navigation">
	<div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">Home</a>

		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse navbar-ex1-collapse">
			<ul class="nav navbar-nav navbar-right">
				<li>
				<a href="">Contact Manager</a>
			</li>
			<li>
				<a href="" class="dropdown-toggle" data-toggle="Category Manager">Category Manager<span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li><a href="#">Category Manager 1</a></li>
			        <li><a href="#">Category Manager 2</a></li>
			        <li><a href="#">Category Manager 3</a></li>
			        <li role="separator" class="divider"></li>
					<li><a href="#">Category Manager 4</a></li>
				</ul>
			</li>
			<li>
				<a href="" class="dropdown-toggle" data-toggle="Post Manager">Post<span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li><a href="{!!URL::to('post')!!}">All Post</a></li>
			        <li><a href="{!!URL::to('admin/post/create')!!}">Post Create</a></li>
			        <li><a href="{!!URL::to('home')!!}">Trang Chu</a></li>
				</ul>
			</li>
			<li>
				<a href="" class="dropdown-toggle" data-toggle="Tag Manager">Author<span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li><a href="{!!URL::to('author')!!}">All Author</a></li>
			        <li><a href="{!!URL::to('author/create')!!}">Author Create</a></li>
				</ul>
			</li>
			<li>
				<a href="" class="dropdown-toggle" data-toggle="User Manager">Support<span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li><a href="{!!URL::to('support')!!}">All Support</a></li>
			        <li><a href="{!!URL::to('support/create')!!}">Support Create</a></li>
			        <li><a href="#">User Manager 3</a></li>
			        <li role="separator" class="divider"></li>
					<li><a href="#">User Manager 4</a></li>
				</ul>
			</li>
			<li>
				<a href="#" class="dropdown-toggle" data-toggle="Mr">Mr...<span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li><a href="#">Mr 1</a></li>
			        <li><a href="#">Mr 2</a></li>
			        <li><a href="#">Mr 3</a></li>
			        <li role="separator" class="divider"></li>
					<li><a href="#">Mr 4</a></li>
				</ul>
			</li>
			</ul>
		</div><!-- /.navbar-collapse -->
	</div>
</nav>




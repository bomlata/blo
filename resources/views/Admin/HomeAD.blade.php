<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <title>Admin</title>
    
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/metisMenu.min.css') }}">

    <link rel="stylesheet" href="{{ URL::asset('css/timeline.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/startmin.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/morris.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/font-awesome.min.css') }}">


    <script src="{{ URL::asset('js/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('js/metisMenu.min.js') }}"></script>
    <script src="{{ URL::asset('js/raphael.min.jss') }}"></script>
    <script src="{{ URL::asset('js/morris.min.js') }}"></script>
    <script src="{{ URL::asset('js/morris-data.js') }}"></script>
    <script src="{{ URL::asset('js/js.js') }}"></script>
    <script src="{{ URL::asset('startmin.js') }}"></script>
    <script src="{{ URL::asset('ckeditor/ckeditor.js') }}" ></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Admin</a>
        </div>

        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>

        <!-- Top Navigation: Left Menu -->
        <ul class="nav navbar-nav navbar-left navbar-top-links">
            <li><a href="#"><i class="fa fa-home fa-fw"></i> Website</a></li>
        </ul>

        <!-- Top Navigation: Right Menu -->
        <ul class="nav navbar-right navbar-top-links">
            <li class="dropdown navbar-inverse">
                
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                   {{ Auth::user()->name }} <span class="caret"></span>
                </a>
                
                <ul class="dropdown-menu">
                     <li><a href="{!!URL::to('logout')!!}"><span class="    glyphicon glyphicon-log-out"></span> Đăng Xuất</a>
                     </li>       
                </ul>
             </li>
        </ul>

        <!-- Sidebar -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">

                <ul class="nav" id="side-menu">
                    <li class="sidebar-search">
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                    <button class="btn btn-primary" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                        </div>
                    </li>
                    <li>
                        <a href="{!!URL::to('admin/dashboard')!!}" class="active"><i class="fa fa-dashboard fa-fw"></i>Dashboard</a>
                    </li>
                    <li>
                        <a href="{!!URL::to('admin/post')!!}" class="active"><i class="fa fa-dashboard fa-fw"></i> Danh Sách</a>
                    </li>
                    <li>
                        <a href="{!!URL::to('admin/post/create')!!}"><i class="fa fa-sitemap fa-fw"></i> Thêm Tin Tức</a>
                        <ul class="nav nav-second-level">
                            @if(Auth::user()->id == 3 )
                             <li>
                                <a href="{!!URL::to('admin/loaitin/create')!!}">Add Loại Tin</a>
                            </li>
                            @endif
                            <li>
                                <a href="{!!URL::to('admin/danhsachuser')!!}">User</a>
                            </li>
                            
                        </ul>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
    @yield('PageAd')
    
</body>
</html>

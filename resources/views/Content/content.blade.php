<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <base href="{{asset('')}}">
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/shop-homepage.css" rel="stylesheet">
    <link href="css/my.css" rel="stylesheet">
    <style>
        .img-responsive1{

            height: 500px;
            width: 850px;
        }
        .title1{
          white-space: nowrap;
          overflow: hidden; 
          text-overflow: ellipsis;
          max-width: 400px;
            }
            .container {
     width: 1280px;
}
    </style>
</head>

<body>

    <!-- Navigation -->
    <nav class=" navbar-fixed-top" role="navigation">
        @extends('layouts.header')
    
        @section('header')

        <!-- /.container -->
    </nav>
    <!-- Page Content -->
    <div class="container">
        <div class="row">

            
            <div class="col-lg-8" style="width: 950">

                <h1>{{$post['title']}}</h1>

                <img class="img-responsive1" src="Update/Product/{{$post->image}}"" alt="">

                <!-- Date/Time -->
                <p><span class="glyphicon glyphicon-time"></span> {{$post['created_at']}}</p>
                <hr>

                <!-- Post Content -->
                <div class="panel-body">
                    
                
                <p>{{$post['content']}}</p>
                </div>
              

                <!-- Blog Comments -->

                <!-- Comments Form -->
                @if(Auth::check())
                <div class="well">
                    <span class="glyphicon glyphicon-pencil">Viết Bình Luận</span>
                    
                 {!! Form::open(['route'=>'Comment.store',$post->id]) !!}
                {!!csrf_field()!!}
                    {!! Form::hidden( 'idTinTuc', $post->id, []) !!}
                    {{-- {!! Form::hidden('post_id', $post_id, ['class'=>'form-control']) !!} --}}
                    {!! Form::textarea('comment', '', ['class'=>'form-control']) !!}
                    {!! Form::submit('Add comment', ['class'=>'btn btn-default']) !!}
                    {!! Form::close() !!}
                </div>
                @endif

                <hr>

                <h4>Các Bình Luận</h4>
                @foreach($post->comments as $binhluan)
                <div class="media">
                    <a class="pull-left" href="#">
                        <img class="media-object" src="http://placehold.it/64x64" alt="">
                    </a>
                    <div class="media-body">
                        {{-- {{$binhluan->us->name}} --}}
                        <h4 class="media-heading">
                            <p>{{$binhluan->user->name}}
                            <small>{!! $binhluan->created_at->diffForHumans() !!}</small>
                            </p>
                        </h4>
                         <p>
                                {!!$binhluan->comment!!} -  
                            </p>
                    </div>
                </div>
                @endforeach

                
            </div>
         
            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading"><b>Tin liên quan</b></div>
                    @foreach($tinlienquan as $tt)
                    <div class="panel-body">

                        <!-- item -->
                        <div class="row" ">
                            <div class="col-md-5">
                                <a href="{!!URL::to('content',$tt->id)!!}">
                                    <img height="100" width="100" class="img-responsive" src="Update/Product/{{$tt->image}}" alt="">
                                </a>
                            </div>
                            <div class="col-md-7 ">
                                <h4 style="font-size: 22px;"><a href="{!!URL::to('content',$tt->id)!!}">{{$tt->title}}</a></h4>
                            </div>
                            <p >Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            <div class="break"></div>
                        </div>

                    </div>
                    @endforeach
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading"><b>Tin nổi bật</b></div>
                    <div class="panel-body">

                        <!-- item -->
                        <div class="row" style="margin-top: 10px;">
                            <div class="col-md-5">
                                <a href="detail.html">
                                    <img class="img-responsive" src="image/320x150.png" alt="">
                                </a>
                            </div>
                            <div class="col-md-7">
                                <a href="#"><b>Project Five</b></a>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            <div class="break"></div>
                        </div>
                        <!-- end item -->

                        <!-- item -->
                        <div class="row" style="margin-top: 10px;">
                            <div class="col-md-5">
                                <a href="detail.html">
                                    <img class="img-responsive" src="image/320x150.png" alt="">
                                </a>
                            </div>
                            <div class="col-md-7">
                                <a href="#"><b>Project Five</b></a>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            <div class="break"></div>
                        </div>
                        <!-- end item -->

                        <!-- item -->
                        <div class="row" style="margin-top: 10px;">
                            <div class="col-md-5">
                                <a href="detail.html">
                                    <img class="img-responsive" src="image/320x150.png" alt="">
                                </a>
                            </div>
                            <div class="col-md-7">
                                <a href="#"><b>Project Five</b></a>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            <div class="break"></div>
                        </div>
                        <!-- end item -->

                        <!-- item -->
                        <div class="row" style="margin-top: 10px;">
                            <div class="col-md-5">
                                <a href="detail.html">
                                    <img class="img-responsive" src="image/320x150.png" alt="">
                                </a>
                            </div>
                            <div class="col-md-7">
                                <a href="#"><b>Project Five</b></a>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            <div class="break"></div>
                        </div>
                        <!-- end item -->
                    </div>
                </div>
                
            </div>

        </div>
        <!-- /.row -->
    </div>
    <!-- end Page Content -->

    <!-- Footer -->
    <hr>
    <footer>
        <div class="row">
            <div class="col-md-12">
                <p>Copyright &copy; Your Website 2014</p>
            </div>
        </div>
    </footer>
    @endsection
    <!-- end Footer -->
    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/my.js"></script>

</body>

</html>

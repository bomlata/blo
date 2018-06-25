<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>Laravel Khoa Pham</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/shop-homepage.css" rel="stylesheet">
    <link href="css/my.css" rel="stylesheet">

    <script>$(".abc").each(function(){if ($(this).text().length > 10) {$(this).text($(this).text().substr(0, 10));$(this).append('...');}});</script>
    <style>
  .border { 
    display: inline-block;
    width: 100px;
    height: 70px;
    margin: 6px;
  }
  .panel2{

    border-bottom: 2px solid #289dcc;
    font-size: 18px;
   
    padding-bottom: 5px;
    }
    .abc{
  white-space: nowrap;
  overflow: hidden; 
  text-overflow: ellipsis;
  max-width: 400px;
    }
    .panel3{
      border: 1px solid #F0F8FF;
    }
    }
    .panel2{
      border: 1px solid #289dcc;
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

      <!-- slider -->
      <div class="row carousel-holder">
            <div class="col-md-12">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner" style="height: 500px;">
                        <div class="item active" >
                            <img class="slide-image" src="Update/Product/26229848_421790638242534_3155198512812968521_n.jpg" alt="">
                        </div>
                        <div class="item">
                            <img class="slide-image" src="Update/Product/26229848_421790638242534_3155198512812968521_n.jpg" alt="">
                        </div>
                        <div class="item">
                            <img class="slide-image" src="Update/Product/26229848_421790638242534_3155198512812968521_n.jpg" alt="">
                        </div>
                    </div>
                    <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                </div>
            </div>
        </div>
        <!-- end slide -->

        <div class="space20"></div>

        <div class="row main-left">
          
            <div class="col-md-3 ">
                <ul class="list-group" id="menu">
                    <li href="#" class="list-group-item menu1 active">
                      Thể Loại
                    </li>
                    @foreach($loaitin as $lt)
                    <li href="" class="list-group-item menu1">
                      <a href="{!!URL::to('loaitin',$lt->id)!!} " title="">{{$lt->tenloaitin}}</a>
                    </li>
                    @endforeach
                </ul>
            </div>
            
            <div class="col-md-9">
              <div class="panel panel-default">            
                <div class="panel-heading" style="background-color:#337AB7; color:white;" >
                  <h2 style="margin-top:0px; margin-bottom:0px;">Laravel Tin Tức</h2>
                </div>

                  @foreach($loaitin as $lt)<!-- item -->
                  <div class="panel">
                      <h3 class="panel2" >
                          <span style="background-color:#337AB7;padding: 6px 12px; "><a style="color: #F8F8FF;" href="" title="">{{$lt->tenloaitin}}</a></span>
                      </h3>
                    <?php
                      $data = $lt->posts->sortByDesc('create_at')->where('status',0)->take(5);
                      $tin1 = $data->shift();
                    ?>
                      
                      {{-- @foreach($lt->posts as $po) --}}
                      <div class="col-md-4 border-right">
                        <div class="panel panel-default">
                          <div class="panel" style="width: 240px; height: 130px;">
                            <img width="245" height="152" src="Update/Product/{{$tin1['image']}}">
                          </div>
                          <div class="panel">
                            <h3><a style="font-size: 20px;" class="panel" href="{!!URL::to('content',$tin1->id)!!}" title="">{{$tin1['title']}}</a>
                            </h3>
                            <p  class="abc" href="" title="">{{$tin1['content']}}
                              </p>
                              
                          </div>
                      </div>
              </div>

              @foreach($data->all() as $posts)
              <div class="col-md-2">
                <div class="panel2" style="width: 100px; height: 80px;">
                      <img width="120" height="80" src="Update/Product/{{$posts->image}}">
                </div>
              </div>
              <div class="col-md-5">
                <div class="panel3" style="width: 300px;height:90px;">
                   <h3 style="font-size: 20px;">
                  <a href="{!!URL::to('content',$posts->id)!!}">
                  {{$posts->title}}
                </a>
                </h3>
                </div>
               
              </div>
              @endforeach
              <div class="break"></div>
                    </div>
                    {{-- @endforeach --}}
                    @endforeach<!-- end item -->
                    
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
  
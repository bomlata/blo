<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        #remove{
            color: red;
        }
        #ok{
            color: blue;
        }
        .glyphicon{
        	font-size: 45px;
        }
        #gly{
        	font-size: 20px;
        }
    </style>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.css">
  
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script>

    @extends('Admin.HomeAD')
    
    @section('PageAd')

        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                  
                    <div class="form-group">
        @if (session('ketqua'))
        <div class="col-sm-9 mx-auto">
            <div class="alert alert-success" role="alert">
                <strong>{{ session('ketqua') }}</strong></a>.
            </div>
        </div>
        @endif

    có {{$post->count()}}
    <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Dashboard</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="glyphicon glyphicon-pencil"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">{{$post->count()}}</div>
                                        <div>Bài Viết</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i id="gly" class="glyphicon glyphicon-circle-arrow-right"></i></span>

                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="glyphicon glyphicon-tasks"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">{{$loaitin->count()}}</div>
                                        <div>Category</div>
                                    </div>
                                </div>
                            </div>
                            <a href="{!!URL::to('admin/loaitin')!!}">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i id="gly" class="glyphicon glyphicon-circle-arrow-right"></i></span>

                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i id="comment" class="glyphicon glyphicon-comment"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">{{$comment->count()}}</div>
                                        <div>Comment!</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i id="gly" class="glyphicon glyphicon-circle-arrow-right"></i></span>

                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="glyphicon glyphicon-user"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">{{Auth::user()->count()}}</div>
                                        <div>User!</div>
                                    </div>
                                </div>
                            </div>
                            <a href="{!!URL::to('admin/danhsachuser')!!}">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i id="gly" class="glyphicon glyphicon-circle-arrow-right"></i></span>

                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                
                <!-- /.row -->
            </div>
</div>

    @endsection
</body>
</html>

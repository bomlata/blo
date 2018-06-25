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

     <div id="page-wrapper">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Danh Sách</h1>
                    <div class="form-group">
        @if (session('ketqua'))
        <div class="col-sm-9 mx-auto">
            <div class="alert alert-success" role="alert">
                <strong>{{ session('ketqua') }}</strong></a>.
            </div>
        </div>
        @endif
    </div>
    <div class="form-group">

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                  
                    <th>Title</th>
                    <th>Tác giả </th>
                    <th>Content</th>
                    <th>Xét Duyệt</th>
                      <th>Ảnh</th>
                    <th>Loai Tin</th>
                    <td></td>
                </tr>
            </thead>
            <tbody>
                @foreach ($post as $po)
                <tr>
                    {{-- <td>{{ $po['id'] }}</td> --}}
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $po['title'] }}</td>
                    <td>{{$po->user['name']}}</td>
                    <td>{{ $po['content'] }}</td>
                    <td>
                        @if($po['status'] == 0)
                       <span id="ok" class="glyphicon glyphicon-ok"></span> {{"Đã Xét Duyệt"}}
                        @else
                       <span id="remove" class="glyphicon glyphicon-remove"></span> {{"Chưa Xét Duyệt"}}
                        @endif
                    </td>   
                    <td> <img width="110" height="110" src="Update/Product/{{$po->image}}"></td>
                    
                    <td>
                        {{$po->loaitin['tenloaitin']}}
                    </td>
                    {{-- <td>{{ $po->loaitin->tenloaitin}}</td> --}}
                    <td><a href="{{ route('post.show', $po->id) }}" class="btn btn-default" style="background: #4169E1;color:#FDF5E6 ">Show</a></td>

                    <td><a href="{{ route('post.edit', $po->id) }}" class="btn btn-default" style="background: #FF0000;color: #FDF5E6">Edit</a></td>
                    <td>
                        {!! Form::open(['method' => 'DELETE', 'route' => ['post.destroy', $po->id] ]) !!}
                        {!! Form::submit('Delete', ['class' => 'btn btn-default']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
             
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="mx-auto">
            {{ $post->links()}}
        </div>
    </div>
                </div>
            </div>

            <!-- ... Your content goes here ... -->

        </div>
    </div>

</div>
    @endsection
</body>
</html>

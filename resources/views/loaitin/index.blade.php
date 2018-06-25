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
       #post{
        margin-bottom: 10px;
        background:red;
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
       <a href="{!!URL::to('/admin/loaitin/create')!!} " title=""><button id="post" type="button" class="btn btn-lg btn-primary" disabled>Thêm Bài Viết</button></a> 
        <div class="form-group">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tag name</th>
                    <td></td>
                </tr>
            </thead>
            <tbody>
                @foreach ($loaitin as $lt)
                <tr>
                    <td>{{ $lt['id'] }}</td>
                    <td>{{ $lt['tenloaitin'] }}</td>
                    <td><a href="{{ route('loaitin.edit', $lt->id) }}" class="btn btn-default" style="background: #4169E1;color:#FDF5E6 ">Edit</a></td>
                   <td>
                        {!! Form::open(['method' => 'DELETE', 'route' => ['loaitin.destroy', $lt->id] ]) !!}
                        {!! Form::submit('Delete', ['class' => 'btn btn-default']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    </div>
</div>
<div class="container">

                </div>
            </div>

            <!-- ... Your content goes here ... -->

        </div>
    </div>

</div>
    @endsection
</body>
</html>

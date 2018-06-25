<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    @extends('Admin.HomeAD')
    
    @section('PageAd')
     <div id="page-wrapper">
 {!! Form::open(array('url' => 'admin/loaitin', 'method' => 'post')) !!}
<div class="container-fluid mt-5">
    <div class="form-group row">
        @if (session('ketqua'))
            <div class="col-sm-12">
                <div class="alert alert-success" role="alert">
                    {{ session('ketqua') }}
                </div>
            </div>
        @endif
    </div>
</div>
    <div class="form-group">
        <div class="col-md-4">
            <h4>Thêm Loại Tin</h4>
            <hr>

            <div class="form-group {{ $errors->has('tenloaitin') ? 'has-error' : '' }}" >
                {!! Form::label('', 'Loại Tin: ', ['class' => 'col-form-label']) !!} 
                {!! Form::text('tenloaitin', '', ['class' => 'form-control']) !!}
                <span class="text-danger">{{ $errors->first('tenloaitin') }}</span>
            </div>
            <div class="form-group">
            <div class="col-sm-5 mx-sm-auto">
            {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-6">
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
         
   
    
{!! Form::close() !!}
    @endsection
</body>
</html>

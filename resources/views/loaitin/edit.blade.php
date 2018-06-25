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
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    {!! Form::model($loaitin_edit, array('route' => array('loaitin.update', $loaitin_edit->id), 'method' => 'put')) !!}
                    <h1 class="page-header">Sửa</h1>
                    {!! Form::open(array('url' => 'admin/loaitin/create', 'method' => 'post','files'=>true,'enctype'=>'multipart/form-data')) !!}

                        @if (session('ketqua'))
                            <div class="col-sm-12">
                                <div class="alert alert-success" role="alert">
                                    {{ session('ketqua') }}
                                </div>
                            </div>

                         @endif
    <div class="form-group row">
        <div class="col-sm-12">
            <div class="container">
                <hr>
                <div class="form-group">
                    {!! Form::label('', 'Loại Tin', ['class' => 'col-form-label']) !!} 
                    {!! Form::text('tenloaitin', $loaitin_edit->tenloaitin, ['class' => 'form-control']) !!}
                    <span class="text-danger">{{ $errors->first('tenloaitin') }}</span>
                </div>
              
                <div class="container">
                <div class="form-group row">
                     <div class="col-sm-4 mx-sm-auto">
                {!! Form::submit('Send for Me', ['class' => 'btn btn-primary']) !!}
                </div>
        </div>
    </div>
            </div>
        </div>
    </div>   
                </div>                    
            </div>
        </div>
    </div>
{!! Form::close() !!}
    @endsection
</body>
</html>

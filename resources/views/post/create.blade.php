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
                    <h1 class="page-header">Thêm Tin Mới</h1>
                    {!! Form::open(array('url' => 'admin/post', 'method' => 'post','files'=>true,'enctype'=>'multipart/form-data')) !!}

                        @if (session('ketqua'))
                            <div class="col-sm-12">
                                <div class="alert alert-success" role="alert">
                                    {{ session('ketqua') }}
                                </div>
                            </div>
                        @endif
      
        <div class="form-group row">
            <div class="col-sm-12">
                   
                    <div class="form-group">
                        {!! Form::label('', 'Title', ['class' => 'col-form-label']) !!} 
                        {!! Form::text('title', '', ['class' => 'form-control']) !!}
                        <span class="text-danger">{{ $errors->first('title') }}</span>
                    </div>
                    
                    <div class="form-group">
                        {!! Form::label('', 'Content', ['class' => 'col-form-label']) !!} 
                        {!! Form::textarea('content', '', ['class' => 'form-control']) !!}
                        <span class="text-danger">{{ $errors->first('content') }}</span>
                    </div>
                    <label>Image</label>
                  
                    {!! Form::file('image', ['accept' => 'Update/Product']) !!}
                                         
        </div>

                     <div class="col-sm-12">
                        
                            {!! Form::label('Chọn Loại') !!}
                            {!! Form::select('loaitin',$loaitin,'',['class'=>'form-control','multiple']) !!} 
                    </div>
                    <div class="form-group row">
                    <div class="col-sm-5">
                        {!! Form::label('', 'Status', ['class' => 'col-form-label']) !!} 
                        <div class="pl-sm-1 pt-sm-2">
                            <label class="radio-inline" >
                                {!! Form::radio('status', 1, true, []) !!} Đang Xét Duyệt
                            </label>
                             <label class="radio-inline">
                                {!! Form::radio('status', 0, true, []) !!} Đã Xét Duyệt
                            </label>
                        </div>
                    </div>
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
{!! Form::close() !!}
    @endsection
</body>
</html>

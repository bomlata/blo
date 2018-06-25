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
                    {!! Form::model($post_edit, array('route' => array('post.update', $post_edit->id), 'method' => 'put')) !!}
                    <h1 class="page-header">Sửa</h1>
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
            <div class="container">
                <hr>
                <div class="form-group">
                    {!! Form::label('', 'Title', ['class' => 'col-form-label']) !!} 
                    {!! Form::text('title', $post_edit->title, ['class' => 'form-control']) !!}
                    <span class="text-danger">{{ $errors->first('title') }}</span>
                </div>
              {{--   <div class="form-group row">
                    <div class="col-sm-5">
                        {!! Form::label('', 'Status', ['class' => 'col-form-label']) !!} 
                        <div class="pl-sm-1 pt-sm-2">
                            <label class="radio-inline">
                                {!! Form::radio('status',$post_edit->status, '1', true, []) !!} T
                            </label>
                            <label class="radio-inline ml-sm-4">
                                {!! Form::radio('status',$post_edit->status. '0', false, []) !!} F
                            </label>
                        </div>
                    </div>
                </div> --}}
                <div class="form-group">
                    {!! Form::label('', 'Content', ['class' => 'col-form-label']) !!} 
                    {!! Form::textarea('content', $post_edit->content, ['class' => 'form-control']) !!}
                    <span class="text-danger">{{ $errors->first('content') }}</span>
                </div>
                <div class="form-group row">
                    <div class="col-sm-5">
                        {!! Form::label('', 'Status', ['class' => 'col-form-label']) !!} 
                        <div class="pl-sm-1 pt-sm-2">
                            <label class="radio-inline ml-sm-4">
                                {!! Form::radio('status', '0', false, []) !!} Đã Xét Duyệt
                            </label>
                        </div>
                        <div class="pl-sm-1 pt-sm-2">
                            <label class="radio-inline ml-sm-4">
                                {!! Form::radio('status', '1', false, []) !!} Canel
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
    </div>   
                </div>                    
            </div>
        </div>
    </div>
{!! Form::close() !!}
    @endsection
</body>
</html>

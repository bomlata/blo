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
                    <h1 class="page-header">Bài Viết </h1>
                 </div>
                   
        <br>
        <div class="form-group row">
            <div class="col-sm-12">
                <h2></b>{{ $post->title }}</h2>
                <p>{{ $post->content }}</p>
                
            </div>
        </div>
       
        {{-- Display comment --}}
       
                {!! Form::close() !!}
            </div>
            
            </div>
        
    </div>
    @endsection
</body>
</html>

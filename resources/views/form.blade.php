<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
	@include('includes.header')
</head>
<body>
	<div class="container">
			<div class='col-md-6 col-md-offset-3 bg-info'>
			{!! Form::open() !!}
				<div class="form-group row" style="background-color: #b4e1f8">
					@include('includes.menu')
				</div>
				<br>
				<div class="form-group row">
					<div class="col-md-5">
						{!! Form::label('','Submit a new ticket', ['class'=>'label-control']) !!}
					</div>
				</div>
				<div class="form-group row">
					<div class="col-md-2">
						{!! Form::label('','Title', ['class'=>'label-control']) !!}
					</div>
					<div class="col-md-10">
						{!! Form::text('title','', ['class'=>'form-control','placeholder'=>'title']) !!}
					</div>
				</div>
				<div class="form-group row">
					<div class="col-md-2">
						{!! Form::label('Content','', ['class'=>'label-control']) !!}
					</div>
					<div class="col-md-10">
						{!! Form::textarea('Content','', ['class'=>'form-control']) !!}
						{!! Form::label('','Feel free to ask us any question', ['class'=>'label-control']) !!}
					</div>
				</div>
				<div class="form-group row">
					<div class="col-md-2 col-md-offset-2">
						{!! Form::submit('CANCEL', ['class'=>'btn btn-default']) !!}
					</div>
					<div class="col-md-5">
						{!! Form::submit('SUBMIT', ['class'=>'btn btn-primary']) !!}
					</div>
				</div>
			{!! Form::close() !!}
			</div>
	</div>
</body>
</html>
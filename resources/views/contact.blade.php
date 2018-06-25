<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Blade Form - test</title>
	<link rel="stylesheet" href="">
	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body>
	<!--CLick vao form chuyen den trang route contact-->
	<div class="container">
	<br>
	<div class='col-md-6 col-md-offset-3 bg-info'>
	<br>
		{!! Form::open()!!}
			<!--Id va ten nhan label-->
			<div class="form-group">
				<div class="form-group row">
					<div class="col-md-3">
						{!!Form::label('email','E-mail Address: ',['class'=>'label-control'])!!}	
					</div>
					<div class="col-md-9">
						{!!Form::text('email','',['class' => 'form-control','placeholder'=>'abc@gmail.com'])!!}
					</div>
				</div>
				<div class="form-group row">
					<div class="col-md-3">
						{!!Form::label('Phone','Phone: ',['class'=>'label-control'])!!}	
					</div>
					<div class="col-md-9">
						{!!Form::text('Phone','',['class' => 'form-control','placeholder'=>'0123456789'])!!}
					</div>
				</div>
				<div class="form-group row">
					<div class="col-md-3">
						{!!Form::label('','Giới tính: ',['class'=>'label-control'])!!}	
					</div>
					<div class="col-md-6">
						{!!Form::label('','Nam',['class'=>'label-control'])!!}	
						{!! Form::radio('gioitinh', 'Nam',true)!!}
						{!!Form::label('','Nữ',['class'=>'label-control'])!!}	
						{!! Form::radio('gioitinh', 'Nu') !!}
						{!!Form::label('','Khác',['class'=>'label-control'])!!}	
						{!! Form::radio('gioitinh', 'khac') !!}
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						{!!Form::label('','Select list',['class'=>'form-label'])!!}
					</div>
					<div class="col-md-9">
						{!!Form::select('sinhvien',['Anh','Bảo','Bình'],null,['class'=>'form-control','placeholder'=>'Chọn giá trị'])!!}
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						{!! Form::submit('Click me', ['class'=>'btn btn-default']) !!}
					</div>
				</div>

			</div>
			
		{!!Form::close()!!}
	</div>
	</div>
</body>
</html>
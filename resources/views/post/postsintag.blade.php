@extends('layouts.master')
<!--Xac dinh title cho view thong qua yield('title')-->
@section('title','Contact page')
<!--xac dinh noi dung cho yield('noidung')-->
@section('noidung')
<div class="container">
	<ul>
		@foreach($post as $post)
		<li><a href="{{route('post.show',$post->id)}}">{{$post->title}}</a></li>
		@endforeach
	</ul>
</div>

@endsection
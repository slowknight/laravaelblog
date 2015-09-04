@extends('admin._layouts.default')

@section('content')
	
	<h1>Create Post</h1>
	{{ Form::open(array( 'route' => array( 'admin.posts.store' ) )) }}
		@include('admin.posts._partials.form')
	{{ Form::close() }}

@stop
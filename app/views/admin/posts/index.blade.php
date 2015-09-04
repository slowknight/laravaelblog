@extends('admin._layouts.default')

@section('content')

<h1>Posts</h1>
{{ link_to_route('admin.posts.create', 'Create New Post') }}

@if( count($posts) )
	<ul>
	@foreach( $posts as $post )
		<li>
			{{ link_to_route('admin.posts.edit', $post->title, array( $post->id )) }}
			{{ Form::open(array( 'route' => array('admin.posts.destroy', $post->id), 'method' => 'delete', 'class' => 'delete' )) }}
			{{ Form::submit('Delete') }}
			{{ Form::close() }}
		</li>
	@endforeach
	</ul>
@endif

@stop
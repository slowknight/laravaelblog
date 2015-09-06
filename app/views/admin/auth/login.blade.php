@extends('admin._layouts.default')

@section('content')

{{ Form::open(array( 'route' => 'admin.login.post' )) }}

<ul>
	<li>
		{{ Form::label('email', 'Email') }}
		{{ Form::email('email') }}
		{{ $errors->first('email', '<p class="error">:message</p>') }}
	</li>

	<li>
		{{ Form::label('password', 'Password') }}
		{{ Form::password('password') }}
		{{ $errors->first('password', '<p class="error">:message</p>') }}
	</li>

	<li>
		{{ Form::submit('Sign in') }}
	</li>
</ul>

{{ Form::close() }}

@stop
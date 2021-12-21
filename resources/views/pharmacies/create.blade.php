@extends('layouts.app')

@section('content')
	<h1>薬局新規作成</h1>

	{{ Form::model([$pharmacy, 'route' => 'pharmacies.store', 'method' => 'post',])}}

		<div>
			{{ Form::label('name', '薬局名') }}
			{{ Form::text('name', 'hello', ['class' => 'form-control'])}}
		</div>

		{{ Form::submit('登録する', ['class' => 'btn btn-primary']) }}
	{{ Form::close() }}

	<button type="submit" class="btn btn-primary mb-3">Confirm identity</button>
@endsection
@extends('layouts.app')

@section('content')
	</div class='col align-self-center'>
		<h1>薬局新規作成</h1>

		<div class='card'>
			{{ Form::open(['route' => 'pharmacies.store', 'method' => 'post']) }}
				<div>
					{{ Form::label('name', '薬局名') }}
					{{ Form::text('name', '', ['class' => 'form-control'])}}
				</div>

				<div>
					{{ Form::label('email', 'メールアドレス') }}
					{{ Form::text('email', '', ['class' => 'form-control'])}}
				</div>

				<div>
					{{ Form::label('postcode', '郵便番号') }}
					{{ Form::text('postcode', '', ['class' => 'form-control'])}}
				</div>

				<div>
					{{ Form::label('address', '住所') }}
					{{ Form::text('address', '', ['class' => 'form-control'])}}
				</div>

				<div>
					{{ Form::label('normal_telephone_number', '通常時電話番号') }}
					{{ Form::text('normal_telephone_number', '', ['class' => 'form-control'])}}
				</div>

				<div>
					{{ Form::label('emergency_telephone_number', '緊急時電話番号') }}
					{{ Form::text('emergency_telephone_number', '', ['class' => 'form-control'])}}
				</div>

				<div>
					{{ Form::label('note', '備考') }}
					{{ Form::text('note', '', ['class' => 'form-control'])}}
				</div>

				<div class='d-grid gap-2 col-6 mx-auto'>
					{{ Form::submit('登録する', ['class' => 'btn btn-primary btn-lg']) }}
				</div>
			{{ Form::close() }}
		</div>
	</div>
@endsection
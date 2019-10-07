@extends('admin.master')
@section('content')
<div class="container">
	<form action="{{ route('users.store') }}" method="POST" class="" role="form">
		@csrf
		<div class="form-group">
			<label class="control-label" for="todo">Name:</label>
			<input name="name" type="text" class="form-control" id="name">
		</div>
		<div class="form-group">
			<label class="control-label" for="todo">Email:</label>
			<input name="email" type="text" class="form-control" id="email">
		</div>
		<div class="form-group">
			<div class="">
				<button type="submit" class="btn btn-primary">Submit</button>
			</div>
		</div>
	</form>
	<br>
	<a href="{{ route('users.index') }}">Quay lại</a>
</div>
@endsection

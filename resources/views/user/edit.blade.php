@extends('admin.master')

@section('content')
<div class="container">
	<form action="{{ route('users.update', $user->id) }}" method="POST" role="form">
		@csrf
		<input name="_method" type="hidden" value="PUT">
            {{--{{ method_field('PUT') }}--}}
		<legend>Form title</legend>
		<div class="form-group">
			<label for="">Name:</label>
			<input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}">
		</div>
		<div class="form-group">
            <label class="control-label" for="todo">Email:</label>
            <input type="text" class="form-control" id="email" name="email" value="{{ $user->email }}">
        </div>
		<button type="submit" class="btn btn-primary">Submit</button>
	</form>
	<br>
	<a href="{{ route('users.index') }}">Quay lại</a>
</div>
@endsection
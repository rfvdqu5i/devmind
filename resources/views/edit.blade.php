@extends('admin.master')

@section('content')
<div class="container">
	<form action="" method="POST" role="form">
		<legend>Form title</legend>
		<div class="form-group">
			<label for="">To do:</label>
			<input type="text" class="form-control" id="" placeholder="{{ $item }}">
		</div>
		<div class="form-group">
            <label class="control-label" for="todo">Mô tả:</label>
            <textarea name="todo" class="form-control"></textarea>
        </div>
		<button type="submit" class="btn btn-primary">Submit</button>
	</form>
	<br>
	<a href="{{ route('todos.index') }}">Quay lại</a>
</div>
@endsection
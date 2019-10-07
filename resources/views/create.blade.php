@extends('admin.master')
@section('content')
<div class="container">
	<form action="{{ route('todos.store') }}" method="POST" class="" role="form">
		@csrf
		<div class="form-group">
			<legend>Thêm công việc</legend>
		</div>
		<div class="form-group">
			<label class="control-label" for="todo">Tiêu đề:</label>
			<input name="title" type="text" class="form-control" id="title" placeholder="Enter todo">
		</div>
		<div class="form-group">
			<label class="control-label" for="todo">Mô tả:</label>
			<textarea name="content" id="content" class="form-control"></textarea>
		</div>
		<div class="form-group">
            <select name="status">
                <option value="1">Đã làm</option>
                <option value="0">Chưa làm</option>
            </select>
        </div>
		<div class="form-group">
			<div class="">
				<button type="submit" class="btn btn-primary">Submit</button>
			</div>
		</div>
	</form>
	<br>
	<a href="{{ route('todos.index') }}">Quay lại</a>
</div>
@endsection

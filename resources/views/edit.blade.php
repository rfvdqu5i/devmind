@extends('admin.master')

@section('content')
<div class="container">
	<form action="{{ route('todos.update', $todo->id) }}" method="POST" role="form">
		@csrf
		<input name="_method" type="hidden" value="PUT">
            {{--{{ method_field('PUT') }}--}}
		<legend>Form title</legend>
		<div class="form-group">
			<label for="">To do:</label>
			<input type="text" class="form-control" id="title" name="title" value="{{ $todo->title }}">
		</div>
		<div class="form-group">
            <label class="control-label" for="todo">Mô tả:</label>
            <textarea name="content" class="form-control">{{ $todo->content }}</textarea>
        </div>
        <div class="form-group">
            <label class="control-label" for="todo">Trạng thái:</label> <br>
            <select name="status" class="form-control">
                <option value="0">Chưa làm</option>
                <option value="1">Đang làm</option>
                <option value="2">Đã làm</option>
            </select>
            {{-- <input type="checkbox" name="status" @if($todo->status == 1) checked @endif data-toggle="toggle" data-onstyle="success" data-offstyle="danger"> --}}
        </div>
		<button type="submit" class="btn btn-primary">Submit</button>
	</form>
	<br>
	<a href="{{ route('todos.index') }}">Quay lại</a>
</div>
@endsection
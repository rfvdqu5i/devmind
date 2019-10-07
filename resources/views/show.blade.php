@extends('admin.master')

@section('content')
<div class="container">
    <form action="#" method="POST" class="" role="form">
        @csrf
        {{method_field('put')}}
        <div class="form-group">
            <legend>Xem chi tiết</legend>
        </div>
        <div class="form-group">
            <label class="control-label" for="todo">Tiêu đề:</label>
            <input name="todo" type="text" class="form-control" id="todo" value="{{ $todo->title }}">
        </div>
        <div class="form-group">
            <label class="control-label" for="todo">Mô tả:</label>
            <textarea name="todo" class="form-control">{{ $todo->content }}</textarea>
        </div>
        <div class="form-group">
            <select name="" class="form-control">
                @if($todo->status == 1)
                    <option value="1">Đã làm</option>
                @else
                    <option value="0">Chưa làm</option>
                @endif
            </select>
        </div>
    </form>
    <br>
    <a href="{{ route('todos.index') }}">Quay lại</a>
</div>
@endsection
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
            <label class="control-label" for="todo">Name:</label>
            <input name="todo" type="text" class="form-control" id="todo" value="{{ $user->name }}">
        </div>
        <div class="form-group">
            <label class="control-label" for="todo">Email:</label>
            <input name="todo" class="form-control" value="{{ $user->email }}">
        </div>
    </form>
    <br>
    <a href="{{ route('users.index') }}">Quay lại</a>
</div>
@endsection
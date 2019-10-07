@extends('admin.master')

@section('content')
<div class="container">
	<a href="{{ route('todos.create')}}" class="btn btn-success">Add</a>
	<tbody>
		@if(count($todos) == 0)
		Không có dữ liệu
		@else
		<div class="table-responsive">
			<table class="table table-hover">
				<thead>
					<tr>
						<th>#</th>
						<th>Tiêu đề</th>
						<th>Nội dung</th>
						<th>Trạng thái</th>
						<th>Created at</th>
						<th>Hoạt động</th>
					</tr>
				</thead>
				<tbody>
					@foreach($todos as $item)
					<tr>
						<td>{{ $item->id }}</td>
						<td>{{ $item->title }}</td>
						<td>{{ $item->content }}</td>
						<td><input type="checkbox" @if($item->status == 1) checked @endif data-toggle="toggle" data-onstyle="success" data-offstyle="danger"></td>
						<td>{{ $item->created_at }}</td>
						<td>
							<a style="display: inline-block; width: 67px;" href="{{ route('todos.show', $item->id) }}" class="btn btn-success">Show</a>
							<a style="display: inline-block; width: 67px;" href="{{ route('todos.edit', $item->id) }}" class="btn btn-warning">Edit</a>
							{{-- <form style="display: inline-block;" action="{{ route('todos.destroy', $item->id) }}" method="post" accept-charset="utf-8">
								@csrf
								{{method_field('delete')}}
								<button  class="btn btn-danger delete">Delete</button>
							</form> --}}
							<a style="display: inline-block; width: 67px;" class="btn btn-warning delete">Xóa</a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
		@endif
	</tbody>

</div>
@endsection
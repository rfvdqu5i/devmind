@extends('admin.master')

@section('content')
<div class="container">
	<a href="{{ route('users.create')}}" class="btn btn-success">Add</a>
	<tbody>
		@if(count($users) == 0)
		Không có dữ liệu
		@else
		<div class="table-responsive">
			<table class="table table-hover">
				<thead>
					<tr>
						<th>#</th>
						<th>Name</th>
						<th>Email</th>
						<th>Created at</th>
						<th>Hoạt động</th>
					</tr>
				</thead>
				<tbody>
					@foreach($users as $item)
					<tr>
						<td>{{ $item->id }}</td>
						<td>{{ $item->name }}</td>
						<td>{{ $item->email }}</td>
						<td>{{ $item->created_at }}</td>
						<td>
							<a style="display: inline-block; width: 67px;" href="{{ route('users.show', $item->id) }}" class="btn btn-success">Show</a>
							<a style="display: inline-block; width: 67px;" href="{{ route('users.edit', $item->id) }}" class="btn btn-warning">Edit</a>
							<a style="display: inline-block; width: 67px;" data-url="{{ route('users.destroy', $item->id) }}" class="btn btn-warning delete">Xóa</a>
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
@extends('admin.master')

@section('content')
<div class="container">
	<a href="{{ route('todos.create')}}" class="btn btn-success">Add</a>
	<tbody>
		@if(count($list) == 0)
		Không có dữ liệu
		@else
		<div class="table-responsive">
			<table class="table table-hover">
				<thead>
					<tr>
						<th>#</th>
						<th>Todo</th>
						<th>Created at</th>
						<th>Updated at</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					@foreach($list as $item)
					<tr>
						<td>{{ $item->id }}</td>
						<td>{{ $item->todo }}</td>
						<td>{{ $item->created_at }}</td>
						<td>{{ $item->updated_at }}</td>
						<td>
							<a style="display: inline-block; width: 67px;" href="{{ route('todos.show', $item->id) }}" class="btn btn-success">Show</a>
							<a style="display: inline-block; width: 67px;" href="{{ route('todos.edit', $item->id) }}" class="btn btn-warning">Edit</a>
							<form style="display: inline-block;" action="#" method="post" accept-charset="utf-8">
								@csrf
								{{method_field('delete')}}
								<button type="submit" class="btn btn-danger">Delete</button>
							</form>
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
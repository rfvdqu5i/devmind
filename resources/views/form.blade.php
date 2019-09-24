<form action="/form" method="POST" role="form">
	@csrf
	<legend>Form title</legend>

	<div class="form-group">
		<label for="">label</label>
		<input type="text" class="form-control" id="" placeholder="Input field">
	</div>

	<a href="{{ route('lesson', [], false) }}">User</a>

	<button type="submit" class="btn btn-primary">Submit</button>
</form>
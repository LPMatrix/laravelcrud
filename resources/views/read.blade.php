@extends('layout.master')

@section('body')
<div class="panel panel-default">
	<div class="panel-heading">
		<form action="{{route('search')}}" method="get">
			{{csrf_field()}}
			<input type="text" name="search" placeholder="Search member" class="form-control">
		</form>
	</div>
	<div class="panel-body">
		<div class="table responsive">
			<table class="table-condensed table table-hover table-bordered">
				<thead>
					<tr>
					    <th>ID</th>
						<th>Name</th>
						<th>Email</th>
						<th>Position</th>
						<th>Github</th>
						<th>School</th>
						<th>Gender</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
				@if($s!=0)
					@foreach ($member as $key)
						<tr>
							<td>{{$key->id}}</td>
							<td>{{$key->name}}</td>
							<td>{{$key->email}}</td>
							<td>{{$key->position}}</td>
							<td>{{$key->github}}</td>
							<td>{{$key->school}}</td>
							<td>
							@if ($key->gender==1)
								Male
							@else
								Female
							@endif
							</td>
							<td>
								<a href="{{route('edit', $key->id)}}" class="btn btn-success btn-sm">Edit</a>&nbsp;
								<a href="{{route('delete', $key->id)}}" class="btn btn-danger btn-sm">Delete</a>
							</td>
						</tr>
					@endforeach
				@endif
				</tbody>
			</table>
		</div>
	</div>
</div>

@endsection
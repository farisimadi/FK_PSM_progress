@extends('master')

@section('content')

@if($message = Session::get('success'))

<div class="alert alert-success">
	{{ $message }}
</div>

@endif

<div class="card">
	<div class="card-header">
		<div class="row">
			<div class="col col-md-6"><b>Report Data</b></div>
			<div class="col col-md-6">
				<a href="{{ route('reports.create') }}" class="btn btn-success btn-sm float-end">Add</a>
			</div>
		</div>
	</div>
	<div class="card-body">
		<table class="table table-bordered">
			<tr>
				<th>Date</th>
                <th>ID</th>
				<th>Name</th>
				<th>Progress</th>
				<th>Status</th>
				<th>Action</th>
			</tr>
			@if(count($data) > 0)

				@foreach($data as $row)

					<tr>
						<td>{{$row->date}}</td>
						<td>{{ $row->student_id }}</td>
						<td>{{ $row->student_name }}</td>
						<td>{{ $row->student_progress }}</td>
						<td>
							@if ($row->status == '0')
								Pending
							@else
								Approve
							@endif
						</td>
                        
						<td>
							<form method="post" action="{{ route('reports.destroy', $row->id) }}">
								@csrf
								@method('DELETE')
								<a href="{{ route('reports.show', $row->id) }}" class="btn btn-primary btn-sm">View</a>
								<a href="{{ route('reports.edit', $row->id) }}" class="btn btn-warning btn-sm">Edit</a>
								<input type="submit" class="btn btn-danger btn-sm" value="Delete" />
							</form>
							
						</td>
					</tr>

				@endforeach

			@else
				<tr>
					<td colspan="5" class="text-center">No Data Found</td>
				</tr>
			@endif
		</table>
		{!! $data->links() !!}
	</div>
</div>

@endsection
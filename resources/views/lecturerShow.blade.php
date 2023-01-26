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


            @forelse ($report as $row)
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
  
                        <a href="{{ route('lecturerView', $row->id) }}" class="btn btn-primary btn-sm">View</a>

                    
                </td>
            </tr>
            @empty
                
				<tr>
					<td colspan="5" class="text-center">No Data Found</td>
				</tr>
            @endforelse
		</table>
		
	</div>
</div>

@endsection
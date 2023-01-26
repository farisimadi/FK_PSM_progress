@extends('master')

@section('content')

<div class="card">
	<div class="card-header">
		<div class="row">
			<div class="col col-md-6"><b>Report Details</b></div>
			<div class="col col-md-6">
				<a href="{{ route('reports.index') }}" class="btn btn-primary btn-sm float-end">View All</a>
			</div>
		</div>
	</div>
	<div class="card-body">
        <div class="row mb-3">
			<label class="col-sm-2 col-label-form"><b>Date</b></label>
			<div class="col-sm-10">
				{{ $report->date }}
			</div>
		</div>
		<div class="row mb-3">
			<label class="col-sm-2 col-label-form"><b>ID</b></label>
			<div class="col-sm-10">
				{{ $report->student_id }}
			</div>
		</div>
		<div class="row mb-3">
			<label class="col-sm-2 col-label-form"><b>Name</b></label>
			<div class="col-sm-10">
				{{ $report->student_name }}
			</div>
		</div>
		<div class="row mb-4">
			<label class="col-sm-2 col-label-form"><b>Progress</b></label>
			<div class="col-sm-10">
				{{ $report->student_progress }}
			</div>
		</div>
        <div class="row mb-3">
			<label class="col-sm-2 col-label-form"><b>Comment</b></label>
			<div class="col-sm-10">
				{{ $report->comment }}
			</div>
        
		</div>
		
	</div>

</div>
<div class="card">
<div class="card-body">
    <div class="row mb-3">
        <label class="col-sm-2 col-label-form"><b>Comment</b></label>
        <div class="col-sm-10">
		@if ($report->status == '0')
			<form action="{{ route('lecturerApprove', $report->id)}}" method="POST">
				@csrf
				@method('PUT')
				<input type="hidden" value="{{$report->id}}" name="reportID">
				<input type="hidden" value="1" name="status">
				<p><label for="lecturerComment">Your Comment</label></p>
				<textarea id="lecturerComment" name="lecturerComment" rows="4" cols="50"></textarea>
				<br>
				<input type="submit" value="Submit">
			</form>
		@else

				<input type="hidden" value="{{$report->id}}" name="reportID">
				<input type="hidden" value="1" name="status">
				<p><label for="lecturerComment">Your Comment</label></p>
				<textarea id="lecturerComment" name="lecturerComment" rows="4" cols="50">{{$report->comment_lecturer}}</textarea>
				<br>

		@endif
        </div>
    
    </div>
</div>
</div>

@endsection('content')
@extends('master')

@section('content')

<div class="card">
	<div class="card-header">Edit Student</div>
	<div class="card-body">
		<form method="post" action="{{ route('reports.update', $report->id) }}" enctype="multipart/form-data">
			@csrf
			@method('PUT')
            <div class="row mb-3">
				<label class="col-sm-2 col-label-form">Date</label>
				<div class="col-sm-10">
					<input type="text" name="date" class="form-control" value="{{ $report->date }}" />
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Student ID</label>
				<div class="col-sm-10">
					<input type="text" name="student_name" class="form-control" value="{{ $report->student_id }}" />
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Student Name</label>
				<div class="col-sm-10">
					<input type="text" name="student_name" class="form-control" value="{{ $report->student_name }}" />
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Progress</label>
				<div class="col-sm-10">
					<input type="text" name="student_progress" class="form-control" value="{{ $report->student_progress }}" />
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Comment</label>
				<div class="col-sm-10">
					<input type="text" name="comment" class="form-control" value="{{ $report->comment }}" />
				</div>
			</div>
			<div class="text-center">
				<input type="hidden" name="hidden_id" value="{{ $report->id }}" />
				<input type="submit" class="btn btn-primary" value="Edit" />
			</div>	
		</form>
	</div></div>
</div>

@endsection('content')
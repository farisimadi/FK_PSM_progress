@extends('master')

@section('content')

@if($errors->any())

<div class="alert alert-danger">
	<ul>
	@foreach($errors->all() as $error)

		<li>{{ $error }}</li>

	@endforeach
	</ul>
</div>

@endif

<div class="card">
	<div class="card-header">Add Report</div>
	<div class="card-body">
		<form method="post" action="{{ route('reports.store') }}" enctype="multipart/form-data">
			@csrf
            <div class="row mb-3">
				<label class="col-sm-2 col-label-form">Date</label>
				<div class="col-sm-10">
					<input type="text" name="date" class="form-control" />
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">ID</label>
				<div class="col-sm-10">
					<input type="text" name="student_id" class="form-control" />
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Name</label>
				<div class="col-sm-10">
					<input type="text" name="student_name" class="form-control" />
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Progress</label>
				<div class="col-sm-10">
					<input type="text" name="student_progress" class="form-control" />
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Comment</label>
				<div class="col-sm-10">
					<input type="text" name="comment" class="form-control" />
				</div>
			</div>
			<div class="text-center">
				<input type="hidden" name="status" value="0" class="form-control" />
				<input type="submit" class="btn btn-primary" value="Add" />
			</div>	
		</form>
	</div></div>
</div>

@endsection('content')
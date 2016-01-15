@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="col-sm-offset-2 col-sm-8">
			<!-- Display Validation Errors -->
			@include('common.errors')

			<div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-title">
        		<a data-toggle="collapse" data-target="#collapseOne" href="#collapseOne">
							New Student
						</a>
      		</h4>
				</div>

				<div id="collapseOne" class="panel-collapse collapse">
					<div class="panel-body">
						<!-- Display Student Form -->
						{!! Form::open(['url' => '/student', 'class' => 'form-horizontal']) !!}
					  	{{ csrf_field() }}

							@include('students.form-fields')
						{!! Form::close() !!}
					</div>
				</div>
			</div>

			<!-- Current Tasks -->
			@if (count($students) > 0)
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4>Student Lists</h4>
					</div>

					<div class="panel-body">
						<table class="table table-striped task-table">
							<thead>
								<th>Name</th>
								<th>Email</th>
								<th>&nbsp;</th>
								<th>&nbsp;</th>
							</thead>
							<tbody>
								@foreach ($students as $student)
									<tr>
										<td class="table-text"><div>{{ $student->first_name }} {{ $student->last_name }}</div></td>
										<td class="table-text"><div>{{ $student->email }}</div></td>
										
										<td>
											<form action="/student/{{ $student->id }}" method="POST">
												{{ csrf_field() }}
												{{ method_field('DELETE') }}

												<button type="submit" id="delete-task-{{ $student->id }}" class="btn btn-danger">
													<i class="fa fa-btn fa-trash"></i>Delete
												</button>
											</form>
										</td>
									</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			@endif
		</div>
	</div>
@endsection

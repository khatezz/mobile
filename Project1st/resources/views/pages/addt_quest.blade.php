@extends('layouts.navbar') 
				@section('title')
                  Quiz
                @endsection       

<style type="text/css">
        	 .margin{
    
			    margin-left: 150px;
			    margin-right: -95px;
			    margin-top: -40px;
			    }
    
        </style>
     




			<!-- <div class="row"> --><!-- <div class="container">
	<div class="row">
		<div class="col-md-10">
			
		</div>

		<div class="col-md-10"> -->
		<div class="margin">
		<div class="container">
				<div class="panel panel-danger" style="margin-top:120px;margin-left: 37px; " >
					<div class="panel panel-heading">
						<button data-toggle="modal" data-target="#addQuiz">
							<img src="img/addq.png" style="width: 122px;height: 122px;"><br>
							Add Quiz
						</button>
					</div>
					<div class="panel-body">


					<h3>{{ $quizzes->Total() }} total Quiz</h3>
					@if($errors->count())
							<ul>
								@foreach($errors as $error)
								<li>{{$error}}</li>
								@endforeach
							</ul>
						@endif
						@if(Session::has('ok'))
							<div class="alert alert-info">
								{{Session::get('ok')}}
							</div>
						@endif
					
						<table class="table">
							<thead>
								<tr>
									
									
									<th>Title</th>
									<th>No. of Items</th>
									<th>Pts. per Item</th>
									
									<th>Created At:</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody> 

							
									@forelse($quizzes as $quiz)

										 <tr>
										 	
										 	<td>{{$quiz->title_true}}</td>
										 	<td>{{$quiz->items_true}}</td>
										 	<td>{{$quiz->points_true}}</td>
										 	
										 	<td>{{$quiz->created_at}}</td>
										 	<td>

										 	<a href="{{route('addmultiple',['id' => $quiz->id])}}" class="btn btn-success btn-xs">Add</a>

										 		<a href="{{route('delete_t',['id'=> $quiz->id])}}" class="btn btn-danger btn-xs">Delete</a>

										 		<a href="{{route('edit_t',['id'=> $quiz->id])}}" class="btn btn-info btn-xs">Edit</span></a>
										 	</td>
										 </tr> 
										 @empty
										 	<p>No Quiz Available</p>
									@endforelse
								
							
							</tbody>
						</table>

					</div>
					<div class="panel-footer">
						<p>In this Page ({{$quizzes->count()}}) quiz </p>
						{{$quizzes->links()}}
					</div>
				</div>
			</div>
			</div>

		<div class="modal fade" id="addQuiz">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<div class="modal-title">Add Set of Quiz</div>
						
					</div>
					<div class="modal-body">
							<form action="{{route('addquiz_t')}}" method="POST">

							<label>Title:</label>
							<div class="input-group" style="margin: 10px;">
								<span class="input-group-addon"></span>
								<input type="text" name="title_true" class="form-control" required="">
							</div> 

							<label>No. of Items:</label>
							<div class="input-group" style="margin: 10px;">
								<span class="input-group-addon" ></span>
								<input type="number" name="items_true" class="form-control" required="" >
							</div> 

							<label>Pts per Item:</label>
							<div class="input-group" style="margin: 10px;">
								<span class="input-group-addon" ></span>
								<select class="form-control" name="points_true" required="">
									<option></option>
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
								</select>
							</div> 

								
							{{csrf_field()}}
							<button class="btn btn-success btn-block">Submit</button>
						</form>
					</div>
					<div class="modal-footer">
						
					</div>
				</div>
			</div>
		</div>

		</div>
	</div>	
</div>



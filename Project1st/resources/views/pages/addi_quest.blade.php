@extends('layouts.navbar') 
				@section('title')
                  Identification
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
				<div class="panel panel-success" style="margin-top:120px;margin-left: 37px; " >
					<div class="panel panel-heading">
					<a href="{{route('addquiz')}}" class="pull-right" style="font-family: century gothic;text-decoration: none;">Other Type of Quiz</a>
					<h1 style="font-family: century gothic;">Identification</h1>
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
									<th>Created At:</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody> 

								@forelse($quizzes as $quiz)

										 <tr>
										 	
										 	<td>{{$quiz->title_identify}}</td>
										 	<td>{{$quiz->items_identify}}</td>
										 	<td>{{$quiz->created_at}}</td>
										 	<td>

										 	<a href="{{route('addidentify',['id' => $quiz->id])}}" class="btn btn-success btn-xs">Add</a>

										 		<a href="" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#deleteQuiz">Delete</a>

										 		<a href="{{route('edit_i',['id'=> $quiz->id])}}" class="btn btn-info btn-xs">Edit</span></a>
										 		<br>
										 		<a href="{{route('viewidentify',['id'=> $quiz->id])}}" style="text-decoration: none;margin: 5px;" >View Questions</a>

										 		<div class="modal fade" id="deleteQuiz">
													<div class="modal-dialog">
														<div class="modal-content">
														<div class="modal-header" style="background-color: #861818;color: white;
								    					font-family: century gothic;">
								    					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
														<h4>Delete Quiz</h4>
														</div>
															<div class="modal-body" style="background-color: #ecd8cf;font-family: century gothic;">
														
																<h3>Are you sure you want to delete?</h3>
															</div>
															<div class="modal-footer" style="background-color: rgba(140, 125, 125, 0.42);">
																<a href="{{route('delete_i',['id'=> $quiz->id])}}" class="btn btn-danger" >
																<span class="glyphicon glyphicon-trash"></span> Ok</a>
																<a href="{{route('addi_quest')}}" class="btn btn-warning" > 
																<span class="glyphicon glyphicon-arrow-left"></span> Cancel</a>
															</div>
														</div>
													</div>
												</div>
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
					<div class="modal-header" style="font-family: century gothic;
   						background-color: #325232;
    					color: white;">
    				<button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="color: white"> ×</button>
    				<div class="modal-title">Add Set of Quiz</div>
    				</div>
					<div class="modal-body" style="background-color: #d8ecd8;">
							<form action="{{route('addquiz_i')}}" method="POST">

							<label>Title:</label>
							<div class="input-group" style="margin: 10px;">
								<span class="input-group-addon"></span>
								<input type="text" name="title_identify" class="form-control" required="">
							</div> 

							<label>No. of Items:</label>
							<div class="input-group" style="margin: 10px;">
								<span class="input-group-addon" ></span>
								<input type="number" name="items_identify" class="form-control" required="" >
							</div> 
		

							
							<div class="answer">
		                      <label>Quiz For Section:</label>
		                       <div class="radio">
		                         <label>
		                            <input type="radio" name="sec_id" id="optionsRadios1"
		                            value="1" checked required=""> Charles
		                         </label>
		                       </div>
		                        
		                        <div class="radio" >
		                          <label>
		                            <input type="radio" name="sec_id" id="optionsRadios2"
		                              value="2" required="">Augustine
		                              
		                          </label>
		                        </div>

		                         <div class="radio" >
		                          <label>
		                            <input type="radio" name="sec_id" id="optionsRadios2"
		                              value="3" required="">Edward
		                              
		                          </label>
		                        </div>

		                        <div class="radio" >
		                          <label>
		                            <input type="radio" name="sec_id" id="optionsRadios2"
		                              value="4" required="">Dominic
		                              
		                          </label>
		                        </div>
		                    </div> 
							{{csrf_field()}}
							<button class="btn btn-success btn-block">Submit</button>
						</form>
					</div>
					<div class="modal-footer" style="background-color: #647b64">
						
					</div>
				</div>
			</div>
		</div>

		</div>
	</div>	
</div>


<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="bootstrap/dist/js/bootstrap.min.js"></script>
        <script  type="text/javascript" src="bootstrap/dist/js/jquery.printPage.js"></script>
        <script type="text/javascript" src="bootstrap/dist/js/jquery-3.2.1.min.js"></script>
        
      
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

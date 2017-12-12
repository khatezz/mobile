




<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
          

        <link rel="stylesheet" type="text/css" href="../resources/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../resources/bootstrap/css/style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <title>Laravel</title>

    </head>

	   <body>



<div class="container">
	<div class="row">
		<div class="col-md-10">
			
		</div>

		<div class="col-md-10">
			<div class="row">
				<div class="panel panel-danger" style="margin-top:82px; ">
					<div class="panel panel-heading">
						<div class="panel-title">Edit Quiz</div>
						
					</div>
					<div class="panel-body">
						@if(Session::has('ok'))
							<div class="alert alert-info">
								{{Session::get('ok')}}
							</div>
						@endif

							<form action="{{route('update_i', ['id'=> $quiz-> id])}}" method="POST">

							<label>Title:</label>
							<div class="input-group" style="margin: 10px;">
								<span class="input-group-addon"></span>
								<input type="text" name="title_identify" class="form-control" required="" value="{{$quiz->title_identify}}">
							</div> 

							<label>No. of Items:</label>
							<div class="input-group" style="margin: 10px;">
								<span class="input-group-addon" ></span>
								<input type="number" name="items_identify" class="form-control" required="" value="{{$quiz->items_identify}}" >
							</div> 

							


							<label>Section ID:</label>
							<div class="input-group" style="margin: 10px;">
								<span class="input-group-addon" ></span>
								<select class="form-control" name="sec_id" required="" >
									<option>{{$quiz->sec_id}}</option>
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									
								</select>
							</div> 

								
							{{csrf_field()}}
							<button class="btn btn-success btn-block">Submit</button>
						</form>
				

		<div class="panel-footer">
						
					</div>
				</div>
			</div>
		
		</div>
	</div>	
</div>


</body>

 <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> -->
       <script type="text/javascript" src="../resources/bootstrap/js/bootstrap.min.js"></script>

       <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</html>
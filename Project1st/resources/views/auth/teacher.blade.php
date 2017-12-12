<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
       <link rel="stylesheet" type="text/css" href="../resources/bootstrap/css/bootstrap.min.css">

        <title>Laravel</title>

    </head>

	   <body>
	   		<div class="col-md-6 col-md-offset-3">
	   			<div class="panel panel-primary">
	   				<div class="panel-heading ">
	   					<div class="panel-title">Register</div>
	   				</div>
	   				<div class="panel-body">
	   					@if(Session::has('info'))
	   						<div class="alert alert-success">
	   						{{Session::get('info')}}
	   						</div>
	   					@endif
	   					<form action="{{route('teacher')}}" method="POST">


	   						<div class="form-group {{$errors->has('fname') ? 'has-error' : ''}}">
	   							<label>First name:</label>
	   							<input type="text" name="fname" class="form-control">

	   							@if($errors->has('fname'))
	   								<span class="help-block">{{$errors->first('fname')}}</span>
	   							@endif
	   						</div>



	   						<div class="form-group {{$errors->has('lname') ? 'has-error' : ''}}">
	   							<label>Last name:</label>
	   							<input type="text" name="lname" class="form-control">

	   							@if($errors->has('lname'))
	   								<span class="help-block">{{$errors->first('lname')}}</span>
	   							@endif
	   						</div>


	   						<div class="form-group {{$errors->has('age') ? 'has-error' : ''}}">
	   							<label>Age:</label>
	   							<input type="number" name="age" class="form-control">

	   							@if($errors->has('age'))
	   								<span class="help-block">{{$errors->first('age')}}</span>
	   							@endif
	   						</div>


	   						<div class="form-group {{$errors->has('birth') ? 'has-error' : ''}}">
	   							<label>Age:</label>
	   							<input type="date" name="birth" class="form-control">

	   							@if($errors->has('birth'))
	   								<span class="help-block">{{$errors->first('birth')}}</span>
	   							@endif
	   						</div>
	   						

	   						

	   						<button type="submit" class="btn btn-primary" >Submit</button>
	   						
	   						 {{csrf_field()}}
	   					</form>
	   					 
	   				</div>
	   			</div>
	   		</div>
	   </body>

</html>
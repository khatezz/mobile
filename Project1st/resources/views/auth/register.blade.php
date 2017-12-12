



<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" type="text/css" href="../resources/bootstrap/css/bootstrap.min.css">
      <style type="text/css">
   	
   		.panel{
        	margin-top: 130px;
        }

        img{
        	margin-top: 48px;
        }

        h1{
        	font-size: 67px;
        	font-family: century gothic;
        }

        .letter{
        	color: #929292;
        	margin-top: 167px;
        }

        body{
        	/*background-color:#e8f9e8;*/
        	background-color: #f1f1f1;
        }

   
      </style>


        <!-- <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
 -->
        <title>Laravel</title>

    </head>

	   <body>
	   		
	   		<div class="padding"></div>
	   		
	   		<div class="container">
	   			

	   			<div class="row">
	   				<div class="col-md-8 col-lg-7">
	   					<!-- <img src="img/stud.png"> -->
	   				<div class="letter" >
	   					<h1>We Discover </h1>
	   					<p style="font-size: -webkit-xxx-large;font-family: century gothic;">
	   					(saying for science) 
	   					</p>
	   				</div>
	   				</div>

	   				<div class="col-md-4 col-lg-5">
	   			
			   			<div class="panel panel">
			   				<div class="panel-heading " style="background-color:  #7fda7f;color: white;">
			   					<div class="panel-title" style="font-size: 32px;font-family: century gothic;">Login <span class="glyphicon glyphicon-user"></span></div>
			   				</div>
			   				<div class="panel-body">
			   				 @if(Session::has('info'))
	   						<div class="alert alert-success">
	   						{{Session::get('info')}}
	   						</div>
	   					@endif
                {!! Form::open(array('url'=>'register_ok', 'method'=>'POST')) !!}
	   					

	   						<div class="form-group {{$errors->has('fname') ? 'has-error' : ''}}">
	   							<label>First name:</label>
	   							<input type="text" name="fname" class="form-control"  value="{{ Input::old('fname') }}" >

	   							@if($errors->has('fname'))
	   								<span class="help-block">{{$errors->first('fname')}}</span>
	   							@endif
	   						</div>



	   						<div class="form-group {{$errors->has('lname') ? 'has-error' : ''}}">
	   							<label>Last name:</label>
	   							<input type="text" name="lname" class="form-control" value="{{ Input::old('lname') }}">

	   							@if($errors->has('lname'))
	   								<span class="help-block">{{$errors->first('lname')}}</span>
	   							@endif
	   						</div>
	   					
	 
	   						<div class="form-group {{$errors->has('username') ? 'has-error' : ''}}">
	   							<label>Username:</label>
	   							<input type="text" name="username" class="form-control" value="{{ Input::old('username') }}">

	   							@if($errors->has('username'))
	   								<span class="help-block">{{$errors->first('username')}}</span>
	   							@endif
	   						</div>


	  						<div class="form-group {{$errors->has('code') ? 'has-error' : ''}}">
	   							<label>Code:</label>
	   							<input type="password" name="code" class="form-control" value="{{ Input::old('code') }}">
	   							@if($errors->has('code'))
	   								<span class="help-block">{{$errors->first('code')}}</span>
	   							@endif
	   						</div>


	   						<div class="form-group {{$errors->has('password') ? 'has-error' : ''}}">
	   							<label>Password:</label>
	   							<input type="password" name="password" class="form-control" value="{{ Input::old('password') }}">
	   							@if($errors->has('password'))
	   								<span class="help-block">{{$errors->first('password')}}</span>
	   							@endif
	   						</div>


	   						


	   						<div class="form-group {{$errors->has('repeat_password') ? 'has-error' : ''}}" >
	   							<label>Repeat Password:</label>
	   							<input type="password" name="repeat_password" class="form-control" value="{{ Input::old('repeat_password') }}">
	   							@if($errors->has('repeat_password')) 
	   								<span class="help-block">{{$errors->first('repeat_password')}}</span>
	   							@endif
	   						</div>

	   						<button type="submit" class="btn btn-primary" >Submit</button>

	   						
	   						 {{csrf_field()}}
	   						 <a href="{{route('index')}}" style="text-decoration: none;">Log in</a>
                {!! Form::close() !!}
	   					
			   					</form>
			   					 
			   				</div>
			   			</div>
	   				</div>
	   		</div>

	   	</div>
	   </body>

</html>
@extends('layouts.navbar') 
				@section('title')
                  Share Files
                @endsection       

            <style>
              .helpblock {
                color: red;
              }
            </style>

           


   <div class="col-md-7 col-sm-offset-3 main" style="margin-top: 35px;">
   		<a class="pull-right" href="{{route('download')}}" style="text-decoration: none;">Download Files</a>
   			<h2>Upload File</h2>

   			@if(Session::has('ok'))
              <div class="alert alert-info">
                {{Session::get('ok')}}
              </div>
            @endif

              @if(Session::has('error'))
              <div class="alert alert-danger">
                {{Session::get('error')}}
              </div>
            @endif
                        
                {!! Form::open(array('url'=>'insertfile', 'method'=>'POST', 'class'=>'form-horizontal', 'files'=>true)) !!}
   							<div class="form-group">
   								<label class="control-label col-sm-2" for="title">Title:</label>
   							<div class="col-md-10">
   								<input type="text"  class="form-control file_title_c" id="file_title_id" name="file_title" 
                    value="{{ Input::old('file_title') }}">

                   @if($errors->has('file_title')) 
                      <p class="helpblock">
                        {{ $errors->first('file_title') }}   
                      </p>
                   @endif
   							</div>
   							</div>
   						
                     
   							<div class="form-group">
   								<label class="control-label col-sm-2" for="title">Upload:</label>
   							<div class="col-md-10">
   								<input type="file" name="filenam" class="filename">
                    @if($errors->has('filenam')) 
                      <p class="helpblock">
                        {{ $errors->first('filenam') }}   
                      </p>
                   @endif
   							</div>
   							</div>
   						

   							<div class="form-group">
   							<div class="col-sm-offset-2 col-sm-10">
   								<button type="submit" class="btn btn-default">Submit</button>
   							</div>
   							</div>

                {!! Form::close() !!}



   		</div>
   
  
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="bootstrap/dist/js/bootstrap.min.js"></script>
        <script  type="text/javascript" src="bootstrap/dist/js/jquery.printPage.js"></script>
        <script type="text/javascript" src="bootstrap/dist/js/jquery-3.2.1.min.js"></script>
        
      
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

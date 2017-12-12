<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <link rel="stylesheet" type="text/css" href="bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/dist/css/style.css">
   

</head>
<body>
        

   <div class="col-md-7 col-sm-offset-3 main">
  


    <div class="panel panel-success"  >
    <div class="col-md-6" >
    {!! Form::open(['method' => 'GET', 'url'=> 'charles' ,'class' => 'navbar-form navbar-left', 'role' => 'search'] ) !!}
      <div class="input-group custom-search-form pull-right">
            <input type="text" class="form-control" name="search" placeholder="Search..">
      <span class="input-group-btn">
        <button type="submit" class="btn btn-default-sm ">
            <span class="glyphicon glyphicon-search"></span>
        </button>
      </span>
      </div>  

      {!! Form::close() !!}
    </div>  
    
          <div class="panel panel-heading"><br><br>
            <h1 style="font-family: century gothic;">Add Students</h1>
            <button data-toggle="modal" data-target="#addStudents">
              <img src="img/addq.png" style="width: 122px;height: 122px;"><br>
              Add Students
            </button>
          </div>
          <div class="panel-body">

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
                  
                  
                  
                  <th>ID</th>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Section</th>
                  <th>Username</th>
                  
                  <th>Action</th>
                </tr>
              </thead>
              <tbody> 

                @forelse($student as $students)
                  <tr>
                   
                    <td>{{$students->id}}</td>
                    <td>{{$students->fname}}</td>
                    <td>{{$students->lname}}</td>
                    <td>{{$students->sec_id}}</td>
                    <td>{{$students->username}}</td>
                    

                    <td>
                      

                        <a href="{{route('delete_stud' , ['id' => $students->id])}}" class="btn btn-danger btn-xs">Delete</a>
                        <a href="{{route('edit_stud' , ['id' => $students->id])}}" class="btn btn-primary btn-xs">Edit</a>

                       
                      </td>
                    </td>
                  </tr>
                  @empty 
                    <p>No Registered Students Available</p>
                @endforelse
                
              </tbody>

            </table>

          </div>
          <div class="panel-footer">
             {!! $student->links() !!}
          </div>
        </div>



        <div class="modal fade" id="addStudents">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header" style="font-family: century gothic;
              background-color: #325232;
              color: white;">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true" > ×</button>
            <div class="modal-title">Add Students</div>
            
          </div>
          <div class="modal-body" style="background-color: #d8ecd8;">
              <form action="{{route('addstudent')}}" method="POST">

               <label>Default ID:</label>
              <div class="input-group" style="margin: 10px;">
                <span class="input-group-addon"></span>
                <input type="integer" name="type" class="form-control" required="" value="2">
              </div>               

              <label>First Name:</label>
              <div class="input-group" style="margin: 10px;">
                <span class="input-group-addon"></span>
                <input type="text" name="fname" class="form-control" required="">
              </div> 

              <label>Last Name:</label>
              <div class="input-group" style="margin: 10px;">
                <span class="input-group-addon" ></span>
                <input type="text" name="lname" class="form-control" required="" >
              </div> 

             <div class="answer">
                          <label>Section:</label>
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
 

              <label>Username:</label>
              <div class="input-group {{$errors->has('username') ? 'has-error' : ''}}" style="margin: 10px;" >
                <span class="input-group-addon" ></span>
                <input type="text" name="username" class="form-control" required="" >

                @if($errors->has('username'))
                    <span class="help-block">{{$errors->first('username')}}</span>
                  @endif
              </div> 

              <label>Password:</label>
              <div class="input-group {{$errors->has('password') ? 'has-error' : ''}}" style="margin: 10px;">
                <span class="input-group-addon" ></span>
                <input type="password" name="password" class="form-control" required="" >

                @if($errors->has('password'))
                    <span class="help-block">{{$errors->first('password')}}</span>
                  @endif
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

</body>

       <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="bootstrap/dist/js/bootstrap.min.js"></script>
        <script  type="text/javascript" src="bootstrap/dist/js/jquery.printPage.js"></script>
        <script type="text/javascript" src="bootstrap/dist/js/jquery-3.2.1.min.js"></script>
        
      
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</html>
  





       


 


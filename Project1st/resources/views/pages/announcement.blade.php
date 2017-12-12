@extends('layouts.navbar')
                @section('title')
                  Announcement
                @endsection
      <style>
    .body{
      border-style: outset;
    
    background-color: white;
       /* margin-left: 100px;
    margin-top: -500px;*/ }


    .panel-success {
    border-color: #d6e9c6;
    
    margin-right: 185px;
    margin-top: 51px;

    }
   
  </style>
       
       
        <div class="col-md-7 col-sm-offset-3 main">
            <!-- <div class="row">
              <div class="col-md-10">
                
              </div>

              <div class="col-md-10">
                <div class="row">
                           -->
                      
                 <div class="body">
                 <div class="panel panel-primary" style="margin: 45px;" >
                  <div class="panel-heading" style="background-color: #42ca53;">Create Announcement</div>
                    <div class="panel-body">


                          <form action="{{route('addassignment')}}" method="POST">
                           <div class="form-group">
                             <label for="name">Text Area</label>
                              <input type="text" class="form-control" name="announce" required="" 
                              >
                           </div>

                           {{csrf_field()}}
                           <button type="submit" class="btn btn-primary">Create <span class="glyphicon glyphicon-pencil"></span></button>


                          </form>
                    </div>
                   </div>

                    
                       

                   
                  </div>
                  
                  

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

                  <table class="table table-hover" style="margin-top: 25px;border-style: solid;">
                     <thead>
                       <tr>
                         <th>Id</th>
                         <th>Note</th>
                         <th>Date created</th>
                         <th>Date submitted</th>
                         <th>Action</th>
                       </tr>
                     </thead>

                     <tbody>
                      
                       @if($question->count())
                      @foreach($question as $questions)

                    <tr>

                      <td>{{$questions->id}}</td>
                      <td>{{$questions->announce}}</td>
                      <td>{{$questions->created_at}}</td>
                      <td>{{$questions->updated_at}}</td>
                     
                      <td> 
         

          
                     
                       <a href="{{route('delete_announce', ['user_id'=> $questions->id])}}" class ="btn btn-danger btn-xs">Delete</a>
                       <a href="{{route('edit_announce', ['user_id'=> $questions->id])}}" class ="btn btn-info btn-xs">Edit</a>
                      </td>
                    </tr>
                    @endforeach

                    @endif

                     </tbody>
                   </table>


                   

                    </div>

                             



                   
                  

                 

                   
                  </div>


                   <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="bootstrap/dist/js/bootstrap.min.js"></script>
        <script  type="text/javascript" src="bootstrap/dist/js/jquery.printPage.js"></script>
        <script type="text/javascript" src="bootstrap/dist/js/jquery-3.2.1.min.js"></script>
        
      
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

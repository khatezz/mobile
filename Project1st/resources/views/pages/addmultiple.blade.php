<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
      <style>
    .header{
        font-family: cursive;
    color: #655b5b;
    font-size: 45px;
    margin-left: 52px;
      }




      .bord1{
        border-style: dotted;
        
        padding: 15px;
        margin-top: 10px;
      }


      .bords{
        margin-top: 50px;
      }

      #imghead{
          margin-left: -35px;
          padding-left: 60px;
          border-style: ridge;
      }
      .choice{
        margin-left: 28px;
      }
          
  </style>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
          

        <link rel="stylesheet" type="text/css" href="../resources/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <title>Laravel</title>

    </head>

     <body>
        
      <!--  <div class="container" style="margin-top:82px;">
            <div class="row">
              <div class="col-md-10">
                
              </div>

              <div class="col-md-10">
      

                <div class="row"> -->



                          
       <div class="bords">
        <div class="bord">
          


      <div class="container">

         <div class="row">
            
                              <div class="col-md-7 col-sm-offset-2 col-lg-9 main" style="background-color:#ebfdee;
                               box-shadow: inset 1px -1px 1px #444, inset -1px 1px 1px #444;padding-top: 15px;">
                              <center>
                                <div class="panel panel-default" style="width: 450px;">
                                  <div class="panel-heading" style="font-family: century gothic;font-size: 18px;">Multiple</div>
                                    <div class="panel-body">




                        
                            <form enctype="multipart/form-data" action="{{route('add_quest')}}" method="POST" >

                                 
                                   <p>Id number: {{$quiz->id}}</p>
                               
                                   <div class="form-group" style="margin: 15px;">
                                   <label for="quest">Id #:</label>
                                      <input type="number" name="quiz_id" placeholder="Type the Id # above.." class="form-control" required="" value="{{$quiz->id}}" >
                                   </div>
                                

                                   <div class="form-group" style="margin: 15px;">
                                   <label for="quest">Question no.1:</label>
                                      <input type="text" name="quest" placeholder="Type here.." class="form-control" required="">
                                   </div>


                    

                                   <div class="choice">
                                     <div class="form-group" style="margin: 15px;">
                                     <label for="choices">Choices:</label>
                                        <input type="text" name="a" placeholder="a." class="form-control" required="">
                                        <input type="text" name="b" placeholder="b." class="form-control" required="">
                                        <input type="text" name="c" placeholder="c." class="form-control" required="">
                                        <input type="text" name="d" placeholder="d." class="form-control" required="">
                                     </div>
                                   </div> 

                                   <div class="form-group" style="margin: 15px">
                                     <label for="answer">Correct Answer:</label>
                                      <select class="form-control" name="answer" required="">
                                        <option>A</option>
                                        <option>B</option>
                                        <option>C</option>
                                        <option>D</option>
                                      </select>
                                   </div>

                                    {{csrf_field()}}

                                   <button type="submit" class="btn btn-primary" style="margin-left:15px;">Add 
                                   <span class="glyphicon glyphicon-plus"></span></button>
                                   <a href="{{route('addlesson')}}" class="btn btn-warning" style="margin:5px;" >Cancel</a>

                           </form>


                           


                  </div>
                
              </div>   
              </center>
                <div class="bord1">
         
              
                <h2> Multiple Choice <span class="glyphicon glyphicon-check"></span></h2>
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


                <table class="table table-hover">
                  <thead>

                    <p class="pull-right" style="margin-right: 50px;">Number of Questions: {{ $question->count() }}</p>
                    
                    
                      @if($controls_count===$item)  
                        <script >
                         if(confirm("Questions Completed!\n Click OK")){
                          window.location.href = "{{route('addlesson')}}";
                         }
                         
                        </script>
                      @endif

                    <p>No. of items: {{$item}}</p>

                      

                      quest: {{$controls_count}}
                    <tr>
                      
                      
                      <th>Question</th>
                      <th>A</th>
                      <th>B</th>
                      <th>C</th>
                      <th>D</th>
                      <th>Answer</th>
                      <th>Action</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                 
                    
                  
                     @if($question->count())
                      @foreach($question as $questions)

                    <tr>

                     
                      <td>{{$questions->quest}}</td>
                      <td>{{$questions->a}}</td>
                      <td>{{$questions->b}}</td>
                      <td>{{$questions->c}}</td>
                      <td>{{$questions->d}}</td>
                      <td>{{$questions->answer}}</td>
                      <td> 
         

          
                     
                       <a href="{{route('delete_quest', ['quest_id'=> $questions->id])}}" class ="btn btn-danger btn-xs">Delete</a>
                       <a href="{{route('edit_quest', ['quest_id'=> $questions->id])}}" class ="btn btn-info btn-xs">Edit</a>
                      </td>
                    </tr>


                    
                    @endforeach

                    @endif
                   
                  </tbody>
                </table>







          </div>
            </div>
       




       




               
             
        </div>


        

    </div>


    </body>

    </html>


    <link rel="stylesheet" type="text/css" href="../resources/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
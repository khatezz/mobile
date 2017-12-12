<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
      <style>
    


      .bord1{
        border-style: dotted;
        margin-left: 50px;
        margin-right: 50px;
        padding: 15px;
        margin-top: 10px;
      }


      .bords{
        margin-top: 50px;
      }

    
          
  </style>
  </head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
          

        <link rel="stylesheet" type="text/css" href="../resources/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <title>Laravel</title>

<body>




               <div class="bord1">
          <div class="borders">

           <a class="btn btn-primary" href="{{route('addlesson')}}"><span class="glyphicon glyphicon-arrow-left"></span> Back</a>
              
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
</body>


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
          
                           
                        <form action="{{route('update_true', ['userId'=> $quest-> id])}}" method="POST" >
                       
                       <div class="form-group" style="margin: 15px;">
                       <label for="quest">Question no.1:</label>
                          <input type="text" name="question" placeholder="Type here.." class="form-control"  required=""
                          value="{{$quest->question}}">
                       </div>

                      <div class="answer">
                      <label>Answer:</label>
                       <select class="form-control" name="answer">
                         <option>{{$quest->answer}}</option>

                         <option>True</option>
                         <option>False</option>
                       </select>
                      </div> 
                       {{csrf_field()}}
                       <br>

                       <button class="btn btn-info" type="submit">Submit</button> 
                      

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









            


                    
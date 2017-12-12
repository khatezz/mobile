<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
      <style>
    .body{
      border-style: outset;
    padding: 10px;
    background-color: white;
       /* margin-left: 100px;
    margin-top: -500px;*/ }

     .margin{
    
          margin-left: 150px;
          margin-right: -95px;
          margin-top: -40px;
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
        
        <div class="margin">
       <div class="container" style="margin-top:120px;">
            <!-- <div class="row">
              <div class="col-md-10">
                
              </div>

              <div class="col-md-10">
                <div class="row">
                           -->
                      
                 <div class="body">
                 <div class="panel panel-success" >
                  <div class="panel-heading">Create Announcement</div>
                    <div class="panel-body">


                          <form action="{{route('update_announce', ['user_id'=> $quest-> id])}}" method="POST">
                           <div class="form-group">
                             <label for="name">Text Area</label>
                              <input type="text" class="form-control" name="announce" required="" 
                              value="{{$quest->announce}}">
                           </div>

                           {{csrf_field()}}
                           <button type="submit" class="btn btn-primary">Create <span class="glyphicon glyphicon-pencil"></span></button>


                          </form>
                    </div>
                   </div>

                   
                  </div>
                  
                  

                

                    </div>
                    </div>
                    </div>

                </div>
              </div>
            </body>

    </html>
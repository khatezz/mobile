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


      .bord{
        border-style: double;
        margin-left: 50px;
        margin-right: 50px;
        padding: 15px;
      }


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
            <div class="col-md-6 col-lg-4" >
              <div id="imghead">
                <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="250" height="250">
              </div>
                <input type="file" style="margin-left: -34px;margin-top: 15px;" ></button>
            </div>
            <div class="col-md-6 col-lg-8"" style="background-color:#ebfdee;
             box-shadow: inset 1px -1px 1px #444, inset -1px 1px 1px #444;padding-top: 15px;">
              <div class="panel panel-default">
                <div class="panel-heading" style="font-family: century gothic;font-size: 18px;">Identification</div>
                  <div class="panel-body">


                          <form action="{{route('update_identify', ['quizId'=> $quest-> id])}}"  method="POST">
                       
                       <div class="form-group" style="margin: 15px;">
                       <label for="quest">Question no.1:</label>
                          <input type="text" name="quest" placeholder="Type here.." class="form-control" required="" 
                          value="{{$quest->quest}}">
                       </div>


                       <div class="form-group" style="margin: 15px;">
                       <label for="quest">Answer:</label>
                          <input type="text" name="answer" placeholder="Answer" class="form-control" required="" 
                          value="{{$quest->answer}}">
                       </div>
                      {{csrf_field()}}


                       <button type="submit" class="btn btn-primary" style="margin-left:15px;">Submit
                            </button>
                     </form>



                  </div>
                
              </div>   
            </div>
        </div> 
     
      </div>
        </div>




                  



        

       
    </div>


    </body>

    </html>








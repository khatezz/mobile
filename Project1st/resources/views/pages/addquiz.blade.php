@extends('layouts.navbar')
  @section('title')
      Quiz
  @endsection
   
        <div class="col-sm-9 col-sm-offset-2 col-md-8 col-md-offset-3 " style="padding-right: 3px;
        padding-left: 7px;">
        <h2 style=" font-family: century gothic;
        background-color: #a7f5a7;
        padding-bottom: 49px;
        margin-bottom: -68px;
        padding-top: 13px;
        padding-left: 10px;">Choose a Type of Quiz</h2>
              <div class="addpad">

                <div class="quizmargin">
                  <div class="quiz">
                    <a href="{{route('addlesson')}}">
                      <img src="img/multiple.png" alt="Fjords" width="250px" height="250px"  class="quizz">

                    </a>
                    <div class="quiztitle">Multiple Choice</div>
                  </div> 



                  <div class="quiz">
                    <a href="{{route('addt_quests')}}">
                      <img src="img/true.png" alt="Fjords" width="250px" height="250px"  class="quizz">

                    </a>
                    <div class="quiztitle">True or False</div>
                  </div> 


                  <div class="quiz">
                    <a href="{{route('addi_quest')}}">
                      <img src="img/identify.png" alt="Fjords" width="250px" height="250px"  class="quizz">

                    </a>
                    <div class="quiztitle">Identification</div>
                  </div> 
                 
               </div>   
              
            </div>
               
      </div>

      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="bootstrap/dist/js/bootstrap.min.js"></script>
        <script  type="text/javascript" src="bootstrap/dist/js/jquery.printPage.js"></script>
        <script type="text/javascript" src="bootstrap/dist/js/jquery-3.2.1.min.js"></script>
        
      
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

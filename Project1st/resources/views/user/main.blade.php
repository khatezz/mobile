

@extends('layouts.navbar')


  @section('title')
      Home
  @endsection
     
      <style type="text/css">
        .item{
          height: 500px;
        }


         
         
       .padding{
        background-color: #283e2e;
        padding-top: 18px;
        margin-right: -40px;
        margin-left: -40px;
      }

      .page-header {
    margin: 0 auto 40px;
    padding: 20px 0;
    position: relative;
    background-color: #f7f7f7;
    border: 0;
    border-top: 1px solid #eee;
    border-bottom: 1px solid #eee;

    }
     
      </style>

     

        <div class="col-sm-9 col-sm-offset-2 col-md-8 col-md-offset-3 " style="margin-top: 30px;">
      <!--     <h1 class="page-header" style="background-color:  #283e2e;color: white;padding-left: 40px;
    padding-top: 5px;margin-left: -40px; margin-right: -40px;margin-top: -20px;font-family: century gothic;">Dashboard</h1> -->
       
        <header class="page-header wpex-supports-mods">
           <h2 style="margin-left: 25px;">Dashboard</h2>
        </header>
             
             <div id="myCarousel1" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel1" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel1" data-slide-to="1"></li>
    <li data-target="#myCarousel1" data-slide-to="2"></li>
    <li data-target="#myCarousel1" data-slide-to="3"></li>
    <li data-target="#myCarousel1" data-slide-to="4"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="img/dnsc.jpg" alt="Los Angeles">
    </div>

    <div class="item">
      <img src="img/im1.jpg" alt="Chicago">
    </div>

    <div class="item">
      <img src="img/im2.jpg" alt="New York">
    </div>

     <div class="item">
      <img src="img/im3.jpg" alt="New York">
    </div>

     <div class="item">
      <img src="img/im4.jpg" alt="New York">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel1" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel1" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
              <!-- <img src="img/dnsc.jpg" class="img-responsive"  width="965px;" height="400px;" > -->


                  <p style="margin-top: 21px;font-size: 18px;text-align: justify;">San Vicente National High School teaches students in grades seventh through tenth in Panabo City, Davao Del Norte of Davao (Region XI). The school has 15 instructional rooms and 1 non-instructional rooms, which are all powered by a power grid. With 881 students, class size is around 59 students. Maria Perpetua Angelita G. Suelto, Ed.D. is in charge of the school, acting as the school's Principal.</p>
              <p></p>   


              <div class="row" style="background-color: #99bd76;">
                <div class="col-md-6 col-lg-4">
                <img src="img/w3.jpg" height="250px" width="250px">
                </div>

                 <div class="col-md-6 col-lg-8">
                    <p style="margin-top: 21px;font-size: 18px;text-align: justify;">San Vicente National High School teaches students in grades seventh through tenth in Panabo City, Davao Del Norte of Davao (Region XI). The school has 15 instructional rooms and 1 non-instructional rooms, which are all powered by a power grid. With 881 students, class size is around 59 students. Maria Perpetua Angelita G. Suelto, Ed.D. is in charge of the school, acting as the school's Principal.
                    </p>
                </div>


                 <div class="col-md-6 col-lg-8">
                    <p style="margin-top: 21px;font-size: 18px;text-align: justify;">San Vicente National High School teaches students in grades seventh through tenth in Panabo City, Davao Del Norte of Davao (Region XI). The school has 15 instructional rooms and 1 non-instructional rooms.
                    </p>
                </div>

                    
              </div>

               <div class="row">
                   <div class="col-md-6 col-lg-12">
                    <p style="margin-top: 21px;font-size: 18px;text-align: justify;">San Vicente National High School teaches students in grades seventh through tenth in Panabo City, Davao Del Norte of Davao (Region XI). The school has 15 instructional rooms and 1 non-instructional rooms, which are all powered by a power grid. With 881 students, class size is around 59 students. Maria Perpetua Angelita G. Suelto, Ed.D. is in charge of the school, acting as the school's Principal.
                    </p>
                  </div>

                   

              </div>


              <div class="row" style="background-color:#99bd76 ">
                   <div class="col-md-6 col-lg-8">
                    <p style="margin-top: 21px;font-size: 18px;text-align: justify;">San Vicente National High School teaches students in grades seventh through tenth in Panabo City, Davao Del Norte of Davao (Region XI). The school has 15 instructional rooms and 1 non-instructional rooms, which are all powered by a power grid. With 881 students, class size is around 59 students. Maria Perpetua Angelita G. Suelto, Ed.D. is in charge of the school, acting as the school's Principal.
                    </p>
                  </div>

                   <div class="col-md-6 col-lg-4">
                      <img src="img/w2.jpg" height="250px" width="250px">
                    </div>

              </div>

              <br>

              <!-- ////////////  image  circle     //////////////////////////////////////////////////////////////////////////-->


              <div class="padding">
                  <h2 style="text-align: center; margin-top: 2px;color: #b2b9b2; padding-bottom: 15px;">The Developers</h2>
              <div class="row placeholders">
                
                <div class="col-xs-6 col-sm-3 placeholder"> 
                  <img src="img/acaso.jpg" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
                  <h4>Label</h4>
                  <span class="text-muted">Something else</span>
                </div>
                <div class="col-xs-6 col-sm-3 placeholder">
                  <img src="img/marivic.jpg" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
                  <h4>Label</h4>
                  <span class="text-muted">Something else</span>
                </div>
                <div class="col-xs-6 col-sm-3 placeholder">
                  <img src="img/alsamie.jpg" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
                  <h4>Label</h4>
                  <span class="text-muted">Something else</span>
                </div>
               

               <div class="col-xs-6 col-sm-3 placeholder">
                  <img src="img/irene.jpg" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
                  <h4>Label</h4>
                  <span class="text-muted">Something else</span>
                </div>
               
              </div>
            </div>  
          
        </div>
      </div>
    </div>




<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="bootstrap/dist/js/bootstrap.min.js"></script>
        <script  type="text/javascript" src="bootstrap/dist/js/jquery.printPage.js"></script>
        <script type="text/javascript" src="bootstrap/dist/js/jquery-3.2.1.min.js"></script>
        
      
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


  
    <!-- /.carousel -->


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    

   
 




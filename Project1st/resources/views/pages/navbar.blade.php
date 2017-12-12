<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
          <title>@yield('title')</title>
        <link rel="stylesheet" type="text/css" href="bootstrap/dist/css/bootstrap.min.css">
   <!--  <link rel="stylesheet" type="text/css" href="bootstrap/dist/css/style.css"> -->
   
    <style type="text/css">
      

.navbar {
  background-color: #3b983b;
}



.panel-body {
    padding: 15px;
    padding-bottom: 33px;
}


.navbar-inverse .navbar-brand {
    color:#58f97c;}


.pads{
  background-color: rgba(121, 185, 121, 0.88);
    margin-left: -142px;
    margin-right: -140px;
    padding-bottom: 7px;
}


.btn-default {
    color: #333;
    background-color: #219a40;
    border-color: #1f8635;
    color: white;
}

.navbar-inverse .navbar-nav>li>a {
    color: #52d298;
}


  

.jumbotron{
      background-color: rgba(238, 238, 238, 0.73);
}


.padding{
    background-color:#e9ffd6;
    padding-top: 18px;
    margin-right: -40px;
    margin-left: -40px;
}

.main {
   
    background-color:rgba(209, 235, 188, 0.87);
    margin-top: 15px;
}



.img-responsive{
  height: 200px;
}


  .prof{
    background-color:  #55b96f;
    padding-top: 163px;
    margin-top: -20px;
  }

div.gallery {
                margin: 3px;
                border: 1px solid #ccc;
                float: left;
                width: 180px;


}

.sidebar {
  display: none;
}

    @media (min-width: 768px) {
  .sidebar {
    position: fixed;
    top: 51px;
    bottom: 0;
    left: 0;
    z-index: 1000;
    display: block;
    padding: 20px;
    overflow-x: hidden;
    overflow-y: auto; 
     background-color: #283e2e;
    border-right: 1px solid #283e2e;
  }


}


  .padding{
        background-color: #283e2e;
        padding-top: 18px;
        margin-right: -40px;
        margin-left: -40px;
}

   body{
          /*background-image: url('img/w4.jpg');*/
          
          background-color: rgba(209, 235, 188, 0.48);
        }


        div.gallery {
    margin: 2px;
    border: 1px solid #ccc;
    float: left;
    width: 180px;
}

div.quiz {
    margin: 20px;
    border: 1px solid #ccc;
    float: left;
    width: 250px;
}

div.lesson {
    margin: 20px;
    border: 1px solid #ccc;
    float: left;
    width: 350px;
    height: 250px;
    position: relative;
}

div.gallery:hover {
    border: 1px solid #777;
}

div.quiz:hover {
    border: 5px solid #777;
}

div.lesson:hover .image {
     opacity: 0.3;
}

.lesson:hover .middle {
  opacity: 1;

}

div.gallery img {
    width: 100%;
    height: auto;
}

div.quiz img {
    width: 100%;
    height: auto;
}

div.lesson img {
    width: 100%;
   height: auto;
}

div.desc {
    padding: 15px;
    text-align: center;
}

.image1{
    padding: 26px;
    background-color: whitesmoke;
    margin-right: 5px;
  }

  .quizz{
    padding: 26px;
    background-color: #292f29;
    margin-right: 5px;
  }

  .quizmargin{
    margin-left: 15px;
  }

  .addpad{
    padding: 5px;
    background-color:  rgba(150, 208, 150, 0.62);
    margin-top: 68px;
    padding-bottom: 350px;
  }

  div.quiztitle{
    text-align: center;
    font-size: 20px;
    
  }

  .panel-success>.panel-heading {
   color: #283e2e;
    background-color: #55b96f;
    border-color: #d6e9c6;
  }

 @media (min-width: 768px) {
  .main {
    padding-right: 40px;
    padding-left: 40px;
    margin-top: 25px;
  }


}

.image1{
    padding: 26px;
    background-color: whitesmoke;
   
    margin-right: 5px;
  }


    .imagetodo{
      margin-left: -26px;
    }


    .navbar-inverse .navbar-nav>li>a {
    color: #52d298;
}


  

.jumbotron{
      background-color: rgba(238, 238, 238, 0.73);
}


.padding{
    background-color:#e9ffd6;
    padding-top: 18px;
    margin-right: -40px;
    margin-left: -40px;
}

.main {
   
    background-color:rgba(209, 235, 188, 0.87);
    margin-top: 15px;
}



.img-responsive{
  height: 200px;
}


  .prof{
    background-color:  #55b96f;
    padding-top: 163px;
    margin-top: -20px;
  }


body {
  padding-top: 50px;
}


/*
 * Global add-ons
 */

.sub-header {
  padding-bottom: 10px;
  border-bottom: 1px solid #eee;
}

/*
 * Top navigation
 * Hide default border to remove 1px line.
 */
.navbar-fixed-top {
  border: 0;
}

.nav-sidebar {
  margin-right: -21px; /* 20px padding + 1px border */
  margin-bottom: 20px;
  margin-left: -20px;
}
.nav-sidebar > li > a {
  padding-right: 20px;
  padding-left: 20px;
}
.nav-sidebar > .active > a,
.nav-sidebar > .active > a:hover,
.nav-sidebar > .active > a:focus {
  color: #fff;
  background-color: #42ca53;;
}

/*
 * Main content
 */

.main {
  padding: 20px;
}
@media (min-width: 768px) {
  .main {
    padding-right: 40px;
    padding-left: 40px;
  }
}
.main .page-header {
  margin-top: 0;
}


/*
 * Placeholder dashboard ideas
 */

.placeholders {
  margin-bottom: 30px;
  text-align: center;
}
.placeholders h4 {
  margin-bottom: 0;
}
.placeholder {
  margin-bottom: 20px;
}
.placeholder img {
  display: inline-block;
  border-radius: 50%;
}



.nav>li>a {
    position: relative;
    display: block;
    padding: 10px 15px;
    color: #1c944c;;
}

 div.images {
          margin: 5px;
          border: 1px solid #ccc;
          float: left;
          width: 230px;
          height: 230px;
         
        }

        div.images:hover {
            border: 5px solid  #17e617;
        }

        div.images img {
            width: 100%;
           height: auto;
        }

        div.desc {
            padding: 15px;
            text-align: center;

        }
         div.line{
          margin-left: 30px;
        }

    </style>

</head>
<body>
        <nav class="navbar navbar-inverse  navbar-fixed-top" style="background-color: #45924f;">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project name</a>
        </div>


        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="{{route('main')}}">Dashboard</a></li>
           <!--  <li><a ui-sref="signup">Settings</a></li> -->
            <li><a href="{{route('logout')}}">Signout <span class="glyphicon glyphicon-arrow-right"></span></a></li>
            
          </ul>
          
        </div>
      </div>
    </nav>




 <!-- side bar //////////////////////////////////////////////////////////////////////////-->
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <div class="prof">
            <img src="uploads/avatars/{{$auth->avatar}}" class="img-circle" style="width: 110px;
              height: 110px;
              margin-top: -148px;
              margin-left: 40px;
              margin-bottom: 72px;">
              <p style="margin-top: -44px;margin-left: 54px;color: white;">Criserza</p>
              <a href="{{route('profile')}}" class="btn btn-default btn-md" style="margin-left: 41px;margin-bottom: 12px;">View Profile</a>
            </div>
            <li class="active"><a href="#">Overview <span class="sr-only">(current)</span></a></li>
            
            <li><a href="{{route('lesson')}}">Lessons <span class="glyphicon glyphicon-book"></span></a></li>
            
            <li><a href="{{route('todo')}}">To Do <span class="glyphicon glyphicon-pencil"></span></a></li>
            <li><a data-toggle="modal" data-target="#choose">Reports <span class="glyphicon glyphicon-folder-open"></span></a></li>
      
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="">Videos <span class="glyphicon glyphicon-film"></span></a></li>
            
          </ul>
         
        </div>





</body>

    <div class="modal fade" id="choose">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×
  
          </button>
            <div class="modal-title">Choose Reports</div>
            
          </div>
          <div class="modal-body" style="margin-left: 75px;">
             
            <div class="gallery">
            <a data-toggle="modal" data-target="#choosesection">
              <img src="img/create.png" alt="Fjords" width="300" height="200" class="image1">
            </a>
            <div class="desc">Registered Students</div>
          </div>

          <div class="gallery">
            <a data-toggle="modal" data-target="#chooseperform">
              <img src="img/perform.png" alt="Forest" width="300" height="200"  class="image1">
            </a>
            <div class="desc">Student's Performance</div>
          </div>

          

          <div class="modal-footer">
              
          </div>
        </div>
      </div>
    </div>
    </div>




   <div class="modal fade" id="choosesection">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×
  
          </button>
            <div class="modal-title">Section</div>
            
          </div>
          <div class="modal-body">
             
              <a href="{{route('studcharles')}}" class="btn btn-info btn-block">CHARLES</a>
              <a href="{{route('augustine')}}" class="btn btn-info btn-block">AUGUSTINE</a>
              <a href="{{route('edward')}}" class="btn btn-info btn-block">EDWARD</a>
              <a href="{{route('dominic')}}" class="btn btn-info btn-block">DOMINIC</a>
          <div class="modal-footer">
              
          </div>
        </div>
      </div>
    </div>
    </div>


     <div class="modal fade" id="chooseperform">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×
  
          </button>
            <div class="modal-title">Section</div>
            
          </div>
          <div class="modal-body">
             
              <a href="" class="btn btn-info btn-block">CHARLES</a>
              <a href="{{route('reports')}}" class="btn btn-info btn-block">AUGUSTINE</a>
              <a href="{{route('reports')}}" class="btn btn-info btn-block">EDWARD</a>
              <a href="{{route('reports')}}" class="btn btn-info btn-block">DOMINIC</a>
          <div class="modal-footer">
              
          </div>
        </div>
      </div>
    </div>
    </div>

       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="bootstrap/dist/js/bootstrap.min.js"></script>
        <script  type="text/javascript" src="bootstrap/dist/js/jquery.printPage.js"></script>
        <script type="text/javascript" src="bootstrap/dist/js/jquery-3.2.1.min.js"></script>
        

      
       
        
</html>
  





       


 







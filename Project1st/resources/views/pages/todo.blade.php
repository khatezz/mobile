
    @extends('layouts.navbar')

                @section('title')
                  Todo
                @endsection
<style >
         /* body{
          background-image: url('img/b1.jpg');
        }*/
        div.align{
          margin-left: 90px;
        }
      </style>
                
        <div class="col-sm-9 col-sm-offset-2 col-md-8 col-md-offset-3 main " style="padding-right: 3px;
    padding-left: 7px;">

 
                  
              <div class="align">
          <div class="gallery">
            <a href="{{route('addquiz')}}">
              <img src="img/create.png" alt="Fjords" width="300" height="200" class="image1">
            </a>
            <div class="desc">Create Quiz</div>
          </div>

          <div class="gallery">
            <a href="{{route('announcement')}}">
              <img src="img/announce.png" alt="Forest" width="300" height="200"  class="image1">
            </a>
            <div class="desc">Announcement</div>
          </div>

          <div class="gallery">
            <a href="{{route('charles')}}">
              <img src="img/record.png"  alt="Forest" width="300" height="200"  class="image1">
            </a>
            <div class="desc">Add Student</div>
          </div>


          <div class="gallery">
            <a href="{{route('uploadfile')}}" >
              <img src="img/add.png" alt="Northern Lights" width="300" height="200"  class="image1">
            </a>
            <div class="desc">Share Files</div>
          </div>


          

         <!--  <div class="gallery">
            <a href="" >
              <img src="img/print.png" alt="Northern Lights" width="300" height="200"  class="image1">
            </a>
            <div class="desc">Print</div>
          </div> -->
          </div>
</div>
          


 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="bootstrap/dist/js/bootstrap.min.js"></script>
        <script  type="text/javascript" src="bootstrap/dist/js/jquery.printPage.js"></script>
        <script type="text/javascript" src="bootstrap/dist/js/jquery-3.2.1.min.js"></script>
        
      
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

@extends('layouts.navbar')
                @section('title')
                  Lessons
                @endsection
        <style>
       /*   img{
        width: 350px;
        height: 250px;
    margin: 10px;
  }*/

    /* body{
          background-image: url('img/b1.jpg');
        }*/
        div.align{
          margin-left: 50px;
        }

        div.modal-header{
            background-color: gray;
            color: white;
            font-family: century gothic;
        }

        div.images{
         margin-left: 25px;
        }

       

        div.centert{
          padding: 15px;
          text-align: center;
          margin-top: -174px;
          color: white;
          font-size: 25px;

        }
       

       

.image {
  opacity: 1;
  display: block;
 
  height: 250px;
  transition: .5s ease;
  backface-visibility: hidden;
}

.middle {
  transition: .5s ease;
  opacity: 0;
  position: absolute;
  top: 35%;
  left: 18%;
  /*transform: translate(-20%, -23%);
  -ms-transform: translate(-50%, -50%)*/
}



.text {
  background-color: #4CAF50;
  color: white;
  font-size: 16px;
  padding: 16px ;
  text-align: center;
}
    

        </style>
       


              
      
        <div class="col-sm-9 col-sm-offset-2 col-md-8 col-md-offset-3 " style="padding-right: 3px;
        padding-left: 7px;">
        <h2 style=" font-family: century gothic;
        background-color: #a7f5a7;
        padding-bottom: 49px;
        margin-bottom: -68px;
        padding-top: 13px;
        padding-left: 10px;text-align: center;">Teacher's Guide</h2>
          <div class="addpad" style="padding-bottom: 600px">
            <div class="align">
                    <div class="lesson">

                      <button data-toggle="modal" data-target="#addLessons">
                        <img src="img/m1.png" class="image">
                      </button>
                        <div class="middle">
                        <div class="text">Force, Motion and Energy <br>1st Quarter</div>
                        </div>
                     </div> 

                    <div class="lesson">
                      <button data-toggle="modal" data-target="#addLessons2">
                        <img src="img/earth1.jpg" class="image">
                      </button>
                      <div class="middle" style="left: 27%;">
                        <div class="text">Earth and Space<br>2nd Quarter</div>
                      </div>
                       
                    </div>

                     <div class="lesson">
                      <button data-toggle="modal" data-target="#addLessons3">
                        <img src="img/atoms.jpg" class="image">
                      </button>

                      <div class="middle" style="left: 32%;">
                        <div class="text">Matter<br>3rd Quarter</div>
                      </div>
                       
                      </div>

                      <div class="lesson">
                        <button data-toggle="modal" data-target="#addLessons4">
                          <img src="img/ecosystem.jpg" class="image">
                        </button>
                        <div class="middle" style="left: 14%;">
                          <div class="text">Living Things and Environment <br>4th Quarter</div>
                        </div>
                         
                      </div>
           </div>
          </div>

          
      </div>




                            <div class="modal fade" id="addLessons">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                  <button class="close" data-dismiss="modal" aria-hidden="true">x</button>
                                    <div class="modal-title">Force, Motion and Energy</div>
                                    
                                  </div>
                                  <div class="modal-body">
                                  <div class="line">
                                    <div class="images">
                                       <a href="{{route('grade1st_a')}}" class="btn btn"><img src="img/m1.png"  ></a>
                                    <div class="desc">1</div>
                                    </div>

                                    <div class="images">
                                        <a href="{{route('grade1st_b')}}" class="btn btn"><img src="img/m1.png"  ></a>
                                    <div class="desc">2</div>

                                    </div>

                                    <div class="images">
                                        <a href="{{route('grade1st_c')}}" class="btn btn"><img src="img/m1.png"></a>
                                    <div class="desc">3</div>

                                    </div>

                                    <div class="images">
                                        <a href="{{route('grade1st_d')}}" class="btn btn"><img src="img/m1.png"></a>
                                    <div class="desc">4</div>

                                    </div>

                                    <div class="images">
                                         <a href="{{route('grade1st_e')}}" class="btn btn"><img src="img/m1.png"></a>
                                    <div class="desc">5</div>

                                    </div>

                                    <div class="images">
                                        <a href="{{route('grade1st_f')}}" class="btn btn"><img src="img/m1.png"></a>
                                    <div class="desc">6</div>


                                    </div>
                                   
                                   
                                  </div>
                                  </div>
                                  <div class="modal-footer">
                                    
                                  </div>
                                </div>
                              </div>
                            </div>






                            <div class="modal fade" id="addLessons2">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                  <button class="close" data-dismiss="modal" aria-hidden="true">x</button>

                                    <div class="modal-title">Earth and Space</div>
                                    
                                  </div>
                                  <div class="modal-body">
                                    <div class="line"> 
                                      <div class="images">
                                         <a href="{{route('grade2nd_a')}}" class="btn btn"><img src="img/earth1.jpg"></a>
                                         <div class="desc">1</div>
                                      </div>

                                      <div class="images">
                                          <a href="{{route('grade2nd_b')}}" class="btn btn"><img src="img/earth1.jpg"  ></a>
                                         <div class="desc">2</div>

                                      </div>

                                      <div class="images" style="margin-left: 129px;">
                                          <a href="{{route('grade2nd_c')}}" class="btn btn"><img src="img/earth1.jpg" ></a>
                                         <div class="desc">3</div>

                                      </div>

                                    </div>
                                  </div>
                                  <div class="modal-footer">
                                    
                                  </div>
                                </div>
                              </div>
                            </div>



                            <div class="modal fade" id="addLessons3">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                  <button class="close" data-dismiss="modal" aria-hidden="true">x</button>

                                    <div class="modal-title">Matter</div>
                                    
                                  </div>
                                  <div class="modal-body">

                                    <div class="line">
                                      <div class="images">
                                        <a href="{{route('grade3rd_a')}}" class="btn btn"><img src="img/atoms.jpg" ></a>
                                        <div class="desc">1</div>
                                      </div>
                                      
                                      <div class="images">
                                        <a href="{{route('grade3rd_b')}}" class="btn btn"><img src="img/atoms.jpg" ></a>
                                        <div class="desc">2</div>

                                      </div>
                                          
                                      <div class="images" style="margin-left: 129px;">
                                      <a href="{{route('grade3rd_c')}}" class="btn btn"><img src="img/atoms.jpg" ></a>
                                        <div class="desc">3</div>

                                      </div>
                                    </div>
                                  </div>
                                  <div class="modal-footer">
                                    
                                  </div>
                                </div>
                              </div>
                            </div>






                            <div class="modal fade" id="addLessons4">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                  <button class="close" data-dismiss="modal" aria-hidden="true">x</button>

                                    <div class="modal-title">Living things and Thier Environment</div>
                                    
                                  </div>
                                  <div class="modal-body">

                                  <div class="line">
                                      <div class="images">
                                        <a href="{{route('grade4th_a')}}" class="btn btn"><img src="img/ecosystem.jpg" ></a>
                                        <div class="desc">1</div>
                                      </div>
                                         
                                      <div class="images">
                                        <a href="{{route('grade4th_b')}}" class="btn btn"><img src="img/ecosystem.jpg"></a>
                                        <div class="desc">2</div>

                                      </div>
                                      
                                      <div class="images">
                                        <a href="{{route('grade4th_c')}}" class="btn btn"><img src="img/ecosystem.jpg" ></a>
                                        <div class="desc">3</div>

                                      </div>


                                      <div class="images">
                                        <a href="{{route('grade4th_d')}}" class="btn btn"><img src="img/ecosystem.jpg" ></a>
                                        <div class="desc">4</div>

                                      </div>    
                                        
                                   </div>
                                  </div>
                                  <div class="modal-footer">
                                    
                                  </div>
                                </div>
                              </div>
                            </div>
                  
             

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="bootstrap/dist/js/bootstrap.min.js"></script>
        <script  type="text/javascript" src="bootstrap/dist/js/jquery.printPage.js"></script>
        <script type="text/javascript" src="bootstrap/dist/js/jquery-3.2.1.min.js"></script>
        
      
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

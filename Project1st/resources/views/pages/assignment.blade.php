@extends('layouts.navbar')
                @section('title')
                  Assignment
                @endsection
      <style>
    .body{
      border-style: outset;
    padding: 10px;
    background-color: white;
    }

    


 .margin{
    
          margin-left: 150px;
          margin-right: -95px;
          margin-top: -40px;
          }
  </style>
        


               
                <div class="margin">
       <div class="container" style="margin-top:120px;">
           <!--  <div class="row">
              <div class="col-md-10">
                
              </div>

            <div class="col-md-10">
                <div class="row"> -->
                          
                  
                          


                      <div class="body">
         <div class="panel panel-success">
          <div class="panel-heading">Add Lessons</div>
            <div class="panel-body">

           
             <form action="{{route('add_assign')}}" method="POST">
               <div class="form-group">
                 <label for="title">Title:</label>
                  <input type="text" name="title" class="form-control file_title_c" id="file_title_id" required="">
                  <input type="file" name="file"  class="filename">
               </div>


             

               
               {{csrf_field()}}
               <button class="btn btn-primary">Create <span class="glyphicon glyphicon-pencil"></span></button>

               </form>
             

               
            </div>
           </div>

           
          </div>
          
          

          <table class="table table-hover" style="margin-top: 25px;border-style: solid;">
             <thead>
               <tr>
                 <th>Id</th>
                 <th>Note</th>
                 <th>Date created</th>
                 <th>Date submitted</th>
                 <th>Action</th>
               </tr>
             </thead>

             <tbody>
               <tr>
                 <td>1</td>
                 <td>Please take a quiz on motion ...</td>
                 <td>09-05-17</td>
                 <td>09-12-17</td>
                 <td>
                   <button type="button" class ="btn btn-info btn-xs" ng-click ="updateStudent(student.id)">Edit</button>
                    <button type="button" class ="btn btn-danger btn-xs" ng-click ="deleteStudent(student.id, $index)">Delete</button>
                 </td>
               </tr>

                <tr>
                 <td>1</td>
                 <td>Please take a quiz on motion ...</td>
                 <td>09-05-17</td>
                 <td>09-12-17</td>
                 <td>
                   <button type="button" class ="btn btn-info btn-xs" ng-click ="updateStudent(student.id)">Edit</button>
                    <button type="button" class ="btn btn-danger btn-xs" ng-click ="deleteStudent(student.id, $index)">Delete</button>
                 </td>
               </tr>
               
             </tbody>
           </table>

 
                
                </div>
            </div>
            </div>
        </div>




 
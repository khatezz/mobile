         <!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
            <link rel="stylesheet" type="text/css" href="bootstrap/dist/css/bootstrap.min.css"> -->

    <!DOCTYPE html>
    <html>
    <head>
      <title>Print Preview</title>
       <link rel="stylesheet" type="text/css" href="bootstrap/dist/css/style.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/dist/css/bootstrap.min.css">

       <style type="text/css">
      .table{
        border: 1px solid;
        border-collapse: collapse;
        margin: 0 auto;
        text-align: left;
        width: 100%;
      }

      tr th{
        background: #eee;
        border: 1px solid;
      }

      tr th{
        border: 1px solid;
      }
    </style>
    </head>
    <body>
    
  
   <div class="col-md-7 col-sm-offset-3 ">
   
      <table class="table">
        <caption><h3>Section Charles</h3></caption>
              <thead>
                <tr>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Section</th>
                  <th>Username</th>
                  
                 
                </tr>
              </thead>
              <tbody> 

                @forelse($student as $students)
                  <tr>
                   
                    <td>{{$students->fname}}</td>
                    <td>{{$students->lname}}</td>
                    <td>{{$students->section}}</td>
                    <td>{{$students->username}}</td>
                    

                  
                    </td>
                  </tr>
                  @empty 
                    <p>No Registered Students Available</p>
                @endforelse
                
              </tbody>
            </table>

            <button onclick="myFunction()" class="btn btn"> <span class="glyphicon glyphicon-print" style=" "></span> Print</button>
           </div>
         
    </body>

       <script>
            function myFunction() {
                window.print();
            }
            </script>
    </html>
   

    

        



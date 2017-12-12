

                @extends('layouts.navbar')

                @section('title')
                  Profile
                @endsection
       <div class="container" style="margin-top:82px;">
      
       <div class="row">

        <div class="col-md-6 col-md-offset-3">
          <div class="paddingbody" style="background-color: rgba(40, 62, 46, 0.59);padding: 25px;">
            <a href="" class="pull-right" style="margin-top: -25px;text-decoration: none;">Add Profile Details</a>
          <div class="panel panel-default">
            <div class="panel-body text-center" style="background-color: gainsboro;">
                <img src="uploads/avatars/{{ $user->avatar }}" style="width: 150px;height: 150px;border-radius: 50%;">
                 <h2>{{ $user->username }}</h2>
                <form enctype="multipart/form-data" action="{{route('profile')}}" method="POST">
                  <label >Update Profile Image</label>
                  <input type="file" name="avatar" style="margin-bottom: 10px;margin-left: 157px;">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <input type="submit" name="submit" class="btn btn-primary btn-sm" value="Submit" >
                </form>
                
                

            </div>
          </div>


                

        <div class="userprof" style="background-color: #bbb7b7;
          color: black;
          padding-top: top;
          padding: 10px;
          margin-top: -21px;">       
            <h3 style="font-family: century gothic">Profile</h3><br>
            <b style="margin-right:15px;">
            <div class="info" style="background-color:#c5c5c5;padding: 5px;">
              First Name:</b> {{ $user->fname}}
              <br>
              <b style="margin-right:15px;">
              Last Name:</b> {{ $user->lname}}<br>  
              <b style="margin-right:15px;">
              Username:</b> {{ $user->username}}
            </div>
        </div>
            

          
            
          
        </div>
                      
        </div>                    
                  
      </div>
      </div>
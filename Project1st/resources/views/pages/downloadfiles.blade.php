@extends('layouts.navbar');

	@section('title')

		Download Files
	@endsection


   <div class="col-md-7 col-sm-offset-3 main" style="margin-top: 35px;">
   		
               <a  href="{{route('uploadfile')}}" style="text-decoration: none;">Back to Upload Files</a>
   		
         <div class="panel panel-success">
   			<div class="panel-heading">
   				<center>Download Files</center>
   			</div>
   			<div class="panel-body">
            @if(Session::has('ok'))
                     <div class="alert alert-info">
                        {{Session::get('ok')}}
                     </div>
                  @endif
   				<table class="table table-bordered">
   					<thead>
   						<th>Title</th>
   						<th>Upload Files</th>
   						<th>Action</th>
   					</thead>

   					<tbody>
   						<tr>
   						@forelse($download as $downloads)
   							<td>{{$downloads->file_title}}</td>
   							<td>{{$downloads->file_name}}</td>
   							<td>
   							
   								 <a href="{{route('deldownload',['id'=> $downloads->id])}}" class="btn btn-danger " >
                              <span class="glyphicon glyphicon-trash"></span>
                           </a>

                           <a  href="up_file/{{$downloads->file_name}}" download="{{$downloads->file_name}}">
                           <button type="button" class="btn btn-primary">
   								<span class="glyphicon glyphicon-download"> Download</span></button>
   								</a>
                          
   							</td>
   						</tr>
   						 @empty
						<p>No Download files Available</p>
						 @endforelse
   					</tbody>
   				</table>
   			</div>
            <div class="footer">
               {{$download->links()}}
            </div>
   		</div>

   </div>
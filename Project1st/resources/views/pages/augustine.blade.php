@extends('layouts.navbar')
	@section('title')
		Augustine
	@endsection
   <div class="col-md-7 col-sm-offset-3 main" style="margin-top: 35px;">
   	<span class="glyphicon glyphicon-print pull-right">
   		<a href="{{route('printpreview')}}" style="text-decoration: none;margin-left: 5px;font-size: 16px;" class="pull-right" >Print</a>
   		</span>
   	
   		<h2 style="font-family: century gothic;">Registered Student </h2>
   		<div class="tablecharles" style="background-color: whitesmoke;padding: 10px;">
   		<table class="table table-bordered">
   			<caption><center>Section Augustine</center></caption>
   			<thead>
   				<tr>
   					<th>First Name</th>
   					<th>Last Name</th>
   					<th>Section</th>
   				</tr>
   			</thead>

   			<tbody>
   				 @forelse($augustine as $students)
                  <tr>
                   
                    <td>{{$students->fname}}</td>
                    <td>{{$students->lname}}</td>
                    <td>{{$students->section}}</td>
                   
                    

                  
                    </td>
                  </tr>
                  @empty 
                    <p>No Registered Students Available</p>
                @endforelse
   			</tbody>
   		</table>
   		</div>
   </div>
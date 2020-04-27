@extends('layout')

@section('main-content')
<div class="w-75 mt-5 mx-auto">
	<div class="card">


	<div class="card-body">
	<h2>Welcome {{$show->student_name}}</h2>
	
<div class="user-photo">
<img style="width:200px;" src="{{URL::to('public/students_photos/'.$show->student_photo)}}"></img>
</div>



<table class="table">
  <tr>
	  <td>Student Name</td>
	  <td>{{$show->student_name}}</td>
  </tr>
  <tr>
	  <td>Student Email</td>
	  <td>{{$show->student_email}}</td>
  </tr>
  <tr>
	  <td>Student Cell</td>
	  <td>{{$show->student_cell}}</td>
  </tr>
  <tr>
	  <td>Batch</td>
	  <td>{{$show->student_batch}}</td>
  </tr>
 
</table>



	</div>
	</div>
</div>



@endsection

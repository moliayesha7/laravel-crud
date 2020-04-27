@extends('layout')

@section('main-content')
<div class="w-50 mt-5 mx-auto">
	<div class="card">


	<div class="card-body">
	<h2>All Student Data</h2>
	<hr/>

	<form action="{{action('StudentManagement@update',$show->id)}}" method="POST">
@csrf
<input type="hidden" name="_method" value="PUT" />
  <div class="form-group">
    <label >Student Name</label>
    <input name="sname" value="{{$show->student_name}}" type="text" class="form-control">
  </div>
  <div class="form-group">
    <label >Student Email</label>
    <input name="semail" value="{{$show->student_email}}" type="text" class="form-control">
  </div>
  <div class="form-group">
    <label >Student Cell</label>
    <input name="scell" value="{{$show->student_cell}}" type="text" class="form-control">
  </div>
  <div class="form-group">
    <label >Batch</label>
    <input name="sbatch" value="{{$show->student_batch}}" type="text" class="form-control">
  </div>
  
  <div class="form-group">

    <input name="" type="submit" class="btn btn-success btn-block" value="Add New Student">
  </div>
  
</form>




	</div>
	</div>
</div>



@endsection
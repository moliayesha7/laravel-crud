@extends('layout')

@section('main-content')
<div class="w-50 mt-5 mx-auto">


@if(count($ )>0)
@foreach($errors->all() as $err)

<li>{{$err}}</li>


@endforeach
@endif
	<div class="card">


	<div class="card-body">
	<h2>All Student Data</h2>
	<hr/>

	<form action="{{action('StudentManagement@store')}}" method="POST" enctype="multipart/form-data">
@csrf
  <div class="form-group">
    <label >Student Name</label>
    <input name="sname" value="" type="text" class="form-control">
  </div>
  <div class="form-group">
    <label >Student Email</label>
    <input name="semail" value="" type="text" class="form-control">
  </div>
  <div class="form-group">
    <label >Student Cell</label>
    <input name="scell" value="" type="text" class="form-control">
  </div>
  <div class="form-group">
    <label >Batch</label>
    <input name="sbatch" value="" type="text" class="form-control">
  </div>
  <div class="form-group">
    <label >Student Photo</label>
    <input name="sphoto" value="" type="file" >
  </div>
  <div class="form-group">

    <input name="" type="submit" class="btn btn-success btn-block" value="Add New Student">
  </div>
  
</form>




	</div>
	</div>
</div>



@endsection
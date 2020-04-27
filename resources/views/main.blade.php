@extends('layout')

@section('main-content')
<div class="w-75 mt-5 mx-auto">
	<div class="card">


	<div class="card-body">
	<h2>All Student Data <a class="btn btn-sm btn-success float-right" href="{{action('StudentManagement@create')}}">Add New Student</a></h2>
	
<table class="table">
  <thead>
    <tr>
      <th scope="col">SL</th>
      <th scope="col">Student Name</th>
      <th scope="col">Student Email</th>
	  <th scope="col">Student Cell</th>
	  <th scope="col">Batch</th>
      <th scope="col">Student Photo</th>
	  <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
   <?php $i=1;?>
@foreach($data as $d)

   <tr>
      <th scope="row"><?php echo $i;$i++;?></th>
      <td>{{$d->student_name}}</td>
      <td>{{$d->student_email}}</td>
	  <td>{{$d->student_cell}}</td>
	  <td>{{$d->student_batch}}</td>
	  <td><img style="width:60px;height:60px;" src="{{URL::to('public/students_photos/'.$d->student_photo)}}"></img></td>
	  <td>
	  
	  <a class="btn btn-sm btn-info" href="{{action('StudentManagement@show',$d->id)}}">View</a>

	  <a class="btn btn-sm btn-warning" href="{{action('StudentManagement@edit',$d->id)}}">Edit</a>

	 

	  <form class="d-inline" action="{{action('StudentManagement@destroy',$d->id)}}" method="POST">
		  @csrf
		  <input type="hidden" name="_method" value="DELETE"/>
		  <input class="btn btn-sm btn-danger" type="submit" value="Delete">
	  </form>
	  </td>
	</tr>
	@endforeach
  </tbody>
</table>



	</div>
	</div>
</div>



@endsection

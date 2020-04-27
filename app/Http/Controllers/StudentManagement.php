<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
class StudentManagement extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Student::all();
        return view('main',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('add-student');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $this->validate($request,[
           'sname'=>'required | min:5|max:10',
           'semail'=>'required | email',
           'scell'=>'required',
           'sbatch'=>'required',
           'sphoto'=>'required | image'

       ]);
        $image=$request->file('sphoto');
        $image_name=md5(time().rand()).".".$image->getClientOriginalExtension();
        $image->move(public_path('students_photos'),$image_name);


         Student::create([
            'student_name'=> $request->sname,
            'student_email'=>$request->semail,
            'student_cell'=>$request->scell,
            'student_batch'=>$request->sbatch,
            'student_photo'=>$image_name
         ]);
         return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $show=Student::find($id);
       return view('profile',compact('show'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $show=Student::find($id);
        return view('update-student',compact('show'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $update_student=  Student::find($id);



        $update_student -> student_name = $request-> sname;
        $update_student -> student_email = $request-> semail;
        $update_student -> student_cell = $request-> scell;
        $update_student -> student_batch = $request-> sbatch;

        $update_student->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete_student=  Student::find($id);
        $delete_student->delete();
        return redirect()->back();
    }
}

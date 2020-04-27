<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
   protected $fillable=['student_name','student_email','student_cell','student_batch','student_photo'];
}

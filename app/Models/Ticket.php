<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $fillable = ['emp_name','student_name','phone_no','issue','resp_emp','notes','status','emp_id','notes2'];
    use HasFactory;
}

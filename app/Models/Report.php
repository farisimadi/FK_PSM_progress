<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;

    protected $fillable = ['date', 'student_id', 'student_name', 'student_progress', 'comment', 'status', 'lecturer_comment'];
}

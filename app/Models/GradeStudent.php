<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GradeStudent extends Model
{
    protected $fillable = [
        'id_grade',
        'id_student',
    ];
}

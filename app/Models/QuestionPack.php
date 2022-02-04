<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestionPack extends Model
{
    use HasFactory;

    protected $fillable = [
        'question_pack_code',
        'question_pack_name',
        'semester',
        'school_year_start',
        'school_year_end',
    ];
}

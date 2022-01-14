<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    protected $fillable = [
        'subject_code',
        'subject_name'
    ];

    public static function checkCodeIsExist($code, $isUpdate = false)
    {
        return Self::where('subject_code', $code)->exists();
    }
}

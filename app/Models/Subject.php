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

    public static function checkDataIsExists($data, $id = null)
    {
        $checkExists = Self::where('subject_code', $data['subject_code'])
            ->where(function ($query) use ($data) {
                $query->orWhere('subject_name', $data['subject_name'])->limit(1);
            });

        if ($id) {
            $checkExists = $checkExists->where('id', '!=', $id);
        }

        return $checkExists->exists(); 
    }
}

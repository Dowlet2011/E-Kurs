<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    protected $fillable = [
        'course_id',
        'teacher_id',
        'title',
        'description',
        'file_path',
    ];

    public function course() {
        return $this->belongsTo(Course::class);
    }

    public function teacher() {
        return $this->belongsTo(Teacher::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Course extends Model
{
    use HasFactory;
    protected $fillable = [
        'teacher_id',
        'name',
        'code',
        'description',
    ];

    public function teacher(): BelongsTo
    {
        return $this->belongsTo(Teacher::class,);
    }

    public function students()
    {
        return $this->belongsToMany(Student::class, 'course_students');
    }

    public function works()
    {
        return $this->hasMany(Work::class);
    }

    public function getName()
    {
        $locale = app()->getLocale();

        if ($locale == 'tm') {
            return $this->name_tm ?: $this->name;
        }
        return $this->name;
    }

}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Student extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'surname',
        'age',
        'phone_num',
    ];

    public function courses()
    {
        return $this->belongsToMany(Course::class, 'course_students');
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}

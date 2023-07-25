<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Batch extends Model
{
    use HasFactory;

    protected $fillable = ['max_seat', 'group_link', 'start_date','course_id','status','number'];
    protected $with = ['course'];


    // Course
    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}

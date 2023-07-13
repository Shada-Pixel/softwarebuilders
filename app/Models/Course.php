<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'cover',
        'current_price',
        'regular_price',
        'materials',
        'short_description',
        'description',
        'curriculam',
        'time_duration',
        'media_link',
        'rating_number',
        'rating_quantity',
        'instructor_id',
        'user_id',
        'category_id',
        'status'
    ];


    public static function saveCourse($cr)
    {
        $cd = [
            'name' => $cr->name,
            'slug'=> $cr->slug,
            'keywords' => $cr->keywords
        ];
        $cuc = self::updateOrCreate(['id' => $cr->editId],$cd);




        
        return $cuc;
    }

}

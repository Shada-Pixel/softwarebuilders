<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug', 'keywords'];




        /**
     * This function creates/updates the category
     * @param $categoryRequest
     * @purpose admin
     * @return collection
     */
    public static function saveCategory($cr)
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

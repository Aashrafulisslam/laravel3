<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    private static $category;
    public static function saveCategory($request){
        self::$category = new category();
        self::$category->ctg_name = $request->ctg_name;
        self::$category->save();
    }
    
}

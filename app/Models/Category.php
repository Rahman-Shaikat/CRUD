<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    private static $category;

    public static function saveInfo($request, $id = null)
    {
        if ($id != null) {
            self::$category = Category::find($id);
        } else {
            self::$category = new Category();
        }
        self::$category->name = $request->name;
        self::$category->save();
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}

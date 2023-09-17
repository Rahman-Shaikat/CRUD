<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public static $product, $image, $imageNewName, $imgUrl, $dir;
    public static function saveInfo($request, $id = null)
    {
        if ($id != null) {
            self::$product = Product::find($id);
        } else {
            self::$product = new Product();
        }
        self::$product->name = $request->name;
        self::$product->code = $request->code;
        self::$product->price        = $request->price;
        if ($request->file('image')) {
            if (self::$product->image) {
                if (file_exists(self::$product->image)) {
                    unlink(self::$product->image);
                }
            }
            self::$product->image    = self::saveImage($request);
        }
        self::$product->category_id  = $request->category_id;
        self::$product->save();
    }


    public static function saveImage($request)
    {
        self::$image = $request->file('image');
        self::$imageNewName = $request->name . '_' . rand() . '.' . self::$image->extension();
        self::$dir = 'assets/img/';
        self::$imgUrl = self::$dir . self::$imageNewName;
        self::$image->move(self::$dir, self::$imageNewName);
        return self::$imgUrl;
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}

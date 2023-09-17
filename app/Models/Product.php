<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public static $product;
    public static function saveInfo($request, $id = null)
    {
        if ($id != null) {
            self::$product = Product::find($id);
        } else {
            self::$product = new Product();
        }
        dd([
            'name' => $request->name,
            'code' => $request->code,
            'price' => $request->price,
            'image' => $request->file('image'),
            'category_id' => $request->category_id,
        ]);

        self::$product->name = $request->name;
        self::$product->code = $request->code;
        self::$product->price        = $request->price;
        if ($request->file('image')) {
            self::$product->image    = self::saveImage($request);
        }
        self::$product->category_id  = $request->category_id;
        self::$product->save();
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}

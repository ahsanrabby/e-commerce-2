<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;
    private static $brand, $image, $imageNewName, $directory, $imageUrl;
    public static function saveData($request)
    {
        self::$brand    = new Brand();
        self::$brand->name    = $request->name;
        self::$brand->description    = $request->description;
        self::$brand->image    = self::saveImage($request);
        self::$brand->save();
    }

    private static function saveImage($request)
    {
        self::$image = $request->file('image');
        self::$imageNewName = self::$image->getClientOriginalName();
        self::$directory = 'admin-asset/brand/';
        self::$imageUrl=self::$directory.self::$imageNewName;
        self::$image->move(self::$directory,self::$imageNewName);
        return self::$imageUrl;

    }
    public static function deleteData($request)
    {
        self::$brand = Brand::find($request->id);
        self::$brand->delete();
    }

}

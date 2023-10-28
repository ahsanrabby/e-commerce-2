<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    private static $category,$image, $imageNewName, $imageUrl, $directory;
    protected $fillable =['id','name','status'];
    public static function storeData($request)
    {
        self::$category = new Category();
        self::$category->name = $request->name;
        self::$category->description = $request->description;
        self::$category->image = self::saveImage($request);
        self::$category->save();
    }
    private static function saveImage($request)
    {
        self::$image = $request->file('image');
        self::$imageNewName = self::$image->getClientOriginalName();
        self::$directory = 'admin-asset/category/';
        self::$imageUrl= self::$directory.self::$imageNewName;
        self::$image->move(self::$directory,self::$imageNewName);
        return self::$imageUrl;

    }
    public static function categoryUpdate($request,$id)
    {
       self::$category = Category::find($id);
       if ($request->file('image'))
       {
           if (file_exists(self::$category->image))
           {
               unlink(self::$category->image);
           }
           self::$imageUrl = self::saveImage($request);
       }
       else{
           self::$imageUrl= self::$category->image;
       }
       self::$category->name = $request->name;
       self::$category->image = self::$imageUrl;
       self::$category->description = $request->description;
       self::$category->save();



    }
    public static function deleteData($id)
    {
        self::$category = Category::find($id);
        self::$category->delete();
    }
}

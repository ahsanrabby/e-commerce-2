<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use HasFactory;
    protected $fillable=['id','cat_id','name','image','description','status'];
    private static $sub_category;

    public static function storeData($request)
    {
        self::$sub_category = new SubCategory();
        self::$sub_category->cat_id = $request->cat_id;
        self::$sub_category->name = $request->name;
        self::$sub_category->description = $request->description;
        self::$sub_category->save();

    }

        public static function deleteData( $id)
        {
            self::$sub_category = SubCategory::find($id);
            self::$sub_category->delete();
        }

        public static function updateData($request, $id)
        {
            self::$sub_category = SubCategory::find($id);
            self::$sub_category->cat_id = $request->cat_id;
            self::$sub_category->name = $request->name;
            self::$sub_category->description = $request->description;
            self::$sub_category->save();
        }



    public function category()
    {
        return $this->belongsTo(Category::class,'cat_id');
    }
}

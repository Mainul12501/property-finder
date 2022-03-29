<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected static $blogCategory;
    protected static $image;

    public static function saveData ($request)
    {
        self::$image = $request->file('image');

        self::$blogCategory = new BlogCategory();
        self::$blogCategory->name   = $request->name;
        self::$blogCategory->image   = saveImage(self::$image, 'admin-assets/img/blog-category/');
        self::$blogCategory->save();
    }

    public static function updateData($request, $id)
    {
        self::$image = $request->file('image');

        self::$blogCategory = BlogCategory::findOrFail($id);
        self::$blogCategory->name = $request->name;
        self::$blogCategory->image = saveImage(self::$image, 'admin-assets/img/blog-category/', self::$blogCategory->image);
        self::$blogCategory->save();
    }

    public function blogs ()
    {
        return $this->hasMany(Blog::class);
    }
}

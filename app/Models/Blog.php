<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected static $blog;
    protected static $image;

    public static function saveData ($request)
    {
        self::$image = $request->file('main_image');

        self::$blog = new Blog();
        self::$blog->blog_category_id   = $request->blog_category_id;
        self::$blog->blog_title   = $request->blog_title;
        self::$blog->main_image   = saveImage(self::$image, 'admin-assets/img/blogs/');
        self::$blog->content   = $request->content;
        self::$blog->slug   = str_replace(' ', '-', $request->blog_title);
        self::$blog->save();
    }

    public static function updateData($request, $id)
    {
        self::$image = $request->file('main_image');

        self::$blog = Blog::findOrFail($id);
        self::$blog->blog_category_id   = $request->blog_category_id;
        self::$blog->blog_title   = $request->blog_title;
        self::$blog->main_image   = saveImage(self::$image, 'admin-assets/img/blogs/', self::$blog->main_image);
        self::$blog->content   = $request->content;
        self::$blog->slug   = str_replace(' ', '-', $request->blog_title);
        self::$blog->save();
    }

    public function blogCategory ()
    {
        return $this->belongsTo(BlogCategory::class);
    }
}
